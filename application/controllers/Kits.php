<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kits extends MY_Controller {

  public function __construct()
  {
		parent::__construct();
    $this->load->model('kits_model');
		$this->load->library('form_validation');
  }

  public function index()
  {
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('kits.list_records')) ? $this->twig->display('tool/kits') : show_404();
	}

	public function add_kit()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('kits.add')) ? '' : show_404();

		$validator = ['success' => false, 'messages' => []];
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run('kits') === true)
		{

			$add_equipment = $this->kits_model->add_kit();

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

	public function edit_kit($equipment_id = null)
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('kits.edit')) ? '' : show_404();

		if($equipment_id)
		{
			$validator = ['success' => false, 'messages' => []];
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if($this->form_validation->run('kits') === true)
			{

				$edit_kit = $this->kits_model->edit_kit($equipment_id);

				if($edit_kit === true)
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

	public function list_kits()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('kits.list_records')) ? '' : show_404();

		$result = ['data' =>[]];
		$data = $this->kits_model->list_kits();

		foreach($data as $key => $value)
		{
			# Botones de Acción
			$buttons =
			'
			<div class="btn-group">
				<button type="button" class="btn btn-default">Opciones</button>
				<button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
					<span class="sr-only">Toggle Dropdown</span>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="#" onclick="editEquipmentModel('.$value['kit_id'].')">Editar equipo</a>
						<a class="dropdown-item" href="#" onclick="viewEquipmentModel('.$value['kit_id'].')">Mostrar equipo</a>
					</div>
				</button>
			</div>
			';

			# Crear el arreglo con la información recibida desde la base de datos
			$result['data'][$key] = array(
				$value['kit_name'],
				$value['email'],
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
		($this->acl_permits('kits.view') || $this->acl_permits('kits.edit')) ? '' : show_404();

		if ($id == null) {
			return null;
		}

		$data = $this->kits_model->get_equipment(intval($id));

		$result = [
			'kit_name' => $data['kit_name'] ?? null,
			'user_id' => $data['user_id'] ?? null,
			'status' => $data['status'] ?? null,
			'observations' => $data['observations'] ?? null
		];

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function select2_users()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('kits.add') || $this->acl_permits('kits.edit')) ? '' : show_404();

		# Valores a buscar en la base de datos
		$id = 'user_id';
		$text = 'email';
		$table = 'users';
		$searchTerm = $this->input->post('searchTerm');

		# Obtener la información
		$result = $this->kits_model->select2($id, $text, $table, $searchTerm);

		foreach($result as $row)
		{
			$data[] = ["id" => $row['user_id'], "text" => $row['email']];
		}

		header("Content-type: application/json; charset=utf-8");
		echo json_encode($data);
	}

}
