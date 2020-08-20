<?php
class Pendaftaranlowonganasesor extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_lowonganasesor');
    }

    function pendaftaranasesor()
    {
        $where = array('status_lowongan'=>1);
        $where2 = array('user_akses.id_user'=>$this->session->userdata('id_asesor'));
        $data['title'] = 'Pendaftaran Asesor';
        $data['lowongan'] = $this->m_lowonganasesor->get_data('lowongan_asesi',$where)->result();
        $data['user'] = $this->m_lowonganasesor->get_data_user('asesor',$where2)->result();
        $page = 'pendaftaranlowonganasesor/v_isikesanggupan';
        $js = 'pendaftaranlowonganasesor/v_jslowonganasesor';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }

    function tambah_aksi_daftar()
    {
      $nia = $this->input->post('nia');
      $lowongan = $this->input->post('lowongan');
      $adomisili= $this->input->post('adomisili');
      $desa = $this->input->post('desa');
      $kec = $this->input->post('kecamatan');
      $kota = $this->input->post('kota');
      $provinsi = $this->input->post('provinsi');
      $kesanggupan = $this->input->post('kesanggupan');
      $status = $this->input->post('status');
      $ketasesi = $this->input->post('ketasesi');

      $data = array(
            'id_lowongan'=>$lowongan,
            'nia'=>$nia,
            'alamat_domisili'=>$adomisili,
            'kota_domisili'=>$kota,
            'provinsi_domisili'=>$provinsi,
            'kelurahan_desa_domisili'=>$desa,
            'kecamatan_domisili'=>$kec,
            'kesanggupan_asesi'=>$kesanggupan,
            'status_pendaftaran'=>1,
            'keterangan_asesi'=>$ketasesi,
            'tanggal_pendaftaran_dibuat'=>date('Y-m-d')

          );
          $this->m_lowonganasesor->input_data($data,'pendaftaran_asesi');


        redirect('user/listuser');
    }
}
?>
