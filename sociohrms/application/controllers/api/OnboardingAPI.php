<?php 
require_once APPPATH . "controllers/APIController.php";
class OnboardingAPI extends APIController
{
    public $request, $response;
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('data/EmployeeModel', 'EmployeeModel');
        // $this->load->model('rbac/AccessModel');
    }
    public function register() {
        redirect('app/sociomark/dashboard');
    }
}
