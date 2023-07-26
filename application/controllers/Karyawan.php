<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
    	
		$this->load->model('Karyawan_model');
	}
	
	 public function index()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'data_karyawan' =>$this->Karyawan_model->get_all_Karyawan(),

		);

		$this->template->load('template/template_admin', 'karyawan/karyawan_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function hapus_Karyawan($id_karyawan)
	{
	
		$this->Karyawan_model->delete_Karyawan($id_karyawan);

		redirect(site_url('Karyawan'));
	
    }

	public function tambah_Karyawan()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'judul' => 'TAMBAH KARYAWAN',
			'action' => site_url('Karyawan/proses_tambah_Karyawan'),
			'id_karyawan' => set_value('id_karyawan'),
			'nama_karyawan' => set_value('nama_karyawan'),
		);
		
		$this->template->load('template/template_admin', 'Karyawan/form_Karyawan', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_karyawan','No','trim|required');
        $this->form_validation->set_rules('nama_karyawan','Nama Karyawan','trim|required');
	}

	public function proses_tambah_Karyawan()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_Karyawan();
		} else {
			$data = array(
			'id_karyawan' => $this->input->post('id_karyawan'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
			);

			$this->Karyawan_model->insert($data);
			redirect(site_url('Karyawan'));
		}
	}

	public function ubah_Karyawan($id_karyawan)
	{
		$data_karyawan = $this->Karyawan_model->get_Karyawan($id_karyawan);
		$data = array(
			'menu_dashboard' => '',
            'menu_penjualan' => '',
			'judul' => 'UBAH KARYAWAN',
			'action' => site_url('Karyawan/proses_ubah_Karyawan'),
			'id_karyawan' => $data_karyawan->id_karyawan,
            'nama_karyawan' => $data_karyawan->nama_karyawan,
		);
		
		$this->template->load('template/template_admin', 'Karyawan/form_Karyawan', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function proses_ubah_Karyawan()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$id_karyawan = $this->input->post('id_karyawan');
			$this->ubah_Karyawan($id_karyawan);
		} else {
			$id_karyawan = $this->input->post('id_karyawan');
			$data = array(
				'id_karyawan' => $this->input->post('id_karyawan'),
				'nama_karyawan' => $this->input->post('nama_karyawan'),
			);

			$this->Karyawan_model->update($id_karyawan, $data);
			redirect(site_url('Karyawan'));
		}
	}
}