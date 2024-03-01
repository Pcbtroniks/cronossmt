<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->library('advanced_queries');
	}

	public function add_tool()
	{

		$data = [
			'kit_id' => $this->input->post('kit_id'),
			'tool_name' => $this->input->post('tool_name'),
			'stock' => $this->input->post('stock'),
			'brand' => $this->input->post('brand'),
			'status' => $this->input->post('status'),
			'observations' => $this->input->post('observations')
		];

		$sql = $this->db->insert('tools', $data);

		return ($sql === true) ? true : false;
	}

	public function edit_tool($tool_id = null)
	{
		if($tool_id != null)
		{
				$this->db->trans_start();

				$general_data = [
					'kit_id' => $this->input->post('kit_id'),
					'tool_name' => $this->input->post('tool_name'),
					'stock' => $this->input->post('stock'),
					'brand' => $this->input->post('brand'),
					'status' => $this->input->post('status'),
					'observations' => $this->input->post('observations')
				]; 

			$this
			->db
			->where('tool_id', $tool_id)
			->update('tools', $general_data);

			$this->db->trans_complete();
			return $this->db->trans_status();
		}
	}

	public function list_tools()
	{
		$query = $this
        ->db
        ->select('to.tool_id, k.kit_name, to.brand, to.tool_name, to.stock, to.observations, to.status', false)
				->from('tools as to', false)
        ->join('kits as k', 'to.kit_id = k.kit_id', 'left')
				->order_by('to.created_at ASC', false)
				->get();
		return $query->result_array();
	}

	private function get_general_data($tool_id)
	{
		$query = $this
		->db
		->select('to.tool_id, k.kit_id, k.kit_name, to.brand, to.tool_name, to.stock, to.observations, to.status', false)
		->from('tools as to', false)
		->join('kits as k', 'to.kit_id = k.kit_id', 'left')
		->where('to.tool_id', $tool_id)
		->get();
		return $query->row_array();
	}

	public function get_equipment($tool_id = null)
	{
		if($tool_id != null)
		{
			$general_data = $this->get_general_data($tool_id);

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