<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Spipu\Html2Pdf\Html2Pdf;

class Smt extends MY_Controller
{

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->library('html2pdfCI');
		$this->load->model('quotations_model');
		$this->require_min_level(1);
		(is_role('admin') || is_role('technician')) ? '' : show_404();
	}


    public function index()
	{
		$this->twig->display('quotations/quotations');
	}

	public function add_incidence()
	{
		$this->twig->display('smt/add_incidence');
	}

	public function add_overtime()
	{
		$this->twig->display('smt/add_overtime');
	}

	public function list()
	{
		$result = ['data' => []];
		$quotations = $this->quotations_model->list();

		foreach ($quotations as $key => $quotation) {
			# Botones de Acción
			$buttons =
			'
			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Opciones
				</button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="'.base_url().'quotations/download/'.$quotation['quotation_id'].'" target="_BLANK"><i class="fas fa-download"></i> Formato IVA desglosado (ESPN)</a>
					<a class="dropdown-item" href="'.base_url().'quotations/download_format2/'.$quotation['quotation_id'].'" target="_BLANK"><i class="fas fa-download"></i> Formato IVA incluido (ESPN)</a>
					<a class="dropdown-item" href="'.base_url().'quotations/download_format3/'.$quotation['quotation_id'].'" target="_BLANK"><i class="fas fa-download"></i> Formato IVA desglosado (ENG)</a>
					<a class="dropdown-item" href="'.base_url().'quotations/download_format4/'.$quotation['quotation_id'].'" target="_BLANK"><i class="fas fa-download"></i> Formato IVA incluido (ENG)</a>
				</div>
			</div>
			';

			# Crear el arreglo con la información recibida desde la base de datos
			$result['data'][$key] = array(
				$quotation['quotation_id'],
				$quotation['created_at'],
				$quotation['customer'],
				$quotation['seller'],
				$quotation['subtotal'],
				$quotation['total'],
				$buttons,
			);
		}

		# Codificar el arreglo en formato JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function download($quotation_id)
	{
		$quotation_id = intval($quotation_id);

		if($quotation_id)
		{
			$quotation = $this->quotations_model->get($quotation_id);
			$quotation = $this->formatter_description($quotation);
			$view_path = 'quotations/invoice';

			$this->generate_pdf($quotation, $view_path);
		}
	}

	public function download_format2($quotation_id)
	{
		$quotation_id = intval($quotation_id);

		if($quotation_id)
		{
			$quotation = $this->quotations_model->get2($quotation_id);
			$quotation = $this->formatter_description($quotation);
			$view_path = 'quotations/invoice_iva_inc';

			$this->generate_pdf($quotation, $view_path);
		}
	}

	public function download_format3($quotation_id)
	{
		$quotation_id = intval($quotation_id);

		if($quotation_id)
		{
			$quotation = $this->quotations_model->get($quotation_id);
			$quotation = $this->formatter_description($quotation);
			$view_path = 'quotations/invoice_iva_desglosado_eng';

			$this->generate_pdf($quotation, $view_path);
		}
	}

	public function download_format4($quotation_id)
	{
		$quotation_id = intval($quotation_id);

		if($quotation_id)
		{
			$quotation = $this->quotations_model->get2($quotation_id);
			$quotation = $this->formatter_description($quotation);
			$view_path = 'quotations/invoice_iva_inc_eng';

			$this->generate_pdf($quotation, $view_path);
		}
	}

	public function generate_pdf(array $quotation, $view_path)
	{
		$quotation = $this->formatter_description($quotation);
		$title_document = 'Cotización #' . intval($quotation['details']['quotation_id']);
		$html = $this->twig->render($view_path, $quotation);

		$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
		$html2pdf->setDefaultFont('helvetica', '', 12);
		$html2pdf->writeHTML($html);
		$html2pdf->pdf->SetTitle($title_document);
		return $html2pdf->output();
	}

	public function formatter_description(array $quotation)
	{

		for($i = 0; $i < count($quotation['concepts']); $i++)
		{
			$quotation['concepts'][$i]['description'] = wordwrap($quotation['concepts'][$i]['description'], 30, "<br />\n");
		}

		return $quotation;
	}

}