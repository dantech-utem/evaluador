<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Examen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
		
    }

	public function O_examen()
	{
		$datos["title_meta"] = "Vista Examen";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/O_examen');
		$this->load->view('templates/footer');
	}


	public function C_examen()
	{
		$datos["title_meta"] = "Vista Examenes nuevos";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/C_examen');
		$this->load->view('templates/footer');
	}


}
