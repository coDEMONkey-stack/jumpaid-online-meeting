<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup_database extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['username'])) {
            redirect('home');
        }
	}

	public function index()
	{
		$data['title']  = "Backup Database";
        $data['global'] = $this->M_crud->getArrayWhere('global_setting','id',1);
		$this->load->view('template/header',$data);
		$this->load->view('backup_database/view');
		$this->load->view('template/footer');
    }
    
    public function download()
    {
        $this->load->dbutil();

        $config = array (
            'format'    => 'zip',
            'filename'  => 'supplier.sql'
        );

        $backup =& $this->dbutil->backup($config);

        $name = 'db-backup-supplier-'. date("Y-m-d-H:i:s") . '.zip';
        $save = '/backup'.$name;

        $this->load->helper('download');
        write_file($save, $backup);
        force_download($name,$backup);
    }
}
