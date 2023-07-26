<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
    	
		$this->load->model('Laporan_model');
	}

    public function index()
	{
		$tahun = $this->input->post('tahun');
		$laporan_transaksi = $this->Laporan_model->get_lb($tahun);
		$get_tahun = $this->Laporan_model->get_lt($tahun);

		$data = array(
            'menu_dashboard' => '',
			'menu_penjualan' => '',
			'action' => site_url('Laporan/index'),
			'tahun' => set_value('tahun' , $tahun),
			'get_tahun' => $get_tahun,
			'laporan_transaksi' => $laporan_transaksi
		);

		$this->template->load('template/template_admin', 'penjualan/laporan', $data);
	}

}