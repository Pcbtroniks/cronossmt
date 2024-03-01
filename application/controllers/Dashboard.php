<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->require_min_level(1);
		$this->load->model('stats_model');
	}

	public function index()
	{

		$stats = array(
			'all_products' => $this->stats_model->count_products(),
			'customers' => $this->stats_model->count_customers(),
			'users' => $this->stats_model->count_users(),
			'computo' => $this->stats_model->count_by_category(1),
			'printer' => $this->stats_model->count_by_category(2),
			'television' => $this->stats_model->count_by_category(3),
			'projector' => $this->stats_model->count_by_category(4),
			'nobreak' => $this->stats_model->count_by_category(5),
			'other' => $this->stats_model->count_by_category(6),
      'pending' => $this->stats_model->count_pending(),
      'in_process' => $this->stats_model->count_in_process(),
      'finished' => $this->stats_model->count_finished()
		);

		$this->twig->display('dashboard/dashboard', $stats);
	}
}
