<?php
class Penugasanasesor extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_penugasanasesor');
    }

    function listpenugasanasesor()
    {
        $data['title'] = 'Penugasan Asesor';
        $where = array('user_akses.id_user'=>$this->session->userdata('id_asesor'));
        $data['asesor'] = $this->m_penugasanasesor->get_data_user('pegawai',$where)->result();
        $data['listtugas'] = $this->m_penugasanasesor->get_data('pasangan_asesor')->result();
        $data['lowongan'] = $this->m_penugasanasesor->get_data('lowongan_asesi')->result();
        $data['pasangan'] = $this->m_penugasanasesor->get_data_lowongan('pasangan_asesor')->result();
        $page = 'penugasanasesor/v_penugasanasesor';
        $js = 'penugasanasesor/v_jspenugasanasesor';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function detailpenugasan($id)
    {
      $data['title'] = 'Penugasan Asesor';
      $where = array('user_akses.id_user'=>$this->session->userdata('id_asesor'));
      $where2 = array('lowongan_asesi.id_lowongan'=>$id);
      $data['asesor'] = $this->m_penugasanasesor->get_data_user('pegawai',$where)->result();
      $data['listtugas'] = $this->m_penugasanasesor->get_data('pasangan_asesor')->result();
      $data['lowongan'] = $this->m_penugasanasesor->get_data('lowongan_asesi',$where2)->result();
      $data['pasangan'] = $this->m_penugasanasesor->get_data_lowongan('pasangan_asesor')->result();
      $page = 'penugasanasesor/v_detailpenugasanasesor';
      $js = NULL;
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }

    function editpasangan($id)
    {
        $where = array('id_pasangan' =>$id );
        $data['title'] = 'Pasangan';
        $data['pasangan'] = $this->m_penugasanasesor->get_data('pasangan_asesor',$where)->result();
        $data['asesor'] = $this->m_penugasanasesor->get_data_user('asesor')->result();
        $page = 'penugasanasesor/v_editpasangan';
        $js = 'penugasanasesor/v_jspenugasanasesor';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }

    function edit_aksi_pasangan()
    {
        $asesor1 = $this->input->post('asesor1');
        $asesor2 = $this->input->post('asesor2');
        $id_pasangan = $this->input->post('id_lowongan');

        $data  = array(
          'nama_asesor_1' =>$asesor1 ,
          'nama_asesor_2'=>$asesor2
        );
        $where = array(
          'id_pasangan' => $id_pasangan
        );

        $this->m_penugasanasesor->update_data($where,$data,'pasangan_asesor');
        redirect('penugasanasesor/listpenugasanasesor');
    }




    function prosespenugasan($id)
    {
        $data['title'] = 'Penugasan Asesor';
        $where = array('pendaftaran_asesi.id_lowongan'=>$id);
        $cek = $this->m_penugasanasesor->get_data_pendaftaran('pendaftaran_asesi',$where);
        foreach ($cek->result_array() as $d) {
           $data_kesanggupan = array(
             'jekel'=>$d['jenis_kelamin_asesor'],
            'kota_domisili'=>$d['kota_domisili'],
            'kesanggupan'=>$d['kesanggupan_asesi'],
            'nia'=>$d['nia'],
            );
          }

          $data['data_cetak'] = $data_kesanggupan;

          $page = 'penugasanasesor/v_cobakarray';
          $js = 'penugasanasesor/v_jspenugasanasesor';
          $role = $this->session->userdata('id_user');
          echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }
}
?>
