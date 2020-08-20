<?php
class Daftaruser extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_daftaruser');
    }

    function tambah_user()
    {
        $data['title'] = 'List Asesor';
        $data['role'] = $this->m_daftaruser->get_data_role('role_user')->result();
        $page = 'daftaruser/v_daftaruser';
        $js = 'daftaruser/v_jsdaftaruser';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function tambah_aksi_user()
    {

      $jenis_user = $this->input->post('jenis_user');


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

        if ($jenis_user==3) {

          $data = array(
            'id_role'=>$jenis_user,
            'email_user'=>$email,
            'password_user'=>$password,
            'status_user'=>2
          );
          $this->m_daftaruser->input_data($data,'user_akses');

          $data2 = array(
            'nia'=>$niu,
            'id_user'=>$this->db->insert_id(),
            'nama_asesor'=>$nama_user,
            'tempat_lahir_asesor'=>$tempat_lahir,
            'tanggal_lahir_asesor'=>$tanggal_lahir,
            'jenis_kelamin_asesor'=>$jekel,
            'nomor_telepon_asesor'=>$notelp,
            'agama_asesor'=>$agama,
            'pekerjaan_asesor'=>$pekerjaan,
            'alamat_asessor'=>$alamat,
            'status_asesor'=>2,
            'kota_asesor'=>$kota,
            'provinsi_asesor'=>$provinsi,
            'kelurahan_desa_asesor'=>$desa,
            'kecamatan_asesor'=>$kec,
            'tipe_asesor'=>1,
            'rumpun_asesor'=>1,
            'jumlah_visitasi_asesor'=>0,
            'jumlah_validasi_asesor'=>0,
            'ranking_keseluruhan_asesor'=>0
          );
          $this->m_daftaruser->input_data($data2,'asesor');
        }
        else {
                    $data = array(
                    'id_role'=>$jenis_user,
                    'email_user'=>$email,
                    'password_user'=>$password,
                    'status_user'=>2
                  );
                  $this->m_daftaruser->input_data($data,'user_akses');

                  $data2 = array(
                    'id_pegawai'=>$niu,
                    'id_user'=>$this->db->insert_id(),
                    'nama_pegawai'=>$nama_user,
                    'tempat_lahir_pegawai'=>$tempat_lahir,
                    'tanggal_lahir_pegawai'=>$tanggal_lahir,
                    'jenis_kelamin_pegawai'=>$jekel,
                    'nomor_telepon_pegawai'=>$notelp,
                    'agama_pegawai'=>$agama,
                    'pekerjaan_pegawai'=>$pekerjaan,
                    'alamat_pegawai'=>$alamat,
                    'status_pegawai'=>2,
                    'kota_pegawai'=>$kota,
                    'provinsi_pegawai'=>$provinsi,
                    'kelurahan_desa_pegawai'=>$desa,
                    'kecamatan_pegawai'=>$kec,
                  );
                  $this->m_daftaruser->input_data($data2,'pegawai');
            }

        redirect('user/listuser');



    }
}
?>
