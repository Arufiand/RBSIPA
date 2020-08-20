<?php
class User extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_user'); //load model crud_model
    }

    function index()
    {
        $data['title'] = 'User';
        $data['user'] = $this->m_user->get_data_user('asesor')->result();
        $data['user2'] = $this->m_user->get_data_user('pegawai')->result();
        $page = 'user/user/v_user';
        $js = 'user/user/v_jsuser';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }
    function listuser()
    {
        $data['title'] = 'User';
        $data['user'] = $this->m_user->get_data_user('asesor')->result();
        $data['user2'] = $this->m_user->get_data_user('pegawai')->result();
        $page = 'user/user/v_user';
        $js = 'user/user/v_jsuser';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function detailuserasesor($id)
    {
      $where =array('user_akses.id_user'=>$id);
      $data['title'] = 'User';
      $data['user'] = $this->m_user->get_data_user('asesor',$where)->result();
      $page = 'user/user/v_detail_user_asesor';
      $js = 'user/user/v_jsuser';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }

    function detailuserpegawai($id)
    {
      $where =array('user_akses.id_user'=>$id);
      $data['title'] = 'User';
      $data['user'] = $this->m_user->get_data_user('pegawai',$where)->result();
      $page = 'user/user/v_detail_user_pegawai';
      $js = 'user/user/v_jsuser';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }

    function edituserasesor($id)
    {
      $where =array('user_akses.id_user'=>$id);
      $data['title'] = 'User';
      $data['user'] = $this->m_user->get_data_user('asesor',$where)->result();
      $data['role'] = $this->m_user->get_data_role('role_user')->result();
      $page = 'user/user/v_edituserasesor';
      $js = 'user/user/v_jsuser';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function edit_aksi_user_asesor()
    {

      $jenis_user = $this->input->post('jenis_user');

        $id_user = $this->input->post('id_user');
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $niu = $this->input->post('niu');
        $nama_user = $this->input->post('nama_user');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jekel = $this->input->post('jekel');
        $notelp = $this->input->post('notelp');
        $pekerjaan = $this->input->post('pekerjaan');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $desa = $this->input->post('desa');
        $kec = $this->input->post('kecamatan');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $tipe_asesor = $this->input->post('tipe_asesor');
        $rumpun= $this->input->post('rumpun_asesor');
        $visitasi = $this->input->post('jumlah_visitasi');
        $validasi = $this->input->post('jumlah_validasi');
        $ranking = $this->input->post('ranking');
        $status_asesor = $this->input->post('status_asesor');
        $status_user = $this->input->post('status_user');


          $data = array(
            'id_role'=>$jenis_user,
            'email_user'=>$email,
            'password_user'=>$password,
            'status_user'=>$status_user
          );
          $where = array(
            'id_user'=>$id_user
          );

          $this->m_user->edit_user($where,'user_akses',$data);

          $data2 = array(
            'id_user'=>$id_user,
            'nama_asesor'=>$nama_user,
            'tempat_lahir_asesor'=>$tempat_lahir,
            'tanggal_lahir_asesor'=>$tanggal_lahir,
            'jenis_kelamin_asesor'=>$jekel,
            'nomor_telepon_asesor'=>$notelp,
            'agama_asesor'=>$agama,
            'pekerjaan_asesor'=>$pekerjaan,
            'alamat_asessor'=>$alamat,
            'status_asesor'=>$status_asesor,
            'kota_asesor'=>$kota,
            'provinsi_asesor'=>$provinsi,
            'kelurahan_desa_asesor'=>$desa,
            'kecamatan_asesor'=>$kec,
            'tipe_asesor'=>$tipe_asesor,
            'rumpun_asesor'=>$rumpun,
            'jumlah_visitasi_asesor'=>$visitasi,
            'jumlah_validasi_asesor'=>$validasi,
            'ranking_keseluruhan_asesor'=>$ranking
          );
          $where2 = array(
            'nia'=>$niu
          );
          $this->m_user->edit_asesor($where2,'asesor',$data2);
          redirect('user/listuser');
    }

    function edituserpegawai($id)
    {
      $where =array('user_akses.id_user'=>$id);
      $data['title'] = 'User';
      $data['user'] = $this->m_user->get_data_user('pegawai',$where)->result();
      $data['role'] = $this->m_user->get_data_role('role_user')->result();
      $page = 'user/user/v_edituserpegawai';
      $js = 'user/user/v_jsuser';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }

    function edit_aksi_user_pegawai()
    {

      $jenis_user = $this->input->post('jenis_user');

        $id_user = $this->input->post('id_user');
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $niu = $this->input->post('niu');
        $nama_user = $this->input->post('nama_user');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jekel = $this->input->post('jekel');
        $notelp = $this->input->post('notelp');
        $pekerjaan = $this->input->post('pekerjaan');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $desa = $this->input->post('desa');
        $kec = $this->input->post('kecamatan');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $status_pegawai = $this->input->post('status_pegawai');
        $status_user = $this->input->post('status_user');


          $data = array(
            'id_role'=>$jenis_user,
            'email_user'=>$email,
            'password_user'=>$password,
            'status_user'=>$status_user
          );
          $where = array(
            'id_user'=>$id_user
          );

          $this->m_user->edit_user($where,'user_akses',$data);

          $data2 = array(
            'id_user'=>$id_user,
            'nama_pegawai'=>$nama_user,
            'tempat_lahir_pegawai'=>$tempat_lahir,
            'tanggal_lahir_pegawai'=>$tanggal_lahir,
            'jenis_kelamin_pegawai'=>$jekel,
            'nomor_telepon_pegawai'=>$notelp,
            'agama_pegawai'=>$agama,
            'pekerjaan_pegawai'=>$pekerjaan,
            'alamat_pegawai'=>$alamat,
            'status_pegawai'=>$status_pegawai,
            'kota_pegawai'=>$kota,
            'provinsi_pegawai'=>$provinsi,
            'kelurahan_desa_pegawai'=>$desa,
            'kecamatan_pegawai'=>$kec,
          );
          $where2 = array(
            'id_pegawai'=>$niu
          );
          $this->m_user->edit_pegawai($where2,'pegawai',$data2);
          redirect('user/listuser');
    }

    function hapususerasesor($id)
    {
        $where = array('id_user' =>$id );
        $this->m_user->hapus_data($where,'asesor');
        $this->m_user->hapus_data($where,'user_akses');
        redirect('user/listuser');

    }
    function hapususerpegawai($id)
    {
        $where = array('id_user' =>$id );
        $this->m_user->hapus_data($where,'pegawai');
        $this->m_user->hapus_data($where,'user_akses');
        redirect('user/listuser');

    }
}
?>
