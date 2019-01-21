<?php
  /**
   *
   */
class MY_Controller extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->check_login();
    }

    function _render_backend_view($content, $data)
    {
        $this->template->set_template('backend');
        $this->template->write_view('content', $content, $data);
        $this->template->render();
    }
    private function check_login()
{
  $controller = $this->uri->segment(2);
  $controller = strtolower($controller);
  $login = $this->session->userdata('login');   
  if(!$login && $controller!= 'login')
  {
    redirect(base_url().'admin/login/index');
  }
  if($login && $controller == 'login')
  {
    redirect(base_url().('admin/users'));
  }
}
}
