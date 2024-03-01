<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets extends MY_Controller
{

	private $add_rules = [
		[
			'field' => 'customer_id',
			'label' => 'Cliente',
			'rules' => 'required|is_natural_no_zero'
		],

		[
			'field' => 'category_id',
			'label' => 'Categoría',
			'rules' => 'required|is_natural_no_zero'
		],

		[
			'field' => 'subcategory_id',
			'label' => 'Subcategoría',
			'rules' => 'required|is_natural_no_zero'
		],

		[
			'field' => 'request_of',
			'label' => 'Solicitud de',
			'rules' => 'trim|required'
		],

		[
			'field' => 'end_user',
			'label' => 'Usuario final',
			'rules' => 'trim|required'
		],

		[
			'field' => 'msj_customer',
			'label' => 'Mensaje del cliente',
			'rules' => 'trim|required'
		],
	];

	private $edit_rules = [
		[
			'field' => 'category_id',
			'label' => 'Categoría',
			'rules' => 'required|is_natural_no_zero'
		],

		[
			'field' => 'subcategory_id',
			'label' => 'Subcategoría',
			'rules' => 'required|is_natural_no_zero'
		],

		[
			'field' => 'request_of',
			'label' => 'Solicitud de',
			'rules' => 'trim|required'
		],

		[
			'field' => 'end_user',
			'label' => 'Usuario final',
			'rules' => 'trim|required'
		],

		[
			'field' => 'status',
			'label' => 'Estado',
			'rules' => 'required|in_list[PENDIENTE,EN PROCESO,FINALIZADO,CANCELADO]'
		],

		[
			'field' => 'msj_technician',
			'label' => 'Mensaje del técnico',
			'rules' => 'trim|required'
		]
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tickets_model');
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->load->library('pdfgenerator');
		$this->require_min_level(1);
		(is_role('admin') || is_role('technician')) ? '' : show_404();

		$this->twig->addGlobal('technicians', $this->user_model->list_technicians());
		$this->twig->addGlobal('categories', $this->tickets_model->get_categories());
		$this->twig->addGlobal('subcategories', $this->tickets_model->get_subcategories());
	}

	public function index()
	{
		$this->twig->display('tickets/tickets');
	}

	public function add()
	{
		$validator = ['success' => false, 'messages' => []];
		$this->form_validation->set_rules($this->add_rules);
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() === true) {
			$add_ticket = $this->tickets_model->add();

			if ($add_ticket === true) {
				$validator['success'] = true;
				$validator['messages'] = 'Añadido exitosamente';
			} else {
				$validator['success'] = false;
				$validator['messages'] = 'Error al actualizar la información';
			}
		} else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}
		}

		header("Content-type: application/json; charset=utf-8");
		echo json_encode($validator);
	}

	public function edit($ticket_id = null)
	{
		if ($ticket_id) {
			$validator = ['success' => false, 'messages' => []];
			$this->form_validation->set_rules($this->edit_rules);
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if ($this->form_validation->run() === true) {

				$edit_ticket = $this->tickets_model->edit($ticket_id);

				if ($edit_ticket === true) {
					$validator['success'] = true;
					$validator['messages'] = 'Actualizado exitosamente';
				} else {
					$validator['success'] = false;
					$validator['messages'] = 'Error al actualizar la información';
				}
			} else {
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
					$validator['messages'][$key] = form_error($key);
				}
			}

			header("Content-type: application/json; charset=utf-8");
			echo json_encode($validator);
		}
	}

	public function list()
	{
		$result = ['data' => []];
		$tickets = $this->tickets_model->list();

		foreach ($tickets as $key => $ticket) {
			# Restricción para bloquear edición de tickets finalizados o cancelados.
			$is_edit_active = ($ticket['status'] == 'FINALIZADO' || $ticket['status'] == 'CANCELADO') ? '' : '<a class="dropdown-item" href="#" onclick="editTicketModel(' . $ticket['ticket_id'] . ')"><i class="fas fa-edit"></i> Actualizar</a>';

			# Botones de Acción
			$buttons =
				'
			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Opciones
				</button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

					' . $is_edit_active . '
					<a class="dropdown-item" href="#" onclick="viewTicketModel(' . $ticket['ticket_id'] . ')"><i class="fas fa-eye"></i> Mostrar</a>
					<a class="dropdown-item" href="#" onclick="shareTicketModel(' . $ticket['ticket_id'] . ')"><i class="fab fa-whatsapp"></i> Compartir</a>

				</div>
			</div>
			';

			# Crear el arreglo con la información recibida desde la base de datos
			$result['data'][$key] = array(
				$ticket['ticket_id'],
				$ticket['customer'],
				$ticket['request_of'],
				$ticket['created_at'],
				$ticket['updated_at'],
				$ticket['email'],
				$this->label_style($ticket['status']),
				$buttons,
			);
		}

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_ticket($id = null)
	{
		if ($id == null) {
			return null;
		}

		$data = $this->tickets_model->get_ticket(intval($id));
		$activity_ticket = $this->tickets_model->get_activity(intval($id));

		$result = [
			'ticket_id' => $data['ticket_id'] ?? null,
			'category_id' => $data['category_id'] ?? null,
			'subcategory_id' => $data['subcategory_id'] ?? null,
			'customer' => $data['customer'] ?? null,
			'request_of' => $data['request_of'] ?? null,
			'end_user' => $data['end_user'] ?? null,
			'status' => $data['status'] ?? null,
			'msj_customer' => $data['msj_customer'] ?? null,
			'created_at' => $data['created_at'] ?? null,
			'updated_at' => $data['updated_at'] ?? null,
			'activity' => $activity_ticket
		];

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	/*========================================
	=            HELPER FUNCTIONS            =
	========================================*/

	/**
	 * Label Style
	 *
	 * Darle estilos CSS a los estados de los reportes.
	 *
	 * @param  string $status | El nombre del estado.
	 * @return string|null
	 */
	public function label_style($status = null)
	{
		switch ($status) {
			case 'PENDIENTE':
				$status = '<span class="badge badge-danger" style="font-weight:normal;">PENDIENTE</span>';
				break;

			case 'EN PROCESO':
				$status = '<span class="badge badge-warning" style="font-weight:normal;">EN PROCESO</span>';
				break;

			case 'FINALIZADO':
				$status = '<span class="badge badge-success" style="font-weight:normal;">FINALIZADO</span>';
				break;

			case 'CANCELADO':
				$status = '<span class="badge badge-dark" style="font-weight:normal;">CANCELADO</span>';
				break;

			default:
				$status = null;
				break;
		}

		return $status;
	}

	public function download_report()
	{
		$data = $this->tickets_model->download_report();
		$html = $this->twig->render('tickets/report_tickets', array(
			'customer_details' => $data['customer_details'],
			'month' => $this->input->post('updated_at'),
			'download_date' => date("Y-m-d H:i:s"),
			'tickets' => $data['tickets'],
			'pending' => $data['pending'],
			'in_process' => $data['in_process'],
			'finished' => $data['finished']
		));
		$this->pdfgenerator->generate($html, 'reporte.pdf');
	}
}
