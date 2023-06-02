<?php

class Auth extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Mdauth', 'auth');
    }

    public function index(){
        $this->load->view('auth/vwlogin');
    }

    public function fn_login(){
        $res = $this->auth->checkLogin();
        echo $res;
    }

    public function fn_logout(){
        session_destroy();
        $logouturl=base_url();
        redirect($logouturl);
    }
}