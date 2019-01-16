<?php 

class User_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function insert($data){
    	$data['date_created']=date('Y-m-d H:i:s');
        $data['date_updated']=date('Y-m-d H:i:s');
        $this->db->insert('tour', $data);
        $last_id = $this->db->insert_id();
    	return $last_id;
    }
}

 ?>