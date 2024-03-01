<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class advanced_queries extends CI_Model
{

	/**
	 * Existe en la base de datos
	 *
	 * Busca si un valor existe en una columna de una tabla users.
	 * 
	 * @param  strig $value  el valor a buscar
	 * @param  mixed $field la columna a buscar
	 * 
	 * @return bool          true: si el valor existe en la base de datos.
	 *                       false: si el valor no existe en la base de datos.
	 */
	public function exists_on_db($value = null, $field = null, $table = null)
	{
		if(!empty($value) && !empty($field) && !empty($table))
		{
			$num_records = $this
			->db
			->select($field)
			->from($table)
			->where($field, $value)
			->count_all_results();

			return ($num_records > 0) ? true : false;
		}

		return false;
	}

	/**
	 * select2
	 *
	 * Consulta a la base de datos el id, texto para crear devolver un arreglo y crear una lista despegable.
	 * 
	 * @param  [type] $id_field   id del campo.
	 * @param  [type] $field      el campo.
	 * @param  [type] $table      la tabla de la cual se obtendrán los datos.
	 * @param  [type] $searchTerm termino de busqueda.
	 * 
	 * @return array              conjunto de valores.
	 */
	public function select2($id_field = null, $field = null, $table = null, $searchTerm = null)
	{

		if(empty($searchTerm)):
			return array(array($id_field => 0, $field => 'No se encontraron resultados para esta búsqueda.'));
		else:
			$query = $this
			->db
			->select("$id_field, $field")
			->from($table)
			->like($field, $searchTerm)
			->order_by($field, 'ASC')
			->get();
			return ($query->num_rows() > 0) ? $query->result_array() : null;
		endif;

	}

}