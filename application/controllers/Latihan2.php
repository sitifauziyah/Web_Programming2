<?php 
class Latihan2 extends CI_Controller
{
	public function index()
	{
	echo "Welcome to Programming Web Class 5B...";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');

		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

		$this->load->view('View-latihan1', $data);
	}
}