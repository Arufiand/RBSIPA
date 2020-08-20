<?php
class Template extends MX_Controller
{

  function __construct()
  {
   parent::__construct();

  }

  function loadview($data=NULL,$page = NULL,$js = NULL,$role=NULL)
  {
      $this->load->view('backend/v_header',$data);
      $this->load->view('backend/v_navbar',$data);
      if ($role==3) {
        $this->load->view('backend/v_sidebar_asesor',$data);
      }else {
        $this->load->view('backend/v_sidebar_admin',$data);
      }
      $this->load->view('backend/v_breadcrumb',$data);
      if($page != NULL){
          $this->load->view($page,$data);
      } else {
         $this->load->view('backend/v_content',$data);
      }
      $this->load->view('backend/v_footer',$data);
      $this->load->view('backend/v_jsutama',$data);
      if($js != NULL){
          $this->load->view($js,$data);
      }
      $this->load->view('backend/v_penutup',$data);

  }
  function login($data=NULL,$page = NULL,$js = NULL)
  {
    $this->load->view('login/v_header',$data);
    if($page != NULL){
        $this->load->view($page,$data);
    } else {
       $this->load->view('login/login',$data);
    }
    if($js != NULL){
        $this->load->view($js,$data);
    }
    $this->load->view('login/v_footer',$data);

  }
}
?>
