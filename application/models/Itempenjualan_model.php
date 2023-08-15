<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Itempenjualan_model extends CI_Model
{
    public function get_all_ip()
    {
      $this->db->select('*');
      $this->db->from('item_transaksi');
      $this->db->join('barang','barang.id_barang = item_transaksi.id_barang');
      
      return $this->db->get()->result(); 
    }    

    public function get_ip($no_transaksi)
    {
      $this->db->select('*');
      $this->db->from('item_transaksi');
      $this->db->join('barang','barang.id_barang = item_transaksi.id_barang');
      $this->db->join('transaksi','item_transaksi.no_transaksi = transaksi.no_transaksi');
      $this->db->where('item_transaksi.no_transaksi', $no_transaksi);
      return $this->db->get()->result(); 
    }

    public function delete_ip($id_barang, $no_transaksi)
    {
      $this->db->where('id_barang', $id_barang);
      $this->db->where('no_transaksi', $no_transaksi);
      $this->db->delete('item_transaksi'); 
    }

    public function insert($no_transaksi, $id_barang, $banyaknya, $hargasatuan)
    {
      //$this->db->insert('item_transaksi', $data);
      $this->db->query("insert into item_transaksi(no_transaksi, id_barang, banyaknya, hargasatuan) values ($no_transaksi, $id_barang, $banyaknya, $hargasatuan) on duplicate key update banyaknya=banyaknya+$banyaknya");
      return true;
    }

    public function update($no_transaksi, $data)
    {
      $this->db->where('no_transaksi', $no_transaksi);
      $this->db->update('item_transaksi', $data); 
    }

    public function select_harga($id_barang)
   {
		$query = $this->db->query('SELECT * FROM barang WHERE barang.id_barang = '.$id_barang);
			
		$res = $query->row();
		
		if(isset($res))
		{
			return $res;
		}
   }

   public function cek_stock() {
    $this->db->select('stock');
    $this->db->from('barang'); 
    $this->db->where('id_barang', $id_barang);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      $barang = $query->row();
      return $barang->stock >= $banyaknya;
  }
  
  return false;
}

public function proses_transaksi($id_barang, $banyaknya) {
  if ($this->cek_stock($id_barang, $banyaknya)) {
     
      return true;
  }
  return false;
}

}


?>