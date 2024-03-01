<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends MY_Controller
{
  public function index()
  {
    $this->authentication->logout();
    $this->session->sess_destroy();

    // Set redirect protocol
    $redirect_protocol = USE_SSL ? 'https' : NULL;

    redirect( site_url( LOGIN_PAGE . '?' . AUTH_LOGOUT_PARAM . '=1', $redirect_protocol ) );
  }
}