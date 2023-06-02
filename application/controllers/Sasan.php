<?php
 
 class Sasan extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mdsasan');
 	}

 	public function index()
 	{
 		echo "No Direct Access Index";
 	}

 	public function fn_sasantama()
 	{
 		$data['sasan']=$this->Mdsasan->fn_getstock();
 		$data['sasantama']=$this->Mdsasan->fn_getdata();
 		$this->load->view('sasan/vwsasantama',$data);
 	}

 	public function fn_addsasan()
 	{
 		$this->Mdsasan->fn_adddata();
 	}

 	public function fn_getsasanbyid()
 	{
 		$data=$this->Mdsasan->get_databyid();
        $output=array();
        foreach ($data as $d) {
            $output['id']=$d->id;
            $output['id_sasan']=$d->id_sasan;
            $output['kuantidade']=$d->kuantidade;
            $output['deskrisaun']=$d->deskrisaun;
            $output['data_tama']=$d->data_tama;
            $output['autor']=$d->autor;
            $output['fo_husi']=$d->fo_husi;
            $output['simu_husi']=$d->simu_husi;
        }

        echo json_encode($output);
 	}

 	public function fn_editsasan()
 	{
 		$this->Mdsasan->fn_editdata();
 	}

 	public function fn_delete()
 	{
 		$this->Mdsasan->fn_deletedata();
 	}

 }