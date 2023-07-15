<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function get_all_kategori()
    {
        return $this->db->get('kategori')->result();
    }

    public function get_kategori($id_kategori)
    {
      $this->db->where('id_kategori', $id_kategori);
      return $this->db->get('kategori')->row(); 
    }

    public function delete_kategori($id_kategori)
    {
      $this->db->where('id_kategori', $id_kategori);
      $this->db->delete('kategori'); 
    }

    public function insert($data)
    {
      $this->db->insert('Kategori', $data);
    }

    public function update($id_kategori, $data)
    {
      $this->db->where('id_kategori', $id_kategori);
      $this->db->update('kategori', $data); 
    }
}

?>