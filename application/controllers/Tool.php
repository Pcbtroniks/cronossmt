<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends MY_Controller {

  public function __construct()
  {
		parent::__construct();
		$this->load->model('tools_model');
		$this->load->library('form_validation');
  }

  public function index()
  {
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('tools.list_records')) ? $this->twig->display('tool/tool') : show_404();
  }

	public function add_tool()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('tools.add')) ? '' : show_404();

		$validator = ['success' => false, 'messages' => []];
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run('tools') === true)
		{

			$add_equipment = $this->tools_model->add_tool();

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

	public function edit_tool($equipment_id = null)
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('tools.edit')) ? '' : show_404();

		if($equipment_id)
		{

			$validator = ['success' => false, 'messages' => []];
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if($this->form_validation->run('tools') === true)
			{
				$edit_kit = $this->tools_model->edit_tool($equipment_id);

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

	public function list_tools()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('tools.list_records')) ? '' : show_404();

		$result = ['data' =>[]];
		$data = $this->tools_model->list_tools();

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
						<a class="dropdown-item" href="#" onclick="editToolModel('.$value['tool_id'].')">Editar herramienta</a>
						<a class="dropdown-item" href="#" onclick="viewToolModel('.$value['tool_id'].')">Mostrar detalles</a>
					</div>
				</button>
			</div>
			';

			# Crear el arreglo con la información recibida desde la base de datos
			$result['data'][$key] = array(
				$value['kit_name'],
				$value['tool_name'],
				$value['stock'],
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
		( $this->acl_permits('tools.view') || $this->acl_permits('tools.edit') ) ? '' : show_404();

		if ($id == null) {
			return null;
		}

		$data = $this->tools_model->get_equipment(intval($id));

		$result = [
			'kit_id' => $data['kit_id'] ?? null,
			'kit_name' => $data['kit_name'] ?? null,
			'tool_name' => $data['tool_name'] ?? null,
			'stock' => $data['stock'] ?? null,
			'brand' => $data['brand'] ?? null,
			'status' => $data['status'] ?? null,
			'observations' => $data['observations'] ?? null
		];

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function select2_kits()
	{
		# Si no tiene permisos, rechazar acceso.
		( $this->acl_permits('tools.add') || $this->acl_permits('tools.edit') ) ? '' : show_404();

		# Valores a buscar en la base de datos
		$id = 'kit_id';
		$text = 'kit_name';
		$table = 'kits';
		$searchTerm = $this->input->post('searchTerm');

		# Obtener la información
		$result = $this->tools_model->select2($id, $text, $table, $searchTerm);

		foreach($result as $row)
		{
			$data[] = ["id" => $row['kit_id'], "text" => $row['kit_name']];
		}

		header("Content-type: application/json; charset=utf-8");
		echo json_encode($data);
	}

}
