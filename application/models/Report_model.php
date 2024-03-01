<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model
{
  private $customer_id;
  private $customer_name;

  public function __construct()
  {
   parent::__construct();
   $this->load->database('default');
   $this->load->library('advanced_queries');
  }

  public function set_customer_data($user_id = null)
  {
   $query = $this
   ->db
   ->select('customer_id, customer')
   ->where('user_id', $user_id)
   ->from('customers')
   ->get();

   $result = $query->row_array();

   $this->customer_id = $result['customer_id'] ?? 0;
   $this->customer_name = $result['customer'] ?? 'Unknown';
  }

  public function get_customer_name()
  {
    return $this->customer_name;
  }

  public function statistics_by_category($category_id = 0)
  {
    # Stats
    $stats = array();

    # Active
    $sql = 'SELECT status FROM products WHERE customer_id = ? AND status = ? AND category_id = ?';
    $stats['active'] = $this->db->query($sql, array($this->customer_id, 'active', $category_id))->num_rows();

    # Inactive
    $sql = 'SELECT status FROM products WHERE customer_id = ? AND status = ? AND category_id = ?';
    $stats['inactive'] = $this->db->query($sql, array($this->customer_id, 'inactive', $category_id))->num_rows();

    # Repair
    $sql = 'SELECT status FROM products WHERE customer_id = ? AND status = ? AND category_id = ?';
    $stats['repair'] = $this->db->query($sql, array($this->customer_id, 'repair', $category_id))->num_rows();

    # Lost
    $sql = 'SELECT status FROM products WHERE customer_id = ? AND status = ? AND category_id = ?';
    $stats['lost'] = $this->db->query($sql, array($this->customer_id, 'lost', $category_id))->num_rows();

    # Scrap
    $sql = 'SELECT status FROM products WHERE customer_id = ? AND status = ? AND category_id = ?';
    $stats['scrap'] = $this->db->query($sql, array($this->customer_id, 'scrap', $category_id))->num_rows();

    return $stats;
  }
}
