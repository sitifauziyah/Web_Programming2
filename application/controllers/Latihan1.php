<?php 
class Latihan1 extends CI_Controller
{
	public function index()
	{
	echo "Welcome to Programming Web Class 5B...";
	}
	
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah($n1, $n2);
		echo "Hasil Penjumlahan dari ".$n1."+".$n2."=".$hasil;
	}
}