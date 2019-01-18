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

	function get($select = '*', $where = array(), $like = array(), $offset = 0, $limit = 10, $order = array())
	{
		$this->db->select($select);
		if (count($where)>0) {
			$this->db->where($where);
		}

		if (count($like)>0) {
			$this->db->like($like);
		}

		$this->db->limit($limit, $offset);

		if (count($order)>0) {
			$key = key($order);
			$this->db->order_by($key, $order[$key]);
		}

		$query=$this->db->get('tour');
		echo $this->db->last_query();
		$data = array();
		foreach ($query->result() as $r) {
			$data[]=$r;
		}
		return $data;
	}
	function get_total($where = array(), $like = array())
	{
		$this->db->select('COUNT(*) AS total');
		if (count($where)) {
			$this->db->where($where);
		}

		if (count($like)) {
			$this->db->like($like);

		}
		$query=$this->db->get('tour');
		$totals = $query->result();
		return $totals[0]->total;
	}
	function delete($id)
	{
		$this->db->delete('tour', array('id_tour'=>$id));
	}
}

 ?>
