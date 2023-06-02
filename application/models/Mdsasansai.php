<?php
    date_default_timezone_set("Asia/Dili");
	class Mdsasansai extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ModelHome');
		}

		public function fn_getdata()
		{
			$qry=$this->db->query("SELECT st.id, st.id_sasan, s.naran_sasan, s.kategoria, s.tipu_sasan, s.marka, s.stok, st.kuantidade, st.data_sai, st.deskrisaun, st.autor, st.fo_husi, st.simu_husi FROM tbl_stocksasan s JOIN tbl_sasansai st ON s.id_sasan=st.id_sasan WHERE st.isdeleted=0");
			return $qry->result_array();

		}

		public function get_databyid()
		{
			$id=$this->input->post('idx');
      		$res=$this->db->query("SELECT * FROM tbl_sasansai WHERE id='$id' AND isdeleted=0");
      		return $res->result();
		}

		public function fn_stockvalidation($kodigu,$qty)
		{
			$new=$this->db->query("SELECT stok, CASE WHEN stok < $qty then 1 else 0 END as validation from tbl_stocksasan where id_sasan='$kodigu'");
			$status = $new->row()->validation;
			$stok = $new->row()->stok;
			return $status."|".$stok;
		}

		public function fn_adddata(){

	      $kodigu = $this->input->post('kodigu');
	      $qty = $this->input->post('qty');
	      $data_ = $this->input->post('data_sai');
	      $date = date("Y-m-d", strtotime($data_)); //Convert input tgl ba iha format date
	      $deskrisaun = $this->input->post('deskrisaun');
	      $autor = $this->input->post('autor');
	      $fo_husi = $this->input->post('fo_husi');
	      $simu_husi = $this->input->post('simu_husi');
	      //$date=date('Y-m-d H:i:s');
	      
	      $sasan = array(
	                      'id_sasan'=>$kodigu,
	                      'kuantidade'=>$qty,
	                      'data_sai'=>$date,
	                      'deskrisaun'=>$deskrisaun,
	                      'autor'=>$autor,
	                      'fo_husi'=>$fo_husi,
	                      'simu_husi'=>$simu_husi,
	                      'iby'=>$autor,
	                      'idt'=>$date
	                    );

	      $res=$this->fn_stockvalidation($kodigu,$qty);
	      $sp=explode("|", $res);
	      $status=$sp[0];
	      $stok=$sp[1];

	      if($status==1){
	      	echo "Deskulpa, stok la sufisiente ba kuantidade sasan nebe presija. Stok nebe disponivel maka ".$stok.", Obrigado";
	      	return false;
	      }

	      if($this->db->insert('tbl_sasansai', $sasan)){
	      	$new=$this->db->query("SELECT (stok-$qty) newstok from tbl_stocksasan where id_sasan='$kodigu'");
			$qtynew=$new->row()->newstok;
	      	$this->db->query("UPDATE tbl_stocksasan SET stok='$qtynew' WHERE id_sasan='$kodigu'");
	        echo "Rai Dadus ho sucesso";
	      }else{
	        echo "Input Dadus Failla";
	      }
	    }

	    public function fn_editdata()
	    {
	      $id=$this->input->post('idedit');
	      $kodigu = $this->input->post('kodigu');
	      $qty = $this->input->post('qty');
	      $data_ = $this->input->post('data_sai');
	      $date = date("Y-m-d", strtotime($data_)); //Convert input tgl ba iha format date
	      $deskrisaun = $this->input->post('deskrisaun');
	      $autor = $this->input->post('autor');
	      $fo_husi = $this->input->post('fo_husi');
	      $simu_husi = $this->input->post('simu_husi');
          //$date=date('Y-m-d H:i:s');
	      $sasan = array(
	                      'id_sasan'=>$kodigu,
	                      'kuantidade'=>$qty,
	                      'data_sai'=>$date,
	                      'deskrisaun'=>$deskrisaun,
	                      'autor'=>$autor,
	                      'fo_husi'=>$fo_husi,
	                      'simu_husi'=>$simu_husi,
	                      'uby'=>$autor,
	                      'udt'=>$date
	                    );

	      $qtycheck=$this->db->query("SELECT kuantidade from tbl_sasansai where id='$id'");
	      $qtyold=$qtycheck->row()->kuantidade;
	      if($qtyold < $qty){ //kuandu qty update foun bot liu qty tuan
	      	$updateqty=$qty-$qtyold;
			$res=$this->fn_stockvalidation($kodigu,$updateqty);
			$sp=explode("|", $res);
			$status=$sp[0];
			$stok=$sp[1];

			if($status==1){
				echo "Deskulpa, stok la sufisiente ba kuantidade sasan nebe presija. Stok nebe disponivel maka ".$stok.", Obrigado";
				return false;
			}
	      }

          $qtysisa=0;
	      if($qtyold > $qty){ //kuandu qty update foun kiik liu qty tuan
	      	$qtysisa=$qtyold-$qty;
	      }

	      

	      $this->db->where('id',$id);
	      if($this->db->update('tbl_sasansai', $sasan)){
	      	if($qtysisa > 0){
	      		$this->db->query("UPDATE tbl_stocksasan SET stok='$qtysisa' WHERE id_sasan='$kodigu'");
	      	}

	        echo "Update Dadus ho sucesso";
	      }else{
	        echo "Update Dadus Failla";
	      }
	    }

		public function fn_getstock()
		{
			return $this->ModelHome->fn_stockdadus();
		}

		public function fn_deletedata()
		{
			$id = $this->input->post('id');
			$qty = $this->input->post('qty');
			$id_sasan= $this->input->post('id_sasan');
			$autor=$this->session->userdata('username');
			$ex = $this->db->query("UPDATE tbl_sasansai SET isdeleted=1, dby='$autor', ddt=now() WHERE id='$id'");
			if($ex){
				$new=$this->db->query("SELECT (stok+$qty) newstok from tbl_stocksasan where id_sasan='$id_sasan'");
				$qtynew=$new->row()->newstok;
				$this->db->query("UPDATE tbl_stocksasan SET stok='$qtynew' WHERE id_sasan='$id_sasan'");
				echo "Dadus hamos ho sucesso.";
			}else{
				echo "Dadus la bele hamos.";
			}
		}

	}