<?php 

class SettingsModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = (in_array('registrations', $this->db->list_tables())? 'registrations': null);
    }

    public function sanitize_absence($entity_array, $compareTo_array) : bool {
        foreach ($entity_array as $key => $element) {
            $flag = false;
            if(in_array($element, $compareTo_array)){
                $flag = true;
            }
        }
        return $flag;
    }
}
