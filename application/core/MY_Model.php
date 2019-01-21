<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_Model extends CI_Model {
	var $table = '';
	var $key = 'id';
	var $order = '';
	var $select = '';
	
    function check_exists($where = array())
    {
	    $this->db->where($where);
	    //thuc hien cau truy van lay du lieu
		$query = $this->db->get($this->table);
		
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	
}
?>