<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->model('Penjualan_model');
		$this->load->model('Karyawan_model');
		$this->load->model('Itempenjualan_model');
		$this->load->model('Barang_model');
	}
	
	 public function index()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => 'active',
			'data_transaksi' =>$this->Penjualan_model->get_all_penjualan(),
			'data_karyawan' =>$this->Karyawan_model->get_all_karyawan(),
		);

		$this->template->load('template/template_admin', 'penjualan/penjualan_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function hapus_penjualan($no_transaksi)
	{
	
		$this->Penjualan_model->delete_penjualan($no_transaksi);

		redirect(site_url('Penjualan'));
	
    }
	public function tambah_penjualan()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => 'active',
			'judul' => 'TAMBAH PENJUALAN',
			'action' => site_url('Penjualan/proses_tambah_penjualan'),
			'data_karyawan' => $this->Karyawan_model->get_all_karyawan(),
			'no_transaksi' => set_value('no_transaksi'),
			'totalharga' => set_value('totalharga'),
			'tanggal' => set_value('tanggal'),
			'id_karyawan' => set_value('id_karyawan'),
			'pelanggan' => set_value('pelanggan'),
			'hp_pelanggan' => set_value('hp_pelanggan'),
		);
		
		$this->template->load('template/template_admin', 'penjualan/form_penjualan', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('no_transaksi','Nomor','trim|required');
	
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		$this->form_validation->set_rules('id_karyawan','Kasir','trim|required');
	}

	public function proses_tambah_penjualan()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_penjualan();
		} else {
			$data = array(
			'no_transaksi' => $this->input->post('no_transaksi'),
			'totalharga' => $this->input->post('totalharga'),
			'tanggal' => $this->input->post('tanggal'),
			'id_karyawan' => $this->input->post('id_karyawan'),
			'pelanggan' => $this->input->post('pelanggan'),
			'hp_pelanggan' => $this->input->post('hp_pelanggan'),
			);

			$this->Penjualan_model->insert($data);
			redirect(site_url('Penjualan'));
		}
	}

	public function ubah_penjualan($no_transaksi)
	{
		$data_transaksi = $this->Penjualan_model->get_penjualan($no_transaksi);
		$data = array(
			'menu_dashboard' => '',
            'menu_penjualan' => 'active',
			'judul' => 'UBAH PENJUALAN',
			'action' => site_url('Penjualan/proses_ubah_penjualan'),
			'data_karyawan' => $this->Karyawan_model->get_all_karyawan(),
			'no_transaksi' => $data_transaksi->no_transaksi,
			'totalharga' => $data_transaksi->totalharga,
			'tanggal' => $data_transaksi->tanggal,
			'id_karyawan' => $data_transaksi->id_karyawan,
			'pelanggan' => $data_transaksi->pelanggan,
			'hp_pelanggan' => $data_transaksi->hp_pelanggan,
		);
		
		$this->template->load('template/template_admin', 'Penjualan/form_penjualan', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function proses_ubah_penjualan()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$no_transaksi = $this->input->post('no_transaksi');
			$this->ubah_penjualan($no_transaksi);
		} else {
			$no_transaksi = $this->input->post('no_transaksi');
			$data = array(
				'no_transaksi' => $this->input->post('no_transaksi'),
				'totalharga' => $this->input->post('totalharga'),
				'tanggal' => $this->input->post('tanggal'),
				'id_karyawan' => $this->input->post('id_karyawan'),
				'pelanggan' => $this->input->post('pelanggan'),
				'hp_pelanggan' => $this->input->post('hp_pelanggan'),
			);

			$this->Penjualan_model->update($no_transaksi, $data);
			redirect(site_url('Penjualan'));
		}
	}

	

	public function cetak_ip($no_transaksi)
	{
		$data_transaksi = $this->Penjualan_model->get_penjualan($no_transaksi);
		$data_ip = $this->Itempenjualan_model->get_ip($no_transaksi);
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => 'active',
			'tanggal' => $data_transaksi->tanggal,
			'no_transaksi' => $data_transaksi->no_transaksi,
			'total' => $data_transaksi->total,
			'nama_karyawan' => $data_transaksi->nama_karyawan,
			'pelanggan' => $data_transaksi->pelanggan,
			'hp_pelanggan' => $data_transaksi->hp_pelanggan,
			'data_ip'=> $data_ip,
		);
		
		$this->template->load('template/template_admin', 'penjualan/cetak_ip', $data);
		
	}

	
}