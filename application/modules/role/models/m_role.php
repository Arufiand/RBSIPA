<?php
class M_role extends CI_Model{

  public function get_data($tabel,$where=NULL){ //ambil data user dan role
    $this->db->select('*');
    $this->db->from($tabel);
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

  public function input_data($data,$tabel){
    $this->db->insert($tabel,$data);
  }

  public function update_data($where,$data,$tabel){
    $this->db->where($where);
    $this->db->update($tabel,$data);
  }

  public function hapus_data($where,$tabel){
    $this->db->where($where);
    $this->db->delete($tabel);
  }

}
