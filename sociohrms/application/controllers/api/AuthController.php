<?php

require_once APPPATH . "controllers/APIController.php";
class AuthController extends APIController
{
    public $request, $response;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data/EmployeeModel');
    }
    public function login()
    {
        $this->request['data'] = $this->input->post();
        $this->request['server'] = [
            'HTTP_SEC_CH_UA' => $_SERVER['HTTP_SEC_CH_UA'],
            'HTTP_SEC_CH_UA_MOBILE' => $_SERVER['HTTP_SEC_CH_UA_MOBILE'],
            'HTTP_SEC_CH_UA_PLATFORM' => $_SERVER['HTTP_SEC_CH_UA_PLATFORM'],
            'SERVER_ADDR' => $_SERVER['SERVER_ADDR'],
            'SERVER_PORT' => $_SERVER['SERVER_PORT'],
            'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
            'QUERY_STRING' => $_SERVER['QUERY_STRING'],
        ];
        $this->request['headers'] = $this->input->request_headers();
        $a = $this->EmployeeModel->authorize($this->request['data']);
        $r = $this->AccessModel->get('roles');
        if ($a['status']) {
            switch ($r) {
                case 'employee':
                    $this->response['data'] = $this->EmployeeModel->get($this->request['data']);
                    break;
                
                default:
                    # code...
                    break;
            }
            $this->response['timestamp'] = date('F j, Y');
            return $this->output
                ->set_status_header(200)
                ->set_output(json_encode($this->response));
        }
    }
}
