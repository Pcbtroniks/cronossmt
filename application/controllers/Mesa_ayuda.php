<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesa_ayuda extends MY_Controller {


	private $add_rules = [
		[
			'field' => 'customer_id',
			'label' => 'Cliente',
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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tickets_model');
		$this->load->library('form_validation');
	}

	public function add()
	{
		$validator = ['success' => false, 'messages' => []];
		$this->form_validation->set_rules($this->add_rules);
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		// Categoría y subcategoría
		$_POST['category_id'] = 3;
		$_POST['subcategory_id'] = 11;

		// Validar Captcha
		if(!$this->validar_captcha())
		{
			$validator['success'] = false;
			$validator['messages'] = 'Completa el captcha';

			header("Content-type: application/json; charset=utf-8");
			echo json_encode($validator);
			exit;
		}

		if ($this->form_validation->run() === true) {
			$add_ticket = $this->tickets_model->add();

			if ($add_ticket === true) {
				$validator['success'] = true;
				$validator['messages'] = 'Asignaremos un técnico a este reporte y será atendido en la brevedad posible.';
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

	private function validar_captcha()
	{
	  // ReCaptcha V2
	  $captcha = $this->input->post('g-recaptcha-response');
    
	  if(!empty($captcha))
	  {
		$secretKey = "6LeWm90ZAAAAAD4PKBAFq5xsOlLImj5uIP3NZ9Qc";
		$ip = $_SERVER['REMOTE_ADDR'];
		$ch = curl_init();
    
		curl_setopt_array($ch, [
		  CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
		  CURLOPT_POST => true,
		  CURLOPT_POSTFIELDS => [
			'secret' => $secretKey,
			'response' => $captcha,
			'remoteip' => $ip
		  ],
  
		  CURLOPT_RETURNTRANSFER => true
		]);

		$output = curl_exec($ch);
		curl_close($ch);
  
		//Si queremos visualizar la información obtenida de la petición a la api de validación de Google para comprobar el estado de esta lo haremos con la función de PHP var_dump
		//var_dump($output);
  
		$jsonResponde = json_decode($output);
		return ($jsonResponde->success) ? true : false;
	  }
  
	  else
	  {
		return false;
	  }
	}
  

	public function index()
	{
		$this->twig->display('servicedesk/servicedesk');
	}
}