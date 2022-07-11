<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title']  	= "Home";
		$data['validasi']		= $this->M_crud->getResult('validasi');
		$data['banner']	= $this->M_crud->getResult('banner');
		$data['fitur']		= $this->M_crud->getResult('fitur');
		$data['keunggulan']	= $this->M_crud->getResult('keunggulan');
		$data['global']     = $this->M_crud->getArrayWhere('global_setting', 'id', '1');
		$this->load->view('home/view', $data);
	}

	public function post_message()
	{
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'email'		=> $this->input->post('email'),
			'judul'		=> $this->input->post('judul'),
			'isi'		=> $this->input->post('isi'),
			'tanggal'	=> date('Y-m-d H:i:s')
		);

		$this->db->insert('messages', $data);
		
		
		 $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://mail.jumpa.id',
          'smtp_port' => 465,
          'smtp_user' => 'sender@jumpa.id',
          'smtp_pass' => 'senderjumpa~123!', 
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );

	    $this->load->library('email',$config);
		$isi = '<b>Dari Customer :</b> '.$this->input->post('email').' <br> '.'
		        <b>Nama Customer :</b> '.$this->input->post('nama').' <br> '.' 
		        <b>Judul Pesan :</b> '.$this->input->post('judul').' <br> 
		        <b>Isi Pesan :</b> '.$this->input->post('isi');
		$this->email->from('sender@jumpa.id');
        $this->email->to('cs@jumpa.id');
        $this->email->subject('Pesanan Customer dari :'.' ('.$this->input->post('email').')');
        
        $this->email->message($isi);
        $this->email->send();
        
		$this->session->set_flashdata('message',true);
		/*$this->session->set_flashdata('message', '
              <div class="mb-3">
                <div>Your message has been sent. Thank you!</div>
              </div>');*/
	    redirect('/home#price', 'refresh');
	}

	public function post_kontak()
	{
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'email'		=> $this->input->post('email'),
			'judul'		=> $this->input->post('judul'),
			'isi'		=> $this->input->post('isi'),
			'tanggal'	=> date('Y-m-d H:i:s')
		);

		$this->db->insert('kontak', $data);
		
		 $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://mail.jumpa.id',
          'smtp_port' => 465,
          'smtp_user' => 'sender@jumpa.id',
          'smtp_pass' => 'senderjumpa~123!', 
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );

	    $this->load->library('email',$config);
		$isi = '<b>Dari :</b> '.$this->input->post('email').' <br> '.'
		        <b>Nama :</b> '.$this->input->post('nama').' <br> '.' 
		        <b>Judul :</b> '.$this->input->post('judul').' <br> 
		        <b>Isi :</b> '.$this->input->post('isi');
		$this->email->from('sender@jumpa.id');
        $this->email->to('cs@jumpa.id');
        $this->email->subject('Email Kontak dari :'.' ('.$this->input->post('email').')');
        
        $this->email->message($isi);
        $this->email->send();

		$this->session->set_flashdata('kontak',true);
		//redirect('home');
		redirect('/home#contact', 'refresh');
	}
}
