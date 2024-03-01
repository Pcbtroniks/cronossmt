<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->library('advanced_queries');
	}

	public function add_equipment()
	{

		$record = $this->db->query('SELECT product_id FROM products');
		$record = $record->last_row();
		$last_record = intval(($record->product_id ?? 0));
		$new_id = $last_record + 1;

		$data = [
			'product_id' => $new_id,
			'category_id' => 6,
			'customer_id' => $this->input->post('customer_id'),
			'serial_number' => $this->input->post('serial_number'),
			'area' => $this->input->post('area'),
			'brand' => $this->input->post('brand'),
			'status' => $this->input->post('status'),
			'observations' => $this->input->post('observations')
		]; 

		$sql = $this->db->insert('products', $data);

		return ($sql === true) ? true : false;
	}

	public function edit_equipment($product_id = null)
	{
		if($product_id != null)
		{
				$this->db->trans_start();

				$general_data = [
					'category_id' => 6,
					'customer_id' => $this->input->post('customer_id'),
					'serial_number' => $this->input->post('serial_number'),
					'area' => $this->input->post('area'),
					'brand' => $this->input->post('brand'),
					'status' => $this->input->post('status'),
					'observations' => $this->input->post('observations')
				]; 

			$this
			->db
			->where('product_id', $product_id)
			->update('products', $general_data);

			$this->db->trans_complete();
			return $this->db->trans_status();
		}
	}

	public function list_equipment()
	{
		$query = $this
        ->db
        ->select('cu.customer, pd.product_id, pd.area, pd.brand, pd.serial_number, pd.status', false)
				->from('products as pd', false)
				->join('categories as cat', 'cat.category_id = pd.category_id', 'left')
				->join('customers as cu', 'pd.customer_id = cu.customer_id', 'left')
        ->where('cat.category_id', '6')
				->order_by('pd.created_at ASC', false)
				->get();
		return $query->result_array();
	}

	private function get_general_data($product_id)
	{
		$query = $this
				->db
				->select('cu.customer, cu.customer_id, pd.product_id, pd.area, pd.brand, pd.serial_number, pd.status, pd.observations', false)
				->from('products as pd', false)
				->join('customers as cu', 'cu.customer_id = pd.customer_id', 'left')
				->where('pd.product_id', $product_id)
				->get();
		return $query->row_array();
	}

	public function get_equipment($product_id = null)
	{
		if($product_id != null)
		{
			$general_data = $this->get_general_data($product_id);

			if(is_array($general_data))
				return ($general_data);
		}

		return null;
	}

	public function select2($id = null, $text = null, $table = null, $searchTerm = null)
	{
		return $this->advanced_queries->select2($id, $text, $table, $searchTerm);
	}	
}