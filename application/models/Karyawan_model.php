<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function get_all_karyawan()
    {
        return $this->db->get('karyawan')->result();
    }

    public function get_karyawan($id_karyawan)
    {
      $this->db->where('id_karyawan', $id_karyawan);
      return $this->db->get('karyawan')->row(); 
    }

    public function delete_karyawan($id_karyawan)
    {
      $this->db->where('id_karyawan', $id_karyawan);
      $this->db->delete('karyawan'); 
    }

    public function insert($data)
    {
      $this->db->insert('Karyawan', $data);
    }

    public function update($id_karyawan, $data)
    {
      $this->db->where('id_karyawan', $id_karyawan);
      $this->db->update('karyawan', $data); 
    }
}

?>