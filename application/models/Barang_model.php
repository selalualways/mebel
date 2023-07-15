<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function get_all_barang()
    {
      return $this->db->get('barang')->result();
    }

    public function get_all_kategori_barang()
    {
      $this->db->select('*');
      $this->db->from('barang');
      $this->db->join('kategori','kategori.id_kategori = barang.id_kategori');
      
      return $this->db->get()->result();
    }

    public function get_barang($id_barang)
    { 
      $this->db->where('id_barang', $id_barang);
      return $this->db->get('barang')->row(); 
    }

    public function delete_barang($id_barang)
    {
      $this->db->where('id_barang', $id_barang);
      $this->db->delete('barang'); 
    }

    public function insert($data)
    {
      $this->db->insert('Barang', $data);
    }

    public function update($id_barang, $data)
    {
      $this->db->where('id_barang', $id_barang);
      $this->db->update('barang', $data); 
    }
}

?>