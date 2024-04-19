<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MenuTypeModel extends CI_Model
{
	public $table;
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->table = ['trl_menu-types'];
		$this->data = [];
	}

	public function show(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return json_encode($this->db->get($this->table[0])->result_array());
	}

	// INSERT FROM DB
	public function create()
	{
		$this->db->insert($this->table[0], $this->data);
	}
	// UPDATE FROM DB
	public function edit(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->update($this->table[0], $this->data);
	}
	// UPDATE FLAG FROM DB
	public function remove(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->where($where);
		$this->db->delete($this->table[0]);
	}
	// DELETE FROM DB
	public function delete(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->where($where);
		$this->db->delete($this->table[0]);
	}
}
