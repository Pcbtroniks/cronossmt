<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - MY Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

require_once APPPATH . 'third_party/community_auth/core/Auth_Controller.php';

class MY_Controller extends Auth_Controller
{
	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('auth_helper');

		$config_twig = [
			'functions' => ['is_role', 'acl_permits'],
		];

		$this->load->library('twig', $config_twig);

		# Añade variables globales para Twig.
		$this->twig->addGlobal("session", $this->session);

		# Cargar las variables de autentificación.
		$this->is_logged_in();

		# Authentication Variables.
		$this->twig->addGlobal('user_id', $this->auth_user_id);
		$this->twig->addGlobal('user_email', $this->auth_email);
		$this->twig->addGlobal('username', $this->auth_username);
		$this->twig->addGlobal('user_level', $this->auth_level);
		$this->twig->addGlobal('user_role', $this->auth_role);
	}

}

/* End of file MY_Controller.php */
/* Location: /community_auth/core/MY_Controller.php */
