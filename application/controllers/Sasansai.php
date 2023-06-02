<?php
 
 class Sasansai extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mdsasansai');
 	}

 	public function index()
 	{
 		echo "No Direct Access Index";
 	}

 	public function fn_sasansai()
 	{
 		$data['sasan']=$this->Mdsasansai->fn_getstock();
 		$data['sasansai']=$this->Mdsasansai->fn_getdata();
 		$this->load->view('sasan/vwsasansai',$data);
 	}

 	public function fn_addsasan()
 	{
 		$this->Mdsasansai->fn_adddata();
 	}

 	public function fn_getsasanbyid()
 	{
 		$data=$this->Mdsasansai->get_databyid();
        $output=array();
        foreach ($data as $d) {
            $output['id']=$d->id;
            $output['id_sasan']=$d->id_sasan;
            $output['kuantidade']=$d->kuantidade;
            $output['deskrisaun']=$d->deskrisaun;
            $output['data_sai']=$d->data_sai;
            $output['autor']=$d->autor;
            $output['fo_husi']=$d->fo_husi;
            $output['simu_husi']=$d->simu_husi;

            // $output=array(
            //     'id'=>$d->id,
            //     'id_sasan'=>$d->id_sasan,
            //     'kuantidade'=>$d->kuantidade,
            //     'deskrisaun'=>$d->deskrisaun,
            //     'data_sai'=>$d->data_sai,
            //     'autor'=>$d->autor,
            //     'fo_husi'=>$d->fo_husi,
            //     'simu_husi'=>$d->simu_husi
            // );
        }

        echo json_encode($output);
 	}

 	public function fn_editsasan()
 	{
 		$this->Mdsasansai->fn_editdata();
 	}

 	public function fn_delete()
 	{
 		$this->Mdsasansai->fn_deletedata();
 	}

 }