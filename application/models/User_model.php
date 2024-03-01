<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model

{

	public function __construct()

	{

		parent::__construct();

		$this->load->database('default');

		$this->load->library('advanced_queries');

	}



	public function list_users()

	{

		$sql = "SELECT * FROM users";

		$query = $this->db->query($sql);

		return $query->result_array();

	}



  public function list_technicians()

  {

    $sql = "

    SELECT * FROM users

    WHERE banned = '0' AND (auth_level = 9 OR auth_level = 3);

    ";



    $query = $this->db->query($sql);



    return $query->result_array();

  }



	public function get_user($id = null)

	{

		$sql = "SELECT email, auth_level, banned FROM users WHERE user_id = ?";

		$query = $this->db->query($sql, array($id));

		return $query->row_array();

	}



	public function get_user_acl($id = null)

	{



		$action_codes = array();



		$query = $this

		->db

		->select('action_id')

		->from('acl')

		->where('user_id', $id)

		->get();

		

		foreach ($query->result_array() as $row) {

			array_push($action_codes, ('acl-' . $row['action_id']));

		}



		return $action_codes;

	}



	public function edit_user($user_id = null)

	{

		if($user_id)

		{

			$data = [

				'email' => $this->input->post('upd_email'),

				'banned' => $this->input->post('upd_banned'),

				'auth_level' => $this->input->post('upd_auth_level')

			];



			$this->db->where('user_id', $user_id);

			$sql = $this->db->update('users', $data);



			return ($sql === true) ? true : false;

		}

	}

	public function update_password($id = null)

	{

		if($id)

		{

			$this->db->where('user_id', $id);

			$sql = $this->db->update('users', array('passwd' => $this->input->post('upd_password')));



			return ($sql === true) ? true : false;

		}

	}



	public function email_check($email = null, $user_id = null)

	{

		if($user_id && $email)

		{

			# Contar el numero de registros que coincidan con el email proporcionado.

			$this->db

					 ->from('users')

					 ->where('email', $email);

			

			$num_emails = $this->db->count_all_results();



			if($num_emails == 0) // Si existe más de un registro con el mismo email devolver un error.

			{

				return TRUE;

			}

			else // Si existe solo 1 registro con el mismo email y no es el que se esta actualizando devolver error.

			{

				$data = ['user_id' => $user_id, 'email' => $email];

				$this

				->db

				->from('users')

				->where($data);



				$users = $this->db->count_all_results();

				return $bool = ($users == 1) ? TRUE : FALSE;

			}

		}



		return FALSE; // No se recibieron los parametros de la función.

	}



	/*========================================

	=            HELPER FUNCTIONS            =

	========================================*/



	public function exists_on_db($value = null, $field = null, $table = null)

	{

		return $this->advanced_queries->exists_on_db($value, $field, $table);

	}

}