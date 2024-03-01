<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotations_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function add(int $customer_id, int $validity_days, array $concepts)
    {
		$this->db->trans_begin(); // Iniciar la transacción

        $current_date = date("Y-m-d");
        $validity_days = intval($validity_days);
        $expiration_at = date("Y-m-d",strtotime($current_date."+ $validity_days days"));

        $this->db->insert('quotations', array(
            'user_id' => $this->auth_user_id,
            'customer_id' => $customer_id,
            'expiration_at' => $expiration_at
        ));

		$quotation_id = $this->db->insert_id();

        foreach($concepts as $concept) {
            $this->db->insert('quotation_concepts', array(
                'quotation_id' => $quotation_id,
                'description' => $concept->description,
                'quantity' => $concept->quantity,
                'utility' => $concept->utility,
                'unit_price' => $concept->unitPrice
            ));
        }

		if ($this->db->trans_status() === FALSE){      
			//Hubo errores en la consulta, entonces se cancela la transacción.   
			$this->db->trans_rollback();      
			return false;    
		}else{      
			//Todas las consultas se hicieron correctamente.  
			$this->db->trans_commit();    
			return true;    
		}
    }

    public function list()
    {
        $sql = '
        SELECT qt.quotation_id, qt.created_at, c.customer, u.full_name AS seller,
        (SELECT SUM(amount) as subtotal FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS subtotal,
        (SELECT TRUNCATE( SUM(  ((amount * 0.16) + amount)  ), 2) FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS total
        FROM quotations as qt
        INNER JOIN customers AS c ON qt.customer_id = c.customer_id
        INNER JOIN users AS u ON qt.user_id = u.user_id   
        ';

        $query = $this->db->query($sql);

        return $query->result_array();
    }

    /**
     * get
     * 
     * Retora los subtotales son ganancia pero sin iva incluido
     *
     * @param [type] $quotation_id
     * @return void
     * @author Eduardo Ramirez <hola@eduardoramirez.dev>
     */
    public function get($quotation_id)
    {
        if($quotation_id)
        {
            $sql = '
            SELECT qt.quotation_id, qt.created_at, qt.expiration_at, c.customer, c.trade_name, c.rfc, c.email, c.phone, u.full_name as seller,
            (SELECT SUM(amount) as subtotal FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS subtotal,
            (SELECT TRUNCATE( SUM(  (amount * 0.16 )  ), 2) FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS iva,
            (SELECT TRUNCATE( SUM(  ((amount * 0.16) + amount)  ), 2) FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS total
            FROM quotations as qt
            INNER JOIN customers AS c ON qt.customer_id = c.customer_id
            INNER JOIN users AS u ON qt.user_id = u.user_id
            WHERE quotation_id = ?
            ';
    
            $details = $this->db->query($sql, array($quotation_id));
            $details = $details->row_array();
    
            $sql = '
            SELECT concept_id, quotation_id, description, quantity, utility,
            TRUNCATE( (unit_price * (utility /100) + unit_price ), 2) AS unit_price,
            amount FROM quotation_concepts WHERE quotation_id = ?
            ';

            $concepts = $this->db->query($sql, array($quotation_id));
            $concepts = $concepts->result_array();

            return array(
                'details' => $details,
                'concepts' => $concepts
            );
        }
    }

    /**
     * get
     * 
     * Retora los precios unitarios y los subtotales ya con iva incluido.
     *
     * @param [type] $quotation_id
     * @return void
     * @author Eduardo Ramirez <hola@eduardoramirez.dev>
     */
    public function get2($quotation_id)
    {
        if($quotation_id)
        {
            $sql = '
            SELECT qt.quotation_id, qt.created_at, qt.expiration_at, c.customer, c.trade_name, c.rfc, c.email, c.phone, u.full_name as seller,
            (SELECT SUM(amount) as subtotal FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS subtotal,
            (SELECT TRUNCATE( SUM(  (amount * 0.16 )  ), 2) FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS iva,
            (SELECT TRUNCATE( SUM(  ((amount * 0.16) + amount)  ), 2) FROM quotation_concepts WHERE quotation_id = qt.quotation_id GROUP BY quotation_id) AS total
            FROM quotations as qt
            INNER JOIN customers AS c ON qt.customer_id = c.customer_id
            INNER JOIN users AS u ON qt.user_id = u.user_id
            WHERE quotation_id = ?
            ';
    
            $details = $this->db->query($sql, array($quotation_id));
            $details = $details->row_array();
    
            $sql = '
            SELECT concept_id, quotation_id, description, quantity, utility,
            TRUNCATE( ( (unit_price * (utility /100) + unit_price ) * 1.16), 2) AS unit_price,
            TRUNCATE( ( (amount * 0.16) + amount), 2) as amount FROM quotation_concepts WHERE quotation_id = ?
            ';

            $concepts = $this->db->query($sql, array($quotation_id));
            $concepts = $concepts->result_array();

            return array(
                'details' => $details,
                'concepts' => $concepts
            );
        }
    }
}
