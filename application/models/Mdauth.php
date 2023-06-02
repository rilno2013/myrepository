<?php

  class Mdauth extends CI_Model{

    public function checkLogin(){
        $username=$this->input->post("username");
        $userpass=$this->input->post("userpass");
        $login=$this->db->query("SELECT * FROM tbl_login WHERE username='".$username."' AND userpass='".$userpass."' AND isActive=0");
        
        if($login->num_rows() > 0){
            $this->session->set_userdata('username', $username);
            $treemenuid=$login->row()->menuAccess;
            $treemenu=$this->fn_gettreemenu($treemenuid);
            $this->session->set_userdata("treemenu", $treemenu);
        }

        return $login->num_rows();
    }

    public function fn_gettreemenu($treemenuid){
        $menu = $this->db->query("SELECT * FROM tbl_treemenu WHERE id IN($treemenuid) AND menuheader=0");
        $treemenu=array();
        if($menu->num_rows() > 0){
            foreach($menu->result() as $row){
                
                $menu = $this->db->query("SELECT * FROM tbl_treemenu WHERE menuheader=$row->id and id in($treemenuid)");
                if($menu->num_rows() > 0){
                    $row->submenu = $menu->result();
                }
                array_push($treemenu, $row); 
                
            }
            return $treemenu;
        }


    }

  }