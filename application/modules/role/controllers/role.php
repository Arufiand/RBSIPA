<?php
class Role extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
    			redirect(base_url("login/loginform"));
    		}
        $this->load->model('m_role');
    }

    function index()
    {
        $data['title'] = '-User';
        $data['user'] = $this->m_role->get_data('role_user')->result();
        $page = 'role/v_role';
        $js = 'role/v_jsuser';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }
    function listrole()
    {
        $data['title'] = '-User';
        $data['role'] = $this->m_role->get_data('role_user')->result();
        $page = 'role/v_role';
        $js = 'role/v_jsrole';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }
    function detailrole($id)
    {
        $where = array('id_role' =>$id );
        $data['title'] = '-User';
        $data['role'] = $this->m_role->get_data('role_user',$where)->result();
        $page = 'role/v_detaildatarole';
        $js = 'role/v_jsrole';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }
    function tambahrole()
    {
        $data['title'] = '-User';
        $data['role'] = $this->m_role->get_data('role_user')->result();
        $page = 'role/v_tambahdatarole';
        $js = 'role/v_jsrole';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }
    function tambah_aksi_role()
    {
        $nama_role = $this->input->post('nama_role');
        $status_role = $this->input->post('status_role');

        $data  = array(
          'nama_role' =>$nama_role ,
          'status_role'=>$status_role
        );

        $this->m_role->input_data($data,'role_user');
        redirect('role/listrole');
    }

    function editrole($id)
    {
        $where = array('id_role' =>$id );
        $data['title'] = '-User';
        $data['role'] = $this->m_role->get_data('role_user',$where)->result();
        $page = 'role/v_editdatarole';
        $js = 'role/v_jsrole';
        $role = $this->session->userdata('id_user');
        echo modules::run('template/backend/loadview', $data, $page,$js,$role);

    }

    function edit_aksi_role()
    {
        $id_role = $this->input->post('id_role');
        $nama_role = $this->input->post('nama_role');
        $status_role = $this->input->post('status_role');

        $data  = array(
          'nama_role' =>$nama_role ,
          'status_role'=>$status_role
        );
        $where = array(
          'id_role' => $id_role
        );

        $this->m_role->update_data($where,$data,'role_user');
        redirect('role/listrole');
    }

    function hapusrole($id)
    {
        $where = array('id_role' =>$id );
        $this->m_role->hapus_data($where,'role_user');
        redirect('role/listrole');

    }
}
?>
