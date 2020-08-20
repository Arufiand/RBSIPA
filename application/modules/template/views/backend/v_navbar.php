<!-- Navbar -->


<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>


  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!--season login -->
    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <span class="d-none d-md-inline"><?php echo $this->session->userdata('nama');?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <?php echo $this->session->userdata('nama');?>
          </li>
          <li class="user-footer">
            <a href="<?php echo base_url().'asesor/profileasesor' ?>" class="btn btn-default btn-flat">Profile</a>
            <a href="<?php echo base_url(). 'login/logout'; ?>" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>

  </ul>
</nav>
<!-- /.navbar -->
