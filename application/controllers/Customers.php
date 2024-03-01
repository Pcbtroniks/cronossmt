<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends MY_Controller {

	private $customer_id;
	private $customer;
	private $customer_email;

	private $add_rules = [
		[
			'field' => 'customer',
			'label' => 'Cliente',
			'rules' => 'trim|required|max_length[45]|is_unique[customers.customer]'
		]
	];

	private $edit_rules = [
		[
			'field' => 'customer',
			'label' => 'Cliente',
			'rules' => 'trim|required|max_length[45]|callback_customer_owner'
		],

		[
			'field' => 'status',
			'label' => 'Estado',
			'rules' => 'required|in_list[0,1]'
		]
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
		$this->load->library('form_validation');
		$this->load->library('advanced_queries');
	}

	public function index()
	{
		($this->acl_permits('customers.list_records')) ? $this->twig->display('customer/customers') : show_404();
	}

	public function create_customer()
	{
		# Si no tiene permisos, rechazar acceso.
		(!$this->acl_permits('customers.add')) ? show_404() : '';

		$validator = ['success' => false, 'messages' => []];
		$this->form_validation->set_rules($this->add_rules);
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run() === true)
		{
			$create_customer = $this->customer_model->create_customer();

			if($create_customer === true)
			{
				$validator['success'] = true;
				$validator['messages'] = 'Añadido exitosamente';
			}
			else
			{
				$validator['success'] = false;
				$validator['messages'] = 'Error al actualizar la información';
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

	public function edit_customer($customer_id = null)
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('customers.edit')) ? '' : show_404();

		$this->customer_id = $customer_id;
		$this->customer = $this->input->post('customer');
		$this->customer_email = $this->input->post('customer_email');

		if($customer_id)
		{
			$validator = ['success' => false, 'messages' => []];
			$this->form_validation->set_rules($this->edit_rules);
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if($this->form_validation->run() === true)
			{

				$edit_customer = $this->customer_model->edit_customer($customer_id);

				if($edit_customer === true)
				{
					$validator['success'] = true;
					$validator['messages'] = 'Actualizado exitosamente';
				}
				else
				{
					$validator['success'] = false;
					$validator['messages'] = 'Error al actualizar la información';
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

	public function list_customers()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('customers.list_records')) ? '' : show_404();

		$result = ['data' =>[]];
		$data = $this->customer_model->list_customers();

		foreach($data as $key => $value)
		{
			$is_actions_active = (acl_permits('customers.edit')) ? '' : 'disabled';

			# Botones de Acción
			$buttons =
			'
			<div class="btn-group">
				<button type="button" class="btn btn-default">Opciones</button>
				<button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" '.$is_actions_active.'>
					<span class="sr-only">Toggle Dropdown</span>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="#" onclick="editCustomerModal('.$value['customer_id'].')">Editar cliente</a>
					</div>
				</button>
			</div>
			';

			# Crear el arreglo con la información recibida desde la base de datos
			$result['data'][$key] = array(
				$value['customer_id'],
				$value['customer'],
				$value['status'] = ($value['status']) ? '<button class="btn btn-success btn-sm">Activo</button>' : '<button class="btn btn-danger btn-sm">Inactivo</button>',
				$value['created_at'],
				$value['updated_at'],
				$buttons,
			);
		}

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_customer($id = null)
	{
		# Si no tiene permisos, rechazar acceso.
		( $this->acl_permits('customers.add') || $this->acl_permits('customers.edit') ) ? '' : show_404();

		if ($id == null) {
			return null;
		}

		$data = $this->customer_model->get_customer(intval($id));

		$result = [
			'customer' => $data['customer'] ?? null,
			'trade_name' => $data['trade_name'] ?? null,
			'rfc' => $data['rfc'] ?? null,
			'email' => $data['email'] ?? null,
			'phone' => $data['phone'] ?? null,
			'status' => $data['status'] ?? null
		];

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function select2_users()
	{
		# Si no tiene permisos, rechazar acceso.
		( $this->acl_permits('users.list_records') || $this->acl_permits('users.edit') ) ? '' : show_404();

		# Valores a buscar en la base de datos
		$id = 'user_id';
		$text = 'email';
		$table = 'users';
		$searchTerm = $this->input->post('searchTerm');

		# Obtener la información
		$result = $this->customer_model->select2($id, $text, $table, $searchTerm);

		foreach($result as $row)
		{
			$data[] = ["id" => $row['user_id'], "text" => $row['email']];
		}

		header("Content-type: application/json; charset=utf-8");
		echo json_encode($data);
	}

	public function customer_owner()
	{
		# Si no tiene permisos, rechazar acceso.
		( $this->acl_permits('customers.add') || $this->acl_permits('customers.edit') ) ? '' : show_404();

		if(!empty($this->customer_id) && !empty($this->customer))
		{
			if($this->customer_model->customer_owner($this->customer_id, $this->customer)):
				return TRUE;
			else:
				$this->form_validation->set_message('customer_owner', "El nombre del cliente ya está siendo utilizado.");
				return FALSE;
			endif;
		}
	}
}
