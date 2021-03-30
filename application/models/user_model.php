<?php
 class user_model extends CI_Model{
    function return_users(){
        $this->load->database();

        $query = $this->db->query("Select * from user");
        $query->result_array();
        // echo'<pre>';
        // print_r($query->result_array());
        // echo'</pre>';
        return $query->result_array();
    }
 }
?> 