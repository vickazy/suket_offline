<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pejabat_model extends CI_Model {

	var $table = "pejabat";
	var $id = "pejabat_id";

	public function get($params = array())
	{
		if (isset($params['id'])) 
		{
			$this->db->where($this->id, $params['id']);
		}

		if (isset($params['limit'])) 
		{
			if (!isset($params['offsite'])) 
			{
				$params['offset'] = NULL;
			}

			$this->db->limit($params['limit'], $params['offset']);
		}

		if (isset($params['order_by'])) {
			$this->db->order_by($params['order_by'], 'desc');	
		} else {
			$this->db->order_by($this->id, 'desc');
		}

		if (isset($params['select'])) 
		{
			$this->db->select($params['select']);
		}

		$res = $this->db->get($this->table);

		if (isset($params['id'])) {
			return $res->row_array();
		}
		else
		{
			return $res->result_array();
		}

	}

	public function add($record)
	{
		$this->db->insert($this->table, $record);
	}

	public function edit($id, $record)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $record);
	}

	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->where($this->table);
	}

}

/* End of file  */
/* Location: ./application/models/ */