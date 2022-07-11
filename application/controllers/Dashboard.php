<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['username'])) {
            redirect('home');
        }
	}
	
	public function index()
	{
		$data['title']  = "Dashboard";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting','id',1);
		$this->load->view('template/header',$data);
		$this->load->view('dashboard/view');
		$this->load->view('template/footer');
	}
}
