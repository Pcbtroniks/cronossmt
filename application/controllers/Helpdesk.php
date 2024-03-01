<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpdesk extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->require_min_level(1);
	}

	public function index()
	{
		$this->twig->display('helpdesk/helpdesk');
	}
}