<?php
   
   class Mdrelatoriu extends CI_Model{

      public function fn_getrelatorio(){
         
         $y=$this->input->post('tinan');
         $m=$this->input->post('fulan');
         if($y==0 && $m==0){
           $this->session->set_userdata('period', date('Y'));
           $where1=" and date_format(data_tama, '%Y')=date_format(now(), '%Y')";
           $where2=" and date_format(data_sai, '%Y')=date_format(now(), '%Y')"; 
         }

         if($y!=0){
            $where1="and date_format(data_tama, '%Y')='$y'";
            $where2="and date_format(data_sai, '%Y')='$y'";
            $this->session->set_userdata('period', $y);
            if($m!=0){
               $ym=$y."-".$m;
               $where1="and date_format(data_tama, '%Y-%m')='$ym'";
               $where2="and date_format(data_sai, '%Y-%m')='$ym'";
               $this->session->set_userdata('period', $ym);
            }
         }


         $qry="select id, id_sasan as kodigu, naran_sasan as naran, kategoria, marka, tipu_sasan as tipu, unidade,
                     (select 
                        CASE
                            WHEN count(id)>0 THEN sum(kuantidade) 
                            ELSE 0
                        END 
                      from tbl_sasantama where id_sasan=kodigu $where1) as sasan_tama,
                     (select
                        CASE
                           WHEN count(id)>0 THEN sum(kuantidade) 
                           ELSE 0
                        END 
                      from tbl_sasansai where id_sasan=kodigu $where2) as sasan_sai
               from tbl_stocksasan 
               group by id_sasan";

         return $this->db->query($qry)->result_array();
      }

      public function fn_printdata($period) 
      {
         $where1="and date_format(data_tama, '%Y')='$period'";
         $where2="and date_format(data_sai, '%Y')='$period'"; 
         $cnt=explode("-",$period);
         if(count($cnt)==2){
           $where1="and date_format(data_tama, '%Y-%m')='$period'";
           $where2="and date_format(data_sai, '%Y-%m')='$period'"; 
         }
         $qry="select id, id_sasan as kodigu, naran_sasan as naran, kategoria, marka, tipu_sasan as tipu, unidade,
                     (select 
                        CASE
                            WHEN count(id)>0 THEN sum(kuantidade) 
                            ELSE 0
                        END 
                     from tbl_sasantama where id_sasan=kodigu $where1) as sasan_tama,
                     (select
                        CASE
                           WHEN count(id)>0 THEN sum(kuantidade) 
                           ELSE 0
                        END 
                      from tbl_sasansai where id_sasan=kodigu $where2) as sasan_sai
               from tbl_stocksasan 
               group by id_sasan";

         return $this->db->query($qry)->result_array();
      }
   }