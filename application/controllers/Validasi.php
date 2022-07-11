<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
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
        $data['title']  = "Data Validasi";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
        $data['data']   = $this->M_crud->getResult('validasi');

        $this->load->view('template/header', $data);
        $this->load->view('validasi/view');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']  = "Data Validasi";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

        $this->load->view('template/header', $data);
        $this->load->view('validasi/tambah');
        $this->load->view('template/footer');
    }

    public function do_tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() != false) {

            $config['upload_path']          = './assets/images/validasi/';
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
                                                    <strong>Gagal Tambah!</strong> Masukan Gambar Validasi.
                                                </div>');

                $data['title']  = "Data Validasi";
                $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

                $this->load->view('template/header', $data);
                $this->load->view('validasi/tambah');
                $this->load->view('template/footer');
            } else {
                $data = array(
                    'judul'     => $this->input->post('judul'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'gambar'     => $this->upload->data('file_name')

                );

                $this->db->insert('validasi', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> Validasi baru telah ditambahkan.
                                                </div>');
                redirect('validasi');
            }
        } else {
            $data['title']  = "Data Validasi";
            $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

            $this->load->view('template/header', $data);
            $this->load->view('validasi/tambah');
            $this->load->view('template/footer');
        }
    }

    public function edit($id)
    {
        $data['title']  = "Edit Validasi";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
        $data['data']       = $this->M_crud->getArrayWhere('validasi', 'id', $id);

        $this->load->view('template/header', $data);
        $this->load->view('validasi/edit');
        $this->load->view('template/footer');
    }

    public function do_edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


        if ($this->form_validation->run() != false) {

            $config['upload_path']          = './assets/images/validasi/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9999;
            $config['max_width']            = 9999;
            $config['max_height']           = 9999;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('user_file')) {

                $data = array(
                    'judul'     => $this->input->post('judul')

                );
                 $data = array(
                    'deskripsi' => $this->input->post('deskripsi')

                );
                $this->db->where('id', $id);
                $this->db->update('validasi', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> Validasi telah diubah.
                                                </div>');
                redirect('validasi');
            } else {
                $data = array(
                    'judul'     => $this->input->post('judul'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'gambar'     => $this->upload->data('file_name')

                );
                $this->db->where('id', $id);
                $this->db->update('validasi', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> Validasi telah diubah.
                                                </div>');
                redirect('validasi');
            }
        } else {
            $data['title']  = "Edit Validasi";
            $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
            $data['data']       = $this->M_crud->getArrayWhere('validasi', 'id', $id);

            $this->load->view('template/header', $data);
            $this->load->view('validasi/edit');
            $this->load->view('template/footer');
        }
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('validasi');
    }
    
    /**
    * Manage uploadImage
    *
    * @return Response
   */
   public function resizeImage($filename)
   {
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'width' => 500,
      );
   
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
   
      $this->image_lib->clear();
   }
}
