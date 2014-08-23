<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Builder extends CI_Controller {
	
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('builder/build');
		$this->load->view('common/footer');
	}
}