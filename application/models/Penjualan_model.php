<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model
{
      
    
    public function get_all_penjualan(){

      $sql = "SELECT *,
              (SELECT SUM(item_transaksi.banyaknya * item_transaksi.hargasatuan) FROM item_transaksi WHERE item_transaksi.no_transaksi = transaksi.no_transaksi) AS total
              from transaksi, karyawan
              WHERE transaksi.id_karyawan = karyawan.id_karyawan";

      return $this->db->query($sql)->result();
    }

    public function get_penjualan($no_transaksi){

      $sql = "SELECT *,
              (SELECT SUM(item_transaksi.banyaknya * item_transaksi.hargasatuan) FROM item_transaksi WHERE item_transaksi.no_transaksi = transaksi.no_transaksi) AS total
              from transaksi, karyawan
              WHERE transaksi.id_karyawan = karyawan.id_karyawan
              and transaksi.no_transaksi = $no_transaksi";

      return $this->db->query($sql)->row();
    }

    public function delete_penjualan($no_transaksi)
    {
      $this->db->where('no_transaksi', $no_transaksi);
      $this->db->delete('transaksi'); 
    }

    public function insert($data)
    {
      $this->db->insert('transaksi', $data);
    }

    public function update($no_transaksi, $data)
    {
      $this->db->where('no_transaksi', $no_transaksi);
      $this->db->update('transaksi', $data); 
    }

    public function view_by_date($date)
    {
      $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya
      
      return $this->db->get('transaksi')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }

    public function view_by_month($month, $year)
    {
      $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
      $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
      
      return $this->db->get('transaksi')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    }

    public function view_by_year($year)
    {
      $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
      
      return $this->db->get('transaksi')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
    }
    
    public function option_tahun(){
      $this->db->select('YEAR(tanggal) AS tahun'); // Ambil Tahun dari field tanggal
      $this->db->from('transaksi'); // select ke tabel transaksi
      $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
      $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tanggal
      
      return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}

?>