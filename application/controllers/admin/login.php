<?php 
class Login extends MY_Controller
{
function __construct()
{
 parent::__construct();
 $this->load->model('admin_model');
}
function index()	
{
	if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login','Đăng nhập','callback_check_login');
		if ($this->form_validation->run()) {
			$username=$this->input->post('username');
			$this->session->set_userdata('login',$username);
		redirect(base_url().'admin/users');	
		}
		
	}
	$this->load->view('backend/admin/login');
}
function check_login()
{
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$password=md5(md5(md5($password)));
	$where = array('username'=>$username,'password'=>$password);
	if($this->admin_model->check_exists($where))
	{
		return true;
	}
	else
	{
		$this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công');
		return false;
		
	}
}
}
?>