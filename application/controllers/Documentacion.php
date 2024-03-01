<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentacion extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		# Si no tiene permisos, rechazar acceso.
		# ($this->acl_permits('documentation.view_section')) ? $this->twig->display('documentacion/documentacion') : show_404();
		$this->twig->display('documentacion/documentacion');
	}
}