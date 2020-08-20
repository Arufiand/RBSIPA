<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url().'dashboard' ?>" class="brand-link">
    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo SITE_NAME; ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('nama');?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <!-- User -->

        <!-- Asesor -->
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url().'asesor' ?>" class="nav-link <?php echo $this->uri->segment(1) == 'asesor' ? 'active': '' ?>">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Asesor
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'asesor/profileasesor' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'profileasesor' ? 'active': '' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile Asesor</p>
                </a>
              </li>
              
            </ul>
        </li>

        <!-- Lowongan Asesi -->
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url().'lowonganasesi' ?>" class="nav-link <?php echo $this->uri->segment(1) == 'lowonganasesi' ? 'active': '' ?>">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>
              Lowongan Asesi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'pendaftaranlowonganasesor/pendaftaranasesor' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'daftarlowongan' ? 'active': '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Lowongan</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="<?php echo base_url().'lowonganasesi/listasesor' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Pemberitahuan Asesi
                  </p>
                </a>
              </li>
            </ul>
        </li>

        <!-- Progres Asesi -->
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url().'customers' ?>" class="nav-link <?php echo $this->uri->segment(1) == 'customers' ? 'active': '' ?>">
            <i class="nav-icon far fa-address-book"></i>
            <p>
              Progres Asesi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validai Asesi</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Penugasan Asesor
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Laporan Asesor
                  </p>
                </a>
              </li>
            </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
