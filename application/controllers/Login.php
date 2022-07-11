<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['title']  = 'Login';
        $this->load->view('login/view',$data);
    }
    
    public function do_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->where('username', $username);
        $data  = $this->db->get('user')->row_array();

        if ($data['username'] == $username && $data['password'] == $password) {
            $data = array(
                'username' => $data['username'],
                'role'  => $data['role']
            );

            $this->session->set_userdata($data);
            if ($data['role'] == 'Admin') {
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Gagal!</strong> username dan password tidak cocok.
                                            </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
