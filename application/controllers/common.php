<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Controller {
	
	public function home()
	{
		$this->load->view('common/header');
		$this->load->view('common/main');
		$this->load->view('common/footer');
	}
	
	public function notFound()
	{
		$this->load->view('common/header');
		$this->load->view('common/notFound');
		$this->load->view('common/footer');
	}
}