<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
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
        $data['title']  = "Account Setting";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
        $data['data']   = $this->M_crud->getArrayWhere('user', 'username', $_SESSION['username']);

        $this->load->view('template/header', $data);
        $this->load->view('account/view');
        $this->load->view('template/footer');
    }

    public function do_edit()
    {
        $this->form_validation->set_rules('pw', 'Password', 'required');
        $this->form_validation->set_rules('cpw', 'Confirmation Password', 'required|matches[pw]');

        if ($this->form_validation->run() != false) {

            $data = array(
                'password'       => md5($this->input->post('pw'))
            );

            $this->db->where('username', $_SESSION['username']);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> password telah diubah.
                                                </div>');
            redirect('account');
        } else {
            $data['title']  = "Account Setting";
            $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
            $data['data']   = $this->M_crud->getArrayWhere('user', 'username', $_SESSION['username']);

            $this->load->view('template/header', $data);
            $this->load->view('account/view');
            $this->load->view('template/footer');
        }
    }
}
