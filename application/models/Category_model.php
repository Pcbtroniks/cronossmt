<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->library('advanced_queries');
	}

	public function list_categories()
	{
		$sql = "SELECT category, create_at, updated_at FROM categories";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_category($category_id = null)
	{
		$sql = "SELECT category, attributes, created_at, updated_at FROM categories WHERE category_id = ?";
		$query = $this->db->query($sql, array($category_id));
		return $query->row_array();
	}

	public function create_category()
	{
		$data = [
			'category_id' => 0,
			'category' => $this->input->post('category'),
			'attributes' => $this->input->post('attributes')
		];

		$sql = $this->db->insert('categories', $data);

		return ($sql === true) ? true : false;
	}

	public function update_category($category_id = null)
	{
		if($category_id)
		{
			$data = [
				'category' => $this->input->post('upd_category'),
				'attributes' => $this->input->post('upd_attributes')
			];

			$this->db->where('category_id', $category_id);
			$sql = $this->db->update('categories', $data);

			return ($sql === true) ? true : false;
		}
	}

	/*========================================
	=            HELPER FUNCTIONS            =
	========================================*/

	public function exists_on_db($value = null, $field = null, $table = null)
	{
		return $this->advanced_queries->exists_on_db($value, $field, $table);
	}
}