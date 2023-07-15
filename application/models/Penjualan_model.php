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
}

?>