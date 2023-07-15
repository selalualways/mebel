<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
    	
		$this->load->model('Kategori_model');
	}
	
	 public function index()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'data_kategori' =>$this->Kategori_model->get_all_Kategori(),

		);

		$this->template->load('template/template_admin', 'kategori/kategori_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function hapus_Kategori($id_kategori)
	{
	
		$this->Kategori_model->delete_Kategori($id_kategori);

		redirect(site_url('Kategori'));
	
    }

	public function tambah_Kategori()
	{
		$data = array(
			'menu_dashboard' => '',
			'menu_penjualan' => '',
			'judul' => 'TAMBAH KATEGORI',
			'action' => site_url('Kategori/proses_tambah_Kategori'),
			'id_kategori' => set_value('id_kategori'),
			'nama_kategori' => set_value('nama_kategori'),
		);
		
		$this->template->load('template/template_admin', 'Kategori/form_Kategori', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_kategori','ID Kategori','trim|required');
        $this->form_validation->set_rules('nama_kategori','Nama Kategori','trim|required');
	}

	public function proses_tambah_Kategori()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_Kategori();
		} else {
			$data = array(
			'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama_kategori'),
			);

			$this->Kategori_model->insert($data);
			redirect(site_url('Kategori'));
		}
	}

	public function ubah_Kategori($id_kategori)
	{
		$data_kategori = $this->Kategori_model->get_Kategori($id_kategori);
		$data = array(
			'menu_dashboard' => '',
            'menu_penjualan' => '',
			'judul' => 'UBAH KATEGORI',
			'action' => site_url('Kategori/proses_ubah_Kategori'),
			'id_kategori' => $data_kategori->id_kategori,
            'nama_kategori' => $data_kategori->nama_kategori,
		);
		
		$this->template->load('template/template_admin', 'Kategori/form_Kategori', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function proses_ubah_Kategori()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$id_kategori = $this->input->post('id_kategori');
			$this->ubah_Kategori($id_kategori);
		} else {
			$id_kategori = $this->input->post('id_kategori');
			$data = array(
				'id_kategori' => $this->input->post('id_kategori'),
				'nama_kategori' => $this->input->post('nama_kategori'),
			);

			$this->Kategori_model->update($id_kategori, $data);
			redirect(site_url('Kategori'));
		}
	}
}