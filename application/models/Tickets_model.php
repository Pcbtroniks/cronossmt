<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->library('advanced_queries');
	}

	public function add()
	{
    $user_id = '';

    if(!empty($this->input->post('user_id')) && $this->auth_level == 9)
    {
      $user_id = $this->input->post('user_id');
    }else{
      $user_id = $this->auth_user_id ?? 3102773945; // Autentificado o usuario de servicio
    }

		$data = [
			'technician_id' => $user_id,
			'customer_id' => $this->input->post('customer_id'),
      		'category_id' => $this->input->post('category_id'),
      		'subcategory_id' => $this->input->post('subcategory_id'),
			'request_of' => $this->input->post('request_of'),
			'end_user' => $this->input->post('end_user'),
			'msj_customer' => $this->input->post('msj_customer')
		];

		$sql = $this->db->insert('tickets', $data);

		return ($sql === true) ? true : false;
	}

	public function edit($ticket_id = null)
	{
		if($ticket_id != null)
		{
				$this->db->trans_start();

        $data = [
    			'technician_id' => $this->auth_user_id,
          'category_id' => $this->input->post('category_id'),
          'subcategory_id' => $this->input->post('subcategory_id'),
    			'request_of' => $this->input->post('request_of'),
    			'end_user' => $this->input->post('end_user'),
          'status' => $this->input->post('status')
    		];

			 $this
			 ->db
			 ->where('ticket_id', $ticket_id)
       ->set('updated_at', 'NOW()', false)
			 ->update('tickets', $data);

        $activity = [
        'ticket_id' => $ticket_id,
        'user_id' => $this->auth_user_id,
        'message' => $this->input->post('msj_technician')
        ];

        $this
        ->db
        ->insert('activity_tickets', $activity);

			 $this->db->trans_complete();
			 return $this->db->trans_status();
		}
	}

	public function list()
	{
		if(is_role('admin'))
		{
			$query = $this
			->db
			->select('tt.ticket_id, cu.customer, tt.request_of, tt.created_at, tt.updated_at, u.email, tt.status', false)
			->from('tickets as tt', false)
			->join('customers as cu', 'cu.customer_id = tt.customer_id', 'left')
			->join('users as u', 'u.user_id = tt.technician_id', 'left')
			->order_by('tt.created_at ASC', false)
			->get();
			return $query->result_array();
		}
		else if(is_role('technician'))
		{
			$query = $this
			->db
			->select('tt.ticket_id, cu.customer, tt.request_of, tt.created_at, tt.updated_at, u.email, tt.status', false)
			->from('tickets as tt', false)
			->join('customers as cu', 'cu.customer_id = tt.customer_id', 'left')
			->join('users as u', 'u.user_id = tt.technician_id', 'left')
			->where('technician_id', $this->auth_user_id)
			->order_by('tt.created_at ASC', false)
			->get();
			return $query->result_array();
		}
	}

  	public function get_ticket($ticket_id = null)
	{
		$query = $this
    ->db
    ->select('tt.ticket_id, cu.customer, tt.category_id, tt.subcategory_id, tt.request_of, tt.end_user, tt.msj_customer, tt.created_at, tt.updated_at, tt.status', false)
    ->from('tickets as tt', false)
    ->join('customers as cu', 'cu.customer_id = tt.customer_id', 'left')
    ->where('ticket_id', $ticket_id)
    ->get();
		return $query->row_array();
	}

  public function get_activity($ticket_id = null)
  {
    $query = $this
    ->db
    ->select('m.msj_id, m.ticket_id, m.message, m.created_at, m.updated_at,
      u.full_name', false)
    ->from('activity_tickets as m', false)
    ->join('users as u', 'm.user_id = u.user_id', 'left')
    ->where('ticket_id', $ticket_id)
    ->get('');

    return $query->result_array();
  }

  public function get_categories()
  {
    $query = $this->db->get('categories_tk');
    return $query->result_array();
  }

  public function get_subcategories()
  {
    $query = $this->db->get('subcategories_tk');
    return $query->result_array();
  }

	public function select2($id = null, $text = null, $table = null, $searchTerm = null)
	{
		return $this->advanced_queries->select2($id, $text, $table, $searchTerm);
	}

	public function download_report()
	{
		$customer_id = $this->input->post('customer_id');
		$updated_at = $this->input->post('updated_at');

		$customer_details = $this
				->db
				->select('customer')
				->from('customers')
				->where('customer_id', $customer_id)
				->get();

		$tickets = $this
				->db
				->select('ticket_id, end_user, msj_customer, updated_at, status', false)
				->from('tickets', false)
				->order_by("FIELD(status, 'PENDIENTE', 'EN PROCESO', 'FINALIZADO', 'CANCELADO') ASC, updated_at", false)
				->where('customer_id', $customer_id)
				->like('updated_at', $updated_at, 'after')
				->get();
		

		$pending = $this
				->db
				->from('tickets')
				->where('customer_id', $customer_id)
				->where('status', 'PENDIENTE')
				->like('updated_at', $updated_at, 'after')
				->count_all_results();

		$in_process = $this
				->db
				->from('tickets')
				->where('customer_id', $customer_id)
				->where('status', 'EN PROCESO')
				->like('updated_at', $updated_at, 'after')
				->count_all_results();

		$finished = $this
				->db
				->from('tickets')
				->where('customer_id', $customer_id)
				->where('status', 'FINALIZADO')
				->like('updated_at', $updated_at, 'after')
				->count_all_results();

		return array(
			'customer_details' => $customer_details->row_array(),
			'tickets' => $tickets->result_array(),
			'pending' => $pending ?? 0,
			'in_process' => $in_process ?? 0,
			'finished' => $finished ?? 0
		);
	}

}
