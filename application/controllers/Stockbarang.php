<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockbarang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
    	$this->load->model('Stockbarang_model');
		$this->load->model('Kategori_model');
	}
	
	 public function index()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'data_stock' =>$this->Stockbarang_model->get_stock_kosong(),
		);

		$this->template->load('template/template_admin', 'barang/baranghabis', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	

	
	public function _rules()
	{
		
		$this->form_validation->set_rules('kode_barang','Kode Barang','trim|required');
		$this->form_validation->set_rules('id_kategori','Kategori','trim|required');
        $this->form_validation->set_rules('nama_barang','Nama Barang','trim|required');
		$this->form_validation->set_rules('harga','Tanggal','trim|required');
		$this->form_validation->set_rules('stock','Quantity','trim|required');
	}

	

	

	public function cetak_barang()
	{
		
		$data = array(
			'menu_dashboard' => '',
            'menu_penjualan' => '',
			'data_stock' => $this->Stockbarang_model->get_stock_kosong(),
			
		);
		$this->template->load('template/template_admin', 'barang/cetak_stock', $data);
		
	}

	public function cek_stock() {
        $empty_stock_items = $this->Barang_model->cet_stock();

        $data['empty_stock_items'] = $empty_stock_items;

        $this->load->view('baranghabis', $data);
    }
}