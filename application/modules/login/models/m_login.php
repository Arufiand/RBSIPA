<?php
class M_login extends CI_Model{

  public function cek_login($tabel,$where){ //ambil data user dan role
    $this->db->select('*');
    $this->db->from($tabel);
    if ($where != NULL) {
      $this->db->where($where);
    }
    return $query = $this->db->get();
  }

  public function get_data_user($tabel,$where=NULL){ //ambil data user dan role
    $this->db->select('*');
    $this->db->from($tabel);
    $this->db->join('user_akses', 'user_akses.id_user ='.$tabel.'.id_user');
    $this->db->join('role_user', 'role_user.id_role = user_akses.id_role');
    if ($where != NULL) {
      $this->db->where($where);
    }
    return $query = $this->db->get();
  }
}
