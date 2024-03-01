<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Users extends MY_Controller {



	public function __construct()

	{

		parent::__construct();

		$this->load->helper('auth');

		$this->load->model('examples/examples_model');

		$this->load->model('examples/validation_callables');

		$this->load->model('user_model');

		$this->load->library('form_validation');

	}



	public function index()

	{

		($this->acl_permits('users.list_records')) ? $this->twig->display('users/users') : show_404();

	}

	public function create_user()

	{

		# Si no tiene permisos, rechazar acceso.

		($this->acl_permits('users.add')) ? '' : show_404();



		/*=========================================================

		=            VALIDAR LOS CAMPOS DEL FORMULARIO            =

		=========================================================*/



		$validator = ['success' => false, 'messages' => ['']];



		$config = [

			[

				'field' => 'email',

				'label' => 'correo eletrónico',

				'rules' => 'trim|required|valid_email|is_unique[' . db_table('user_table') . '.email]'

			],



			[

				'field' => 'password',

				'label' => 'contraseña',

				'rules' => [

					'trim',

					'required',

					[

						'_check_password_strength',

						[ $this->validation_callables, '_check_password_strength' ]

					]

				],

			],



			[

				'field' => 'passconf',

				'label' => 'confirmar la contraseña',

				'rules' => 'trim|required|matches[password]'

			],



			[

				'field' => 'auth_level',

				'label' => 'auth_level',

				'rules' => 'required|integer|in_list[1,2,3,9]'

			],

		];



		$this->form_validation->set_message('matches', 'El campo <b>%s</b> no coincide con el campo de <b>%s.</b>');

		$this->form_validation->set_rules($config);

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');



		if($this->form_validation->run() === true)

		{

			$user_data = array(

				'username' => NULL,

				'user_id' => $this->examples_model->get_unused_id(),

				'email' => $this->input->post('email'),

				'auth_level' => $this->input->post('auth_level'),

				'passwd' => $this->authentication->hash_passwd($this->input->post('password')),

				'created_at' => date('Y-m-d H:i:s')

			);



			/*================================================================

			=            INSERTAR EL REGISTRO EN LA BASE DE DATOS            =

			================================================================*/



			$this->db->trans_start();



			$this->db->set($user_data)->insert(db_table('user_table'));



			$allowed_codes = $this->set_acl();



			for($i = 0; $i < count($allowed_codes); $i++)

			{

				$data = array(

					'action_id' => $allowed_codes[$i],

					'user_id' => $user_data['user_id']

				);



				$this->db->set($data)->insert(db_table('acl_table'));

			}



			$this->db->trans_complete();



			if($this->db->trans_status())

			{

				$validator['success'] = true;

				$validator['messages'] = 'Añadido exitosamente';

			}

			else

			{

				$validator['success'] = false;

				$validator['messages'] = 'Error al actualizar la información.';

			}



		}

		else

		{

			$validator['success'] = false;

			foreach($_POST as $key => $value)

			{

				$validator['messages'][$key] = form_error($key);

			}

		}



		header("Content-type: application/json; charset=utf-8");

		echo json_encode($validator);

	}



	private function set_acl()

	{

		$action_codes = array(

			$this->input->post('users_add'),

			$this->input->post('users_view'),

			$this->input->post('users_edit'),

			$this->input->post('users_disable'),

			$this->input->post('users_list_records'),

			$this->input->post('customers_add'),

			$this->input->post('customers_view'),

			$this->input->post('customers_edit'),

			$this->input->post('customers_disable'),

			$this->input->post('customers_list_records'),

			$this->input->post('inventory_add'),

			$this->input->post('inventory_view'),

			$this->input->post('inventory_edit'),

			$this->input->post('inventory_delete'),

			$this->input->post('inventory_list_records'),

			$this->input->post('reports_inventory_add'),

			$this->input->post('reports_inventory_view'),

			$this->input->post('reports_inventory_list_records'),

			$this->input->post('kits_add'),

			$this->input->post('kits_view'),

			$this->input->post('kits_edit'),

			$this->input->post('kits_delete'),

			$this->input->post('kits_list_records'),

			$this->input->post('tools_add'),

			$this->input->post('tools_view'),

			$this->input->post('tools_edit'),

			$this->input->post('tools_delete'),

			$this->input->post('tools_list_records'),

			$this->input->post('software_view_section'),

		);



		$allowed_codes = array();



		for($i = 0; $i < count($action_codes); $i++)

		{

			if(!empty($action_codes[$i]))

			{

				array_push($allowed_codes, $action_codes[$i]);

			}

		}



		return $allowed_codes;

	}





	public function edit_user($user_id = null)

	{

		# Si no tiene permisos, rechazar acceso.

		($this->acl_permits('users.edit')) ? '' : show_404();



		if($user_id){



			/*=========================================================

			=            VALIDAR LOS CAMPOS DEL FORMULARIO            =

			=========================================================*/



			$validator = ['success' => false, 'messages' => []];



			$email = $this->input->post('upd_email'); // Se utilizara para posteriormente hacer la validación email_check.



			$config = [

				[

					'field' => 'upd_email',

					'label' => 'correo eletrónico',

					'rules' => "trim|required|valid_email|callback_email_check[$user_id]"

				],



				[

					'field' => 'upd_banned',

					'label' => 'Estado',

					'rules' => 'required|integer|in_list[0,1]'

				],



				[

					'field' => 'upd_auth_level',

					'label' => 'rol',

					'rules' => 'trim|required'

				]

			];



			$this->form_validation->set_message('matches', 'El campo <b>%s</b> no coincide con el campo de <b>%s.</b>');

			$this->form_validation->set_rules($config);

			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');



			if($this->form_validation->run() === true)

			{



				$user_data = [

					'email' => $this->input->post('upd_email'),

					'banned' => $this->input->post('upd_banned'),

					'auth_level' => $this->input->post('upd_auth_level')

				];



				/*================================================================

				=            INSERTAR EL REGISTRO EN LA BASE DE DATOS            =

				================================================================*/



				$this->db->trans_start();



				$this->db->set($user_data)->where('user_id', $user_id)->update(db_table('user_table')); // Actualizar columnas existentes en users_table.

				$this->db->where('user_id', $user_id)->delete(db_table('acl_table')); // Eliminar los permisos previos a la actualización.



				$allowed_codes = $this->set_acl(); // Obtener el listado de action_id que se van a insertar en la tabla ACL.



				for($i = 0; $i < count($allowed_codes); $i++)

				{

					$data = array(

						'action_id' => $allowed_codes[$i],

						'user_id' => $user_id

					);



					$this->db->set($data)->insert(db_table('acl_table'));

				}



				$this->db->trans_complete();



				if($this->db->trans_status())

				{

					$validator['success'] = true;

					$validator['messages'] = 'Actualizado exitosamente';

				}

				else

				{

					$validator['success'] = false;

					$validator['messages'] = 'Error al actualizar la información.';

				}



			}

			else

			{

				$validator['success'] = false;

				foreach($_POST as $key => $value)

				{

					$validator['messages'][$key] = form_error($key);

				}

			}



			header("Content-type: application/json; charset=utf-8");

			echo json_encode($validator);

		}



	}



	public function update_password($user_id = null)

	{

		# Si no tiene permisos, rechazar acceso.

		($this->acl_permits('users.edit')) ? '' : show_404();



		if($user_id){



			/*=========================================================

			=            VALIDAR LOS CAMPOS DEL FORMULARIO            =

			=========================================================*/



			$validator = ['success' => false, 'messages' => []];



			$config = [

				[

					'field' => 'upd_password',

					'label' => 'contraseña',

					'rules' => [

						'trim',

						'required',

						[

							'_check_password_strength',

							[ $this->validation_callables, '_check_password_strength' ]

						]

					]

				],



				[

					'field' => 'upd_passconf',

					'label' => 'confirmar la contraseña',

					'rules' => 'required|matches[upd_password]'

				],

			];



			$this->form_validation->set_message('matches', 'El campo <b>%s</b> no coincide con el campo de <b>%s.</b>');

			$this->form_validation->set_rules($config);

			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');



			if($this->form_validation->run() === true)

			{



				/*========================================================

				=            CIFRAR LA CONTRASEÑA DEL USUARIO            =

				========================================================*/



				$_POST['upd_password'] = $this->authentication->hash_passwd($this->input->post('upd_password'));



				/*================================================================

				=            INSERTAR EL REGISTRO EN LA BASE DE DATOS            =

				================================================================*/



				$update_password = $this->user_model->update_password($user_id);



				if($update_password === true)

				{

					$validator['success'] = true;

					$validator['messages'] = 'La contraseña ha sido actualizada exitosamente';

				}

				else

				{

					$validator['success'] = false;

					$validator['messages'] = 'Error al actualizar la contraseña.';

				}



			}

			else

			{

				$validator['success'] = false;

				foreach($_POST as $key => $value)

				{

					$validator['messages'][$key] = form_error($key);

				}

			}



			echo json_encode($validator);

		}

	}



	/**

	 * email_check

	 *

	 * Comprueba si el email que ha introducido el usuario en el formulario, esta disponible o le pertenece al mismo usuario.

	 *

	 * @param  string $email la dirección de email a comprobar en la base de datos

	 * @param  int    $id    el id del usuario que esta realizando la solicitud

	 *

	 * @return bool          true: El email no existe en la base de datos o le pertenece al usuario.

	 *                       false: El email existe y le pertenezca a otro usuario.

	 */

	public function email_check($email = null, $user_id = null)

	{

		# Si no tiene permisos, rechazar acceso.

		($this->acl_permits('users.edit')) ? '' : show_404();



		if(!empty($user_id) && !empty($email))

		{

			if($this->user_model->email_check($email, $user_id)):

				return TRUE;

			else:

				$this->form_validation->set_message('email_check', "Ese correo electrónico ya está siendo utilizado.");

				return FALSE;

			endif;

		}

	}



	public function list_users()

	{

		# Si no tiene permisos, rechazar acceso.

		($this->acl_permits('users.list_records')) ? '' : show_404();



		$result = ['data' =>[]];

		$data = $this->user_model->list_users();

		$roles = $this->config->item('levels_and_roles');



		foreach($data as $key => $value)

		{



			$role = $roles[$value['auth_level']];



			$is_actions_active = (acl_permits('users.edit')) ? '' : 'disabled';



			$btn_desactivate = '<li><a type="button" onclick="desactivateUserModel('.$value['user_id'].')" data-toggle="modal" data-target="#desactivateUserModal">Desactivar</a></li>';



			$btn_activate = '<li><a type="button" onclick="activateUserModel('.$value['user_id'].')" data-toggle="modal" data-target="#activateUserModal">Activar</a></li>';



			$btn_upd_status = (!$value['banned']) ? $btn_desactivate : $btn_activate;



			# Botones de Acción

			$buttons =

			'

			<div class="btn-group">

				<button type="button" class="btn btn-default">Opciones</button>

				<button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" '.$is_actions_active.'>

					<span class="sr-only">Toggle Dropdown</span>

					<div class="dropdown-menu" role="menu">

						<a class="dropdown-item" href="#" onclick="editUserModel('.$value['user_id'].')">Editar perfil</a>

						<a class="dropdown-item" href="#" onclick="updPasswordModel('.$value['user_id'].')">Cambiar contraseña</a>

					</div>

				</button>

			</div>

			';



			# Crear el arreglo con la información recibida desde la base de datos

			$result['data'][$key] = array(

				$value['email'],

				$role,

				$value['banned'] = (!$value['banned']) ? '<button class="btn btn-success btn-sm">Activo</button>' : '<button class="btn btn-danger btn-sm">Desactivado</button>',

				$value['last_login'],

				$buttons,

			);

		}



		# Codificar el arreglo en formato JSON

		header('Content-Type: application/json');

		echo json_encode($result);

	}



	public function get_user($user_id = null)

	{

		# Si no tiene permisos, rechazar acceso.

		( $this->acl_permits('users.edit') || $this->acl_permits('users.view') ) ? '' : show_404();



		if($user_id)

		{

			$data = $this->user_model->get_user(intval($user_id));

			# Codificar el arreglo en formato JSON

			header('Content-Type: application/json');

			echo json_encode($data);

		}

	}



	public function get_user_acl($user_id)

	{

		# Si no tiene permisos, rechazar acceso.

		( $this->acl_permits('users.edit') || $this->acl_permits('users.view') ) ? '' : show_404();



		if($user_id)

		{

			$data = $this->user_model->get_user_acl(intval($user_id));

			# Codificar el arreglo en formato JSON

			header('Content-Type: application/json');

			echo json_encode($data);

		}

	}

}

