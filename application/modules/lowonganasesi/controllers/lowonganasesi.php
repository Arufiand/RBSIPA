<?php
class Lowonganasesi extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_lowonganasesi'); //load model crud_model
    }

    function daftarlowongan()
    {
      $data['title'] = 'Lowongan Asesi';
      $data['asesi'] = $this->m_lowonganasesi->get_data('lowongan_asesi')->result();
      $page = 'lowonganasesi/v_lowonganasesi';
      $js = 'lowonganasesi/v_jslowonganasesi';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function detailasesi($id)
    {
      $where =array('lowongan_asesi.id_lowongan'=>$id);
      $where2 =array('id_lowongan'=>$id);
      $data['title'] = 'Lowongan Asesi';
      $data['user'] = $this->m_lowonganasesi->get_data_detail('lowongan_asesi',$where)->result();
      $data['user2'] = $this->m_lowonganasesi->get_data_detail2('pendaftaran_asesi',$where2)->result();
      $page = 'lowonganasesi/v_detail_asesi';
      $js = 'lowonganasesi/v_jslowonganasesi';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }

    function tambah_asesi()
    {
        $data['title'] = 'Lowongan Asesi';
        $page = 'lowonganasesi/v_tambahasesi';
        $js = 'lowonganasesi/v_jslowonganasesi';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function tambah_aksi_asesi()
    {
        $npsn = $this->input->post('npsn');
        $judul = $this->input->post('judul_lowongan');
        $ket = $this->input->post('keterangan_lowongan');
        $tglkedaluarsa = $this->input->post('tanggal_kadaluarsa');

          $data = array(
            'judul_lowongan'=>$judul,
            'keterangan_lowongan'=>$ket,
            'tanggal_posting'=>date('Y-m-d'),
            'tanggal_kadaluarsa'=> $tglkedaluarsa,
            'status_lowongan'=>1,
          );
          $this->m_lowonganasesi->input_data($data,'lowongan_asesi');

        redirect('lowonganasesi/daftarlowongan');
    }

    function listasesor()
    {
        $data['title'] = 'List Asesor';
        $data['asesor'] = $this->m_lowonganasesi->get_data_user('asesor')->result();
        $page = 'asesor/list asesor/v_listasesor';
        $js = 'asesor/list asesor/v_jslistasesor';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
}
?>
