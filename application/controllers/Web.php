<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Web extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['judul'] = "Halaman Depan";
		$this->load->view('View_header',$data);
		$this->load->view('View_index',$data);
		$this->load->view('View_footer',$data);
	}
}