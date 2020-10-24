<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkenalan extends CI_Controller
{
	public function index()
	{
		//echo "<h3>Perkenalkan</h3>";
		//echo "Nama saya Siti Fauziyah<br>
		//Saya tinggal di Jatibarang<br>
		//Saya suka tidur<br>";
		$this->load->view('view-perkenalan');
	}
}