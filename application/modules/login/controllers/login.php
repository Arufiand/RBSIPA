<?php
class Login extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function loginform()
    {
        $data['title'] = 'login|index';
        $page = 'login/v_login';
        $js = NULL;
        echo modules::run('template/backend/login', $data, $page,$js);
    }
    function aksi_login()
    {
        $username = $this->input->post('email');
        $password = $this->input->post('pass');

        $where = array(
          'email_user'=>$username,
          'password_user'=>$password
        );

        $cek = $this->m_login->cek_login('user_akses',$where);
        if ($cek>0) {
           foreach ($cek->result_array() as $d) {
             $data_season = array(
              'nama'=>$username,
              'status'=>"login",
              'id_user'=>$d['id_role'],
              'id_asesor'=>$d['id_user']
              );
            }
          $this->session->set_userdata($data_season);
          redirect(base_url("asesor/listasesor"));
        }
        else {
          echo "User atau password salah";
        }
    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect(base_url('login/loginform'));
    }
}
?>
