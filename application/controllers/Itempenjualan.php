<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itempenjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->model('Itempenjualan_model');
		$this->load->model('Barang_model');
	}
	
	 public function index()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => 'active',
			'judul' => 'UBAH BARANG PENJUALAN',
			'action' => site_url('Itempenjualan/proses_tambah_ip'),
			'data_item_transaksi' =>$this->Itempenjualan_model->get_all_ip(),
		);
		
		$this->template->load('template/template_admin', 'penjualan/form_tambah_penjualan_barang', $data);
		
	}
	public function hapus_ip($id_barang, $no_transaksi)
	{
		$this->Itempenjualan_model->delete_ip($id_barang, $no_transaksi);

		redirect(site_url('Itempenjualan/tambah_ip/'. $no_transaksi));
	
    }

	public function tambah_ip($no_transaksi)
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => 'active',
			'judul' => 'TAMBAH BARANG PENJUALAN',
			'action' => site_url('Itempenjualan/proses_tambah_ip'),
			'data_item_transaksi' => $this->Itempenjualan_model->get_ip($no_transaksi),
			'data_barang' => $this->Barang_model->get_all_barang(),
			'no_transaksi' => set_value('no_transaksi', $no_transaksi),
			'id_barang' => set_value('id_barang'),
			'banyaknya' => set_value('banyaknya'),
			'hargasatuan' => set_value('hargasatuan'),
		);
		
		$this->template->load('template/template_admin', 'penjualan/form_tambah_penjualan_barang', $data);
		
	}

	public function _rules()
	{
		$this->form_validation->set_rules('no_transaksi','Nomor','trim|required');
		$this->form_validation->set_rules('id_barang','Barang','trim|required');
		$this->form_validation->set_rules('banyaknya','Banyaknya','trim|required');
		$this->form_validation->set_rules('hargasatuan','Harga Satuan','trim|required');

	}

	public function proses_tambah_ip()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$no_transaksi = $this->input->post('no_transaksi');
			$id_barang = $this->input->post('id_barang');
            $banyaknya = $this->input->post('banyaknya');
			$this->tambah_ip($no_transaksi);
			$this->Itempenjualan_model->proses_transaksi($id_barang, $banyaknya);
			
		} else {
			echo "<script><alert>Transaksi gagal. Stok barang tidak mencukupi atau sudah habis.</alert></script>";

			$no_transaksi = $this->input->post('no_transaksi');
			$id_barang = $this->input->post('id_barang');
			$banyaknya = $this->input->post('banyaknya');
			$hargasatuan = $this->input->post('hargasatuan');
			
			$this->Itempenjualan_model->insert($no_transaksi, $id_barang, $banyaknya, $hargasatuan);
			
			redirect(site_url('Itempenjualan/tambah_ip/'. $no_transaksi));
			
		}
	}

	public function ajax_get_harga()
	{
        $id_barang = $this->input->post('id_barang',TRUE);
        $no_transaksi = $this->input->post('no_transaksi',TRUE);
        $data = $this->Itempenjualan_model->select_harga($id_barang);
        echo json_encode($data);
    }
}