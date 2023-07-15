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

    public function insert($data)
    {
      $this->db->insert('item_transaksi', $data);
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
}

?>