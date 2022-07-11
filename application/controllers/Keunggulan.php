<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keunggulan extends CI_Controller
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
        $data['title']  = "Data Keunggulan";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
        $data['data']   = $this->M_crud->getResult('keunggulan');

        $this->load->view('template/header', $data);
        $this->load->view('keunggulan/view');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']  = "Data Keunggulan";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

        $this->load->view('template/header', $data);
        $this->load->view('keunggulan/tambah');
        $this->load->view('template/footer');
    }

    public function do_tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() != false) {

            $config['upload_path']          = './assets/images/keunggulan/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9999;
            $config['max_width']            = 9999;
            $config['max_height']           = 9999;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('user_file')) {

                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Gagal Tambah!</strong> Masukan Gambar Keunggulan.
                                                </div>');

                $data['title']  = "Data Keunggulan";
                $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

                $this->load->view('template/header', $data);
                $this->load->view('keunggulan/tambah');
                $this->load->view('template/footer');
            } else {
                $data = array(
                    'judul'     => $this->input->post('judul'),
                    'gambar'     => $this->upload->data('file_name')

                );

                $this->db->insert('keunggulan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> keunggulan baru telah ditambahkan.
                                                </div>');
                redirect('keunggulan');
            }
        } else {
            $data['title']  = "Data Keunggulan";
            $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

            $this->load->view('template/header', $data);
            $this->load->view('keunggulan/tambah');
            $this->load->view('template/footer');
        }
    }

    public function edit($id)
    {
        $data['title']  = "Edit Keunggulan";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
        $data['data']       = $this->M_crud->getArrayWhere('keunggulan', 'id', $id);

        $this->load->view('template/header', $data);
        $this->load->view('keunggulan/edit');
        $this->load->view('template/footer');
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() != false) {

            $config['upload_path']          = './assets/images/keunggulan/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9999;
            $config['max_width']            = 9999;
            $config['max_height']           = 9999;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('user_file')) {

                $data = array(
                    'judul'     => $this->input->post('judul')

                );
                $this->db->where('id', $id);
                $this->db->update('keunggulan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> keunggulan telah diubah.
                                                </div>');
                redirect('keunggulan');
            } else {
                $data = array(
                    'judul'     => $this->input->post('judul'),
                    'gambar'     => $this->upload->data('file_name')

                );
                $this->db->where('id', $id);
                $this->db->update('keunggulan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> keunggulan telah diubah.
                                                </div>');
                redirect('keunggulan');
            }
        } else {
            $data['title']  = "Edit Keunggulan";
            $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
            $data['data']       = $this->M_crud->getArrayWhere('keunggulan', 'id', $id);

            $this->load->view('template/header', $data);
            $this->load->view('keunggulan/edit');
            $this->load->view('template/footer');
        }
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('keunggulan');
    }
}
