<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['username'])) {
            redirect('home');
        }
    }
    
    public function index()
    {
        $data['title']  = "Data Message";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting','id',1);
        $data['data']   = $this->M_crud->getResult('messages');

        $this->load->view('template/header', $data);
        $this->load->view('message/view');
        $this->load->view('template/footer');
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('messages');
    }
}
