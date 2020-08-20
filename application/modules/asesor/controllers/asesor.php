<?php
class Asesor extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_asesor');
         //load model crud_model
    }

    function listasesor()
    {
        $data['title'] = 'List Asesor';
        $data['asesor'] = $this->m_asesor->get_data_user('asesor')->result();
        $page = 'asesor/list asesor/v_listasesor';
        $js = 'asesor/list asesor/v_jslistasesor';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function profileasesor()
    {
        $role = $this->session->userdata('id_user');
        $where =array('user_akses.id_user'=>$this->session->userdata('id_asesor'));
        $data['title'] = 'List Asesor';
        $data['asesor'] = $this->m_asesor->get_data_user('asesor',$where)->result();
        $page = 'asesor/list asesor/v_profileasesor';
        $js = 'asesor/list asesor/v_jslistasesor';
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
    function status_asesor($nia)
    {
      $where =array('nia'=>$nia);

      if ($this->m_asesor->get_data_status_asesor($where)->result() == 1) {
        $data_update = array('status_asesor' => 2 );
        $data['asesor'] = $this->m_asesor->edit_asesor($where,'asesor',$data_update);
      }
      else{
        $data_update = array('status_asesor' => 1 );
        $data['asesor'] = $this->m_asesor->edit_asesor($where,'asesor',$data_update);
      }
      redirect('user/listuser');
    }

    function detailasesor($id)
    {
      $where =array('user_akses.id_user'=>$id);
      $data['title'] = 'User';
      $data['user'] = $this->m_asesor->get_data_user('asesor',$where)->result();
      $page = 'asesor/list asesor/v_detail_user_asesor';
      $js = 'asesor/list asesor/v_jslistasesor';
      $role = $this->session->userdata('id_user');
      echo modules::run('template/backend/loadview', $data, $page,$js,$role);
    }
}
?>
