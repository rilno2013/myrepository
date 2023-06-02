<?php
 class Relatoriu extends CI_Controller{
    public function __construct(){
    	parent::__construct();
      $this->load->model('Mdrelatoriu', 'relatorio'); //relatorio ne naran alias husi Mdrelatoriu
    }

    public function index(){
      $data['sasan']=$this->relatorio->fn_getrelatorio();
      $this->load->view('relatoriu/vwrelatoriu',$data);
    }

    public function fn_getfilter(){
      $data=$this->relatorio->fn_getrelatorio();
      $no=1;
      $tr="";
      foreach($data as $s){
          $t_tama=$s['sasan_tama'];
          $t_sai=$s['sasan_sai'];
          $saldo=$t_tama-$t_sai;
          $tr.="<tr class=\"gradeX\">
                  <td>".$no."</td>
                  <td>".$s['kodigu']."</td>
                  <td>".$s['naran']."</td>
                  <td>".$s['kategoria']."</td>
                  <td>".$s['tipu']."</td>
                  <td>".$s['marka']."</td>
                  <td>".$s['unidade']."</td>
                  <td>".$t_tama."</td>
                  <td>".$t_sai."</td>
                  <td>".$saldo."</td>
                  <td>".$this->session->userdata('period')."</td>
              </tr>";

              $no++;
      }

      echo $tr;
    }

    public function fn_printpdf(){
      $period=$this->session->userdata('period');
      $data['sasan']=$this->relatorio->fn_printdata($period);
      //print_r($data); return false;
      $mpdf = new \Mpdf\Mpdf();
      $html = $this->load->view('welcome_message',$data,true);
      $mpdf->WriteHTML($html);
      $mpdf->SetDisplayMode('fullpage');
      $mpdf->list_indent_first_level = 0; 
      $mpdf->SetWatermarkText('CU-DADIRAH');
      $mpdf->showWatermarkText = true;
      $mpdf->watermarkTextAlpha = 0.1;
      $mpdf->Output();
    }
 }