<?php
    class Product extends CI_Model{
        public function getRows($id = ''){
            
            $this->db->select('id,name,price');
            $this->db->from('products');
            if($id){
                $this->db->where('id',$id);
                $query = $this->db->get();
                $result = $query->row_array();
            }
            else{
                $this->db->order_by('name','asc');
                $query = $this->db->get();
                $result = $query->result_array();
            }
            return !empty($result)?$result:false;
        }        
        public function insertTransaction(){
            $insert = $this->db->insert('payments',$data);
            return $insert?true:false;
        }
    }

?>