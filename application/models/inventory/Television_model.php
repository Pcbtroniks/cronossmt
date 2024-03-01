<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Television_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->library('advanced_queries');
	}

	public function add_equipment()
	{

    $this->db->trans_start(); 

		$record = $this->db->query('SELECT product_id FROM products');
		$record = $record->last_row();
		$last_record = intval(($record->product_id ?? 0));
		$product_id = $last_record + 1;

		$general_data = [
			'product_id' => $product_id,
			'category_id' => 3,
			'customer_id' => $this->input->post('customer_id'),
			'serial_number' => $this->input->post('serial_number'),
			'area' => $this->input->post('area'),
			'brand' => $this->input->post('brand'),
			'status' => $this->input->post('status'),
			'observations' => $this->input->post('observations')
		];

    $additional_data = [
      'inch' => $this->input->post('inch'),
      'smartbox' => $this->input->post('smartbox')
    ];

    $this->db->insert('products', $general_data);

    for($i = 0; $i < count($additional_data); $i++)
    {

      $meta_key = array_keys($additional_data);
      $meta_value = array_values($additional_data);

      $product_meta = [
        'product_id' => $product_id,
        'meta_key' => $meta_key[$i],
        'meta_value' => $meta_value[$i]
      ];

      $this->db->insert('products_meta', $product_meta);
    }

    $this->db->trans_complete();

		return $this->db->trans_status();
	}

		public function edit_equipment($product_id = null)
	{
		if($product_id != null)
		{
				$this->db->trans_start();

				$general_data = [
					'category_id' => 3,
					'customer_id' => $this->input->post('customer_id'),
					'serial_number' => $this->input->post('serial_number'),
					'area' => $this->input->post('area'),
					'brand' => $this->input->post('brand'),
					'status' => $this->input->post('status'),
					'observations' => $this->input->post('observations')
				];

			$additional_data = [
				'inch' => $this->input->post('inch'),
      			'smartbox' => $this->input->post('smartbox')
			];

			$this
			->db
			->where('product_id', $product_id)
			->update('products', $general_data);

			for($i = 0; $i < count($additional_data); $i++)
			{

				$meta_key = array_keys($additional_data);
				$meta_value = array_values($additional_data);

				$product_meta = [
					'meta_value' => $meta_value[$i]
				];

				$this
				->db
				->where('product_id', $product_id)
				->where('meta_key', $meta_key[$i])
				->update('products_meta', $product_meta);
			}

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
        ->where('cat.category_id', '3')
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

	private function get_additional_data($product_id)
	{
		$additional_data = array();

		$additional = [
			'inch',
			'smartbox'
		];

		for($i = 0; $i < count($additional); $i++)
		{
			$meta = $this
				->db
				->select("meta_value AS $additional[$i]")
				->from('products_meta')
				->where('meta_key', $additional[$i])
				->where('product_id', $product_id)
				->get();

			if( is_array($meta->row_array()) )
				$additional_data = array_merge($additional_data, $meta->row_array());
		}

		return $additional_data;
	}

	public function get_equipment($product_id = null)
	{
		if($product_id != null)
		{
			$general_data = $this->get_general_data($product_id);
			$additional_data = $this->get_additional_data($product_id);

			if(is_array($general_data) && is_array($additional_data))
				return array_merge($general_data, $additional_data);
		}

		return null;
	}

	public function select2($id = null, $text = null, $table = null, $searchTerm = null)
	{
		return $this->advanced_queries->select2($id, $text, $table, $searchTerm);
	}

}