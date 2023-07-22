<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

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
    	$this->load->model('Barang_model');
		$this->load->model('Kategori_model');
	}
	
	 public function index()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'data_barang' =>$this->Barang_model->get_all_kategori_barang(),
		);

		$this->template->load('template/template_admin', 'barang/barang_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function hapus_Barang($id_barang)
	{
	
		$this->Barang_model->delete_Barang($id_barang);

		redirect(site_url('Barang'));
	
    }

	public function tambah_barang()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'judul' => 'TAMBAH BARANG',
			'action' => site_url('barang/proses_tambah_barang'),
			'data_kategori' => $this->Kategori_model->get_all_kategori(),
			'id_barang' => set_value('id_barang'),
			'kode_barang' => set_value('kode_barang'),
			'id_kategori' => set_value('id_kategori'),
			'nama_barang' => set_value('nama_barang'),
			'harga' => set_value('harga'),
			'stock' => set_value('stock'),
		);
		
		$this->template->load('template/template_admin', 'barang/form_barang', $data);
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

	public function proses_tambah_barang()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_barang();
		} else {
			$data = array(
			'id_barang' => $this->input->post('id_barang'),
			'kode_barang' => $this->input->post('kode_barang'),
			'id_kategori' => $this->input->post('id_kategori'),
            'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga'),
			'stock' => $this->input->post('stock'),
			);

			$this->Barang_model->insert($data);
			redirect(site_url('Barang'));
		}
	}

	public function ubah_barang($id_barang)
	{
		$data_barang = $this->Barang_model->get_barang($id_barang);
		$data = array(
			'menu_dashboard' => '',
            'menu_penjualan' => '',
			'judul' => 'UBAH BARANG',
			'action' => site_url('barang/proses_ubah_barang'),
			'data_kategori' => $this->Kategori_model->get_all_kategori(),
			'id_barang' => $data_barang->id_barang,
			'kode_barang' => $data_barang->kode_barang,
			'id_kategori' => $data_barang->id_kategori,
            'nama_barang' => $data_barang->nama_barang,
			'harga' => $data_barang->harga,
			'stock' => $data_barang->stock,
		);
		
		$this->template->load('template/template_admin', 'barang/form_barang', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function proses_ubah_barang()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$id_barang = $this->input->post('id_barang');
			$this->ubah_barang($id_barang);
		} else {
			$id_barang = $this->input->post('id_barang');
			$data = array(
				'id_barang' => $this->input->post('id_barang'),
				'kode_barang' => $this->input->post('kode_barang'),
				'id_kategori' => $this->input->post('id_kategori'),
				'nama_barang' => $this->input->post('nama_barang'),
				'harga' => $this->input->post('harga'),
				'stock' => $this->input->post('stock'),
			);

			$this->Barang_model->update($id_barang, $data);
			redirect(site_url('Barang'));
		}
	}
}