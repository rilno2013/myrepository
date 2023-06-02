<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("ModelHome");
    }

    public function index(){

        if($this->session->userdata('username')){
            $this->load->view('home/vwhome');
        }else{
            $logouturl=base_url();
            redirect($logouturl);
        }
        
    }

    public function fn_getstock(){
        if($this->session->userdata('username')){
            $data['stock']=$this->ModelHome->fn_stockdadus();
            $this->load->view('home/vwstocksasan', $data);
        }else{
            $logouturl=base_url();
            redirect($logouturl);
        }
    }

    public function fn_addstocksasan(){

        $this->ModelHome->fn_adddata();

    }

    public function fn_editstocksasan(){
        $this->ModelHome->fn_editdata();
    }

    public function fn_getstockbyid(){
        $data=$this->ModelHome->get_databyid();
        $output=array();
        foreach ($data as $d) {
            $output['id']=$d->id;
            $output['id_sasan']=$d->id_sasan;
            $output['naran_sasan']=$d->naran_sasan;
            $output['kategoria']=$d->kategoria;
            $output['tipu_sasan']=$d->tipu_sasan;
            $output['marka']=$d->marka;
            $output['stok']=$d->stok;
            $output['tgl']=$d->tgl;
            $output['unidade']=$d->unidade;
        }

        echo json_encode($output);

    }

    public function fn_delete(){
        $this->ModelHome->fn_deletedatabyid();
    }
}