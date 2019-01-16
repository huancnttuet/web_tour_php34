<?php
  /**
   *
   */
class Users extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        // $data = $this->users_model->get('*', array(), array(), 0, 10, array('id'=>'DESC'));
        // parent::_render_backend_view('backend/users/index', array('data'=>$data));
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $name_tour = $this->input->post('name_tour');
            $price = $this->input->post('price');
            $address = $this->input->post('address');
            $schedule = $this->input->post('schedule');
            $data =array(
                'tentour'=>$name_tour,
                'gia'=>$price,
                'hanhtrinh'=>$schedule,
                'diadiem'=>$address
            );
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '10000';
                $config['max_width']  = '10240';
                $config['max_height']  = '7680';
                $config['file_name'] = $_FILES['picture']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!is_dir('uploads')) {
                    mkdir('./uploads', 0777, true);
                }
                if ($this->upload->do_upload('picture')) {
                  $uploadData = $this->upload->data();
                  $data['image'] = $uploadData['full_path'];
                 
                } else{
                    echo $this->upload->display_errors();exit();
                  $data['image'] = '';
                }
            } 
            else {
                $data['image'] = '';
            }
            
            $id=$this->user_model->insert($data);
            
            if ($id>0) {
                $this->session->set_flashdata('code', '1');
                $this->session->set_flashdata('message', 'Adding Successfully !!!!');
            } else {
                $this->session->set_flashdata('code', '0');
                $this->session->set_flashdata('message', 'Adding Failed');
            }
            redirect(base_url().'admin/users/add');
        }
        parent::_render_backend_view('backend/admin/add', null);
    }

    
}
