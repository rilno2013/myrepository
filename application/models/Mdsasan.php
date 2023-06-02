<?php

	class Mdsasan extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ModelHome');
		}

		public function fn_getdata()
		{
			$qry=$this->db->query("SELECT st.id, st.id_sasan, s.naran_sasan, s.kategoria, s.tipu_sasan, s.marka, s.stok, st.kuantidade, st.data_tama, st.deskrisaun, st.autor, st.fo_husi, st.simu_husi FROM tbl_stocksasan s JOIN tbl_sasantama st ON s.id_sasan=st.id_sasan");
			return $qry->result_array();

		}

		public function get_databyid()
		{
			$id=$this->input->post('id');
      		$res=$this->db->query("SELECT * FROM tbl_sasantama WHERE id='$id'");
      		return $res->result();
		}

		public function fn_adddata(){

	      $kodigu = $this->input->post('kodigu');
	      $qty = $this->input->post('qty');
	      $data_ = $this->input->post('data_tama');
	      $date = date("Y-m-d", strtotime($data_)); //Convert input tgl ba iha format date
	      $deskrisaun = $this->input->post('deskrisaun');
	      $autor = $this->input->post('autor');
	      $fo_husi = $this->input->post('fo_husi');
	      $simu_husi = $this->input->post('simu_husi');

	      

	      $sasan = array(
	                      'id_sasan'=>$kodigu,
	                      'kuantidade'=>$qty,
	                      'data_tama'=>$date,
	                      'deskrisaun'=>$deskrisaun,
	                      'autor'=>$autor,
	                      'fo_husi'=>$fo_husi,
	                      'simu_husi'=>$simu_husi
	                    );

	      if($this->db->insert('tbl_sasantama', $sasan)){
	      	$new=$this->db->query("SELECT (stok+$qty) newstok from tbl_stocksasan where id_sasan='$kodigu'");
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
	      $data_ = $this->input->post('data_tama');
	      $date = date("Y-m-d", strtotime($data_)); //Convert input tgl ba iha format date
	      $deskrisaun = $this->input->post('deskrisaun');
	      $autor = $this->input->post('autor');
	      $fo_husi = $this->input->post('fo_husi');
	      $simu_husi = $this->input->post('simu_husi');

	      $sasan = array(
	                      'id_sasan'=>$kodigu,
	                      'kuantidade'=>$qty,
	                      'data_tama'=>$date,
	                      'deskrisaun'=>$deskrisaun,
	                      'autor'=>$autor,
	                      'fo_husi'=>$fo_husi,
	                      'simu_husi'=>$simu_husi
	                    );

	      $this->db->where('id',$id);
	      if($this->db->update('tbl_sasantama', $sasan)){
	      	$new=$this->db->query("SELECT (stok+$qty) newstok from tbl_stocksasan where id_sasan='$kodigu'");
			$qtynew=$new->row()->newstok;
	      	$this->db->query("UPDATE tbl_stocksasan SET stok='$qtynew' WHERE id_sasan='$kodigu'");
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
			$ex = $this->db->query("DELETE FROM tbl_sasantama WHERE id='$id'");
			if($ex){
				$new=$this->db->query("SELECT (stok-$qty) newstok from tbl_stocksasan where id_sasan='$id_sasan'");
				$qtynew=$new->row()->newstok;
				$this->db->query("UPDATE tbl_stocksasan SET stok='$qtynew' WHERE id_sasan='$id_sasan'");
				echo "Dadus hamos ho sucesso.";
			}else{
				echo "Dadus la bele hamos.";
			}
		}

	}