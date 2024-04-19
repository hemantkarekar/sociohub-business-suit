<?php
class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get($id){
        $result = $this->db->query("SELECT * FROM `trl_users` WHERE `id` = '" . $id . "'")->result()[0];
        return $result;

    }

    public function authorize(array $request){
        $result = $this->db->query("SELECT * FROM `trl_users` WHERE `username` = '" . $request['username'] . "'")->result()[0];
        if($result->username == 'admin'){
            if($request['password']==$result->password){
                return (array)$result;
            }
        }else{
            if(password_verify($request['password'],$result->password)){
                return (array)$result;
            }
        }
    }

    public function new($data){
        $this->db->insert('trl_users', $data);
    }
}
