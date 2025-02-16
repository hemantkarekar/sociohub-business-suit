<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class Dashboard extends RBAController
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        
        $this->load->admin_dashboard('dashboard/index');
    }

    public function login()
    {
        $data = [
            'page' => [
                'title' => "Login Page". " • " . APP_NAME
            ]
        ];
        $this->load->view('pages/login', $data);
    }
    public function register()
    {
        
    }
}
                      