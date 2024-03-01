<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kits_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->library('advanced_queries');
	}

	public function add_kit()
	{

		$data = [
			'kit_name' => $this->input->post('kit_name'),
			'user_id' => $this->input->post('user_id'),
			'status' => $this->input->post('status'),
			'observations' => $this->input->post('observations')
		];

		$sql = $this->db->insert('kits', $data);

		return ($sql === true) ? true : false;
	}

	public function edit_kit($kit_id = null)
	{
		if($kit_id != null)
		{
				$this->db->trans_start();

				$general_data = [
					'kit_name' => $this->input->post('kit_name'),
					'user_id' => $this->input->post('user_id'),
					'status' => $this->input->post('status'),
					'observations' => $this->input->post('observations')
				]; 

			$this
			->db
			->where('kit_id', $kit_id)
			->update('kits', $general_data);

			$this->db->trans_complete();
			return $this->db->trans_status();
		}
	}

	public function list_kits()
	{
		$query = $this
    ->db
    ->select('k.kit_id, k.kit_name, k.user_id, k.status, u.email', false)
		->from('kits as k', false)
		->join('users as u', 'k.user_id = u.user_id', 'left')
		->order_by('k.created_at ASC', false)
		->get();
		return $query->result_array();
	}

	private function get_general_data($kit_id)
	{
		$query = $this
		->db
		->select('k.kit_id, k.kit_name, k.user_id, k.status, k.observations, u.email', false)
		->from('kits as k', false)
		->join('users as u', 'k.user_id = u.user_id', 'left')
		->where('k.kit_id', $kit_id)
		->get();
		return $query->row_array();
	}

	public function get_equipment($kit_id = null)
	{
		if($kit_id != null)
		{
			$general_data = $this->get_general_data($kit_id);

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