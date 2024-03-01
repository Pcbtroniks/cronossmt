<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Software extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		# Si no tiene permisos, rechazar acceso.
		($this->acl_permits('software.view_section')) ? $this->twig->display('software/software') : show_404();
	}
}