<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Global_setting extends CI_Controller
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
        $data['title']  = "Global Setting";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
        $data['data']   = $this->M_crud->getArrayWhere('global_setting', 'id', 1);

        $this->load->view('template/header', $data);
        $this->load->view('global_setting/view');
        $this->load->view('template/footer');
    }

    public function do_edit()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
       /** $this->form_validation->set_rules('fixed_content', 'Fixed Content', 'required');
        $this->form_validation->set_rules('multiple_content', 'Multiple Content', 'required'); */

        if ($this->form_validation->run() != false) {

            $config['upload_path']          = './assets/images/logo/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9999;
            $config['max_width']            = 1920;
            $config['max_height']           = 1280;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('user_file')) {

                $data = array(
                    'nama_perusahaan'       => $this->input->post('nama_perusahaan'),
                    'deskripsi'             => $this->input->post('deskripsi'),
                  /**  'fixed_content'         => $this->input->post('fixed_content'),
                    'multiple_content'      => $this->input->post('multiple_content'),
                    'sosmed_1'              => $this->input->post('somsed_1'),
                    'sosmed_2'              => $this->input->post('somsed_2'),
                    'sosmed_3'              => $this->input->post('somsed_3'),
                    'sosmed_4'              => $this->input->post('somsed_4'),
                    'sosmed_5'              => $this->input->post('somsed_5'), */
                    'lokasi'                => $this->input->post('lokasi'),
                    'email'                    => $this->input->post('email'),
                    'telepon'                => $this->input->post('telepon')
                );

                $this->db->where('id', '1');
                $this->db->update('global_setting', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Berhasil!</strong> global setting telah diubah.
                                                </div>');
                redirect('global_setting');
            } else {
                $data = array(
                    'nama_perusahaan'       => $this->input->post('nama_perusahaan'),
                    'deskripsi'             => $this->input->post('deskripsi_perusahaan'),
                 /**   'fixed_content'         => $this->input->post('fixed_content'),
                    'multiple_content'      => $this->input->post('multiple_content'),
                    'sosmed_1'              => $this->input->post('somsed_1'),
                    'sosmed_2'              => $this->input->post('somsed_2'),
                    'sosmed_3'              => $this->input->post('somsed_3'),
                    'sosmed_4'              => $this->input->post('somsed_4'),
                    'sosmed_5'              => $this->input->post('somsed_5'), */
                    'lokasi'                => $this->input->post('lokasi'),
                    'email'                    => $this->input->post('email'),
                    'telepon'                => $this->input->post('telepon'),
                    'logo'                  => $this->upload->data('file_name')
                );

                $this->db->where('id', '1');
                $this->db->update('global_setting', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <strong>Berhasil!</strong> global setting telah diubah.
                                                    </div>');
                redirect('global_setting');
            }
        } else {
            $data['title']  = "Global Setting";
            $data['global'] = $this->M_crud->getArrayWhere('global_setting', 'id', 1);
            $data['data']   = $this->M_crud->getArrayWhere('global_setting', 1);

            $this->load->view('template/header', $data);
            $this->load->view('global_setting/view');
            $this->load->view('template/footer');
        }
    }

    public function portfolio()
    {
        $data = array(
            'portfolio_judul'       => $this->input->post('judul'),
            'portfolio_deskripsi'             => $this->input->post('deskripsi'),
        );

        $this->db->where('id', '1');
        $this->db->update('global_setting', $data);
        $this->session->set_flashdata('message_global', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Berhasil!</strong> portfolio setting telah diubah.
                                            </div>');
        redirect('portfolio');
    }
}
