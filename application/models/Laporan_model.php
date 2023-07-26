<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan_model extends CI_Model {

  public function get_lb($tahun=null) {
    $sql = "SELECT vrtransaksi.* FROM vrtransaksi";

    if(!empty($tahun)) {
        $sql = "SELECT vrtransaksi.* FROM vrtransaksi
        WHERE vrtransaksi.tahun = '".$tahun."'";
    }

    return $this->db->query($sql)->result();
}

public function get_lt(){
    $sql = $this->db->query("SELECT DISTINCT YEAR(transaksi.tanggal) as tahun 
    FROM transaksi
    ORDER BY (SELECT tahun) DESC");

    return $sql;
}

}