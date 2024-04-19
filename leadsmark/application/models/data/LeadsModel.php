<?php

class LeadsModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = (in_array('registrations', $this->db->list_tables())? 'registrations': null);
    }

    public function get($columns= null, $where = null){
        if(null !== $columns && count($columns)> 0){
            $this->db->select($columns);
        }
        if(null !== $where && count($where)> 0){
            $this->db->where($where);
        }
        if(null !== $this->table){
            return json_encode($this->db->get($this->table)->result_array());
        } else {
            return json_encode(["ERROR"]);
        }
    }
}
