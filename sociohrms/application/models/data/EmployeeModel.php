<?php

class EmployeeModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['users'] = 'app_application_users';
        $this->table['employees'] = 'app_company_employee';
    }

    public function get($what = null, $where = null)
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $result = $this->db->query("SELECT * FROM `panel_users` WHERE `id` = '" . $id . "'")->result()[0];
        return $result;
    }

    public function authorize(array $request)
    {
        return true;
    }
}
