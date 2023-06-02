<?php

  class ModelHome extends CI_Model{

  	public function fn_stockdadus(){
  	 	$qry=$this->db->query("SELECT * FROM tbl_stocksasan");
  	 	return $qry->result_array();
  	}

    public function fn_checkid($id_sasan)
    {
      $this->db->where('id_sasan',$id_sasan);
      $ck=$this->db->get("tbl_stocksasan");
      return $ck->num_rows();
    }

    public function fn_adddata(){

      $kodigu = $this->input->post('kodigu');
      if($this->fn_checkid($kodigu)>0){
        echo "Deskulpa, Kodigu sasan ".$kodigu." eziste ona."; return false;
      }
      $naran_sasan = $this->input->post('naran_sasan');
      $kategoria = $this->input->post('kategoria');
      $tipu_sasan = $this->input->post('tipu_sasan');
      $marka = $this->input->post('marka');
      $stock = $this->input->post('stock');
      $unidade = $this->input->post('unidade');

      $data_ = $this->input->post('data_');
      $date = date("Y-m-d", strtotime($data_)); //Convert input tgl ba iha format date

      $sasan = array(
                      'id_sasan'=>$kodigu,
                      'naran_sasan'=>$naran_sasan,
                      'kategoria'=>$kategoria,
                      'tipu_sasan'=>$tipu_sasan,
                      'marka'=>$marka,
                      'stok'=>$stock,
                      'tgl'=>$date,
                      'unidade'=>$unidade
                    );
      if($this->db->insert('tbl_stocksasan', $sasan)){
        echo "Rai Dadus ho sucesso";
      }else{
        echo "Input Dadus Failla";
      }
    }

    public function fn_editdata(){
      $kodigu = $this->input->post('kodigu');
      $naran_sasan = $this->input->post('naran_sasan');
      $kategoria = $this->input->post('kategoria');
      $tipu_sasan = $this->input->post('tipu_sasan');
      $marka = $this->input->post('marka');
      $stock = $this->input->post('stock');
      $unidade = $this->input->post('unidade');

      $data_ = $this->input->post('data_');
      $date = date("Y-m-d", strtotime($data_)); //Convert input tgl ba iha format date

      $sasan = array(
                      'naran_sasan'=>$naran_sasan,
                      'kategoria'=>$kategoria,
                      'tipu_sasan'=>$tipu_sasan,
                      'marka'=>$marka,
                      'stok'=>$stock,
                      'tgl'=>$date,
                      'unidade'=>$unidade
                    );
      $this->db->where('id_sasan',$kodigu);
      $res=$this->db->update('tbl_stocksasan', $sasan);
      if($res){
        echo "Hadi'a Dadus ho sucesso";
      }else{
        echo "Hadi'a Dadus Failla";
      }
    }

    public function get_databyid(){
      $id_sasan=$this->input->post('id_sasan');
      $res=$this->db->query("SELECT * FROM tbl_stocksasan WHERE id_sasan='$id_sasan'");
      return $res->result();
    }

    public function fn_deletedatabyid(){
      $id_sasan = $this->input->post('id_sasan');
      $ex = $this->db->query("DELETE FROM tbl_stocksasan WHERE id_sasan='$id_sasan'");
      if($ex){
        echo "Dadus hamos ho sucesso.";
      }else{
        echo "Dadus la bele hamos.";
      }
    }
  }