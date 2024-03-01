<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nobreak extends MY_Controller {

	private $form_rules = [
			[
				'field' => 'customer_id',
				'label' => 'Cliente',
				'rules' => 'required|is_natural_no_zero'
			],

			[
				'field' => 'serial_number',
				'label' => 'Número de serie',
				'rules' => 'required|trim'
			],

			[
				'field' => 'area',
				'label' => 'Area/Encargado',
				'rules' => 'required|trim'
			],

			[
				'field' => 'brand',
				'label' => 'Marca',
				'rules' => 'required|trim'
			],

			[
				'field' => 'status',
				'label' => 'Estado',
				'rules' => 'required|trim'
			],

			[
				'field' => 'observations',
				'label' => 'Observaciones',
				'rules' => 'trim'
			]
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('inventory/nobreak_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('inventory.list_records')) ? $this->twig->display('inventory/nobreak/nobreak') : show_404();
	}

	public function add_equipment()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('inventory.add')) ? '' : show_404();

		/*=========================================================
		=            VALIDAR LOS CAMPOS DEL FORMULARIO            =
		=========================================================*/

		$validator = ['success' => false, 'messages' => []];

		$config = [
			[
				'field' => 'serial_number',
				'label' => 'Número de serie',
				'rules' => 'trim|required'
			],

			[
				'field' => 'area',
				'label' => 'Area/Encargado',
				'rules' => 'trim|required'
			],

			[
				'field' => 'brand',
				'label' => 'Marca',
				'rules' => 'trim|required'
			],

			[
				'field' => 'status',
				'label' => 'Estado',
				'rules' => 'trim|required'
			],

			[
				'field' => 'observations',
				'label' => 'Observaciones',
				'rules' => 'trim'
			]
		];

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run() === true)
		{
			/*================================================================
			=            INSERTAR EL REGISTRO EN LA BASE DE DATOS            =
			================================================================*/

			$add_equipment = $this->nobreak_model->add_equipment();

			if($add_equipment === true)
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

	public function edit_equipment($equipment_id = null)
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('inventory.edit')) ? '' : show_404();

		if($equipment_id)
		{
			/*=========================================================
			=            VALIDAR LOS CAMPOS DEL FORMULARIO            =
			=========================================================*/

			$validator = ['success' => false, 'messages' => []];

			$this->form_validation->set_rules($this->form_rules);
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if($this->form_validation->run() === true)
			{
				/*================================================================
				=            INSERTAR EL REGISTRO EN LA BASE DE DATOS            =
				================================================================*/

				$edit_equipment = $this->nobreak_model->edit_equipment($equipment_id);

				if($edit_equipment === true)
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

	public function list_equipment()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('inventory.list_records')) ? '' : show_404();

		$result = ['data' =>[]];
		$data = $this->nobreak_model->list_equipment();

		foreach($data as $key => $value)
		{
			# Mostrar u ocultar botones
			$is_edit_active = (acl_permits('inventory.edit')) ? '<a class="dropdown-item" href="#" onclick="editEquipmentModel('.$value['product_id'].')">Editar equipo</a>' : '';

			$is_view_active = (acl_permits('inventory.view')) ? '<a class="dropdown-item" href="#" onclick="viewEquipmentModel('.$value['product_id'].')">Mostrar equipo</a>' : '';

			$is_actions_active = (acl_permits('inventory.edit') || acl_permits('inventory.view')) ? '' : 'disabled';

			# Botones de Acción
			$buttons =
			'
			<div class="btn-group">
				<button type="button" class="btn btn-default">Opciones</button>
				<button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" '.$is_actions_active.'>
					<span class="sr-only">Toggle Dropdown</span>
					<div class="dropdown-menu" role="menu">
						'.$is_edit_active.'
						'.$is_view_active.'
					</div>
				</button>
			</div>
			';

			# Crear el arreglo con la información recibida desde la base de datos
			$result['data'][$key] = array(
				$value['customer'],
				$value['serial_number'],
				$value['area'],
				$value['brand'],
				$value['status'],
				$buttons,
			);
		}

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_equipment($id = null)
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('inventory.view') || $this->acl_permits('inventory.edit')) ? '' : show_404();

		if ($id == null) {
			return null;
		}

		$data = $this->nobreak_model->get_equipment(intval($id));

		$result = [
			'customer_id' => $data['customer_id'] ?? null,
			'customer' => $data['customer'] ?? null,
			'serial_number' => $data['serial_number'] ?? null,
			'area' => $data['area'] ?? null,
			'brand' => $data['brand'] ?? null,
			'status' => $data['status'] ?? null,
			'observations' => $data['observations'] ?? null
		];

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function select2_customers()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('inventory.add') || !$this->acl_permits('inventory.edit')) ? '' : show_404();

		# Valores a buscar en la base de datos
		$id = 'customer_id';
		$text = 'customer';
		$table = 'customers';
		$searchTerm = $this->input->post('searchTerm');

		# Obtener la información
		$result = $this->nobreak_model->select2($id, $text, $table, $searchTerm);

		foreach($result as $row)
		{
			$data[] = ["id" => $row['customer_id'], "text" => $row['customer']];
		}

		header("Content-type: application/json; charset=utf-8");
		echo json_encode($data);
	}
}
