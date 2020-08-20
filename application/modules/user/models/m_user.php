<?php
class M_user extends CI_Model{

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
  public function get_data_status_asesor($where){ //ambil data asesor
    $this->db->select('status_asesor');
    $this->db->from('asesor');
    $this->db->where($where);
    return $query = $this->db->get();
  }
  public function edit_asesor($where,$tabel,$data){ //ambil data asesor
    $this->db->where($where);
    $this->db->update($tabel,$data);
  }
  public function edit_user($where,$tabel,$data){ //ambil data asesor
    $this->db->where($where);
    $this->db->update($tabel,$data);
  }
  public function edit_pegawai($where,$tabel,$data){ //ambil data asesor
    $this->db->where($where);
    $this->db->update($tabel,$data);
  }

  public function get_data_role($tabel,$where=NULL){ //ambil data user dan role
    $this->db->select('*');
    $this->db->from($tabel);
    if ($where != NULL) {
      $this->db->where($where);
    }
    return $query = $this->db->get();
  }
  public function hapus_data($where,$tabel){
    $this->db->where($where);
    $this->db->delete($tabel);
  }

}
