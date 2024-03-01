<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats_model extends CI_Model
{
  public function __construct()
  {
   parent::__construct();
   $this->load->database('default');
   $this->load->library('advanced_queries');
  }

  public function count_pending()
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->where('status', 'PENDIENTE')
      ->from('tickets')
      ->count_all_results();
    }

    return $count;
  }

  public function count_in_process()
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->where('status', 'EN PROCESO')
      ->from('tickets')
      ->count_all_results();
    }

    return $count;
  }

  public function count_finished()
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->where('status', 'FINALIZADO')
      ->from('tickets')
      ->count_all_results();
    }

    return $count;
  }    

  public function count_products()
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->from('products')
      ->count_all_results();
    }

    return $count;
  }

  public function count_customers()
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->from('customers')
      ->count_all_results();
    }

    return $count;
  }

  public function count_users()
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->from('users')
      ->count_all_results();
    }

    return $count;
  }

  public function count_by_category($category_id = null)
  {
    $count = 0;

    if($this->auth_role == 'admin' || $this->auth_role == 'technician')
    {
      $count = $this
      ->db
      ->where('category_id', $category_id)
      ->from('products')
      ->count_all_results();
    }

    return $count;
  }
}
