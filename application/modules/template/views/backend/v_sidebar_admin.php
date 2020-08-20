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
      <div class="image">
        <img src="<?php echo base_url('assets/backend/AdminLTE/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
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
        <li class="nav-item has-treeview">
         <a href="<?php echo base_url().'user' ?>" class="nav-link
            <?php
              if ($this->uri->segment(1) == 'user' or $this->uri->segment(1) == 'role'or $this->uri->segment(1) == 'daftaruser') {
                echo 'active';
              }
            ?>">
           <i class="nav-icon fas fa-male"></i>
           <p>
             User
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url().'user/listuser' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'listuser' ? 'active': '' ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>List User</p>
               </a>
             </li>
             <li class="nav-item has-treeview">
               <a href="<?php echo base_url().'daftaruser/tambah_user' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'tambah_user' ? 'active': '' ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>
                   Daftar User Baru
                 </p>
               </a>
             </li>
             <li class="nav-item has-treeview">
               <a href="<?php echo base_url().'role/listrole' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'listrole' ? 'active': '' ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>
                   Role
                 </p>
               </a>
             </li>
           </ul>
        </li>

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
                <a href="<?php echo base_url().'asesor/listasesor' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'listasesor' ? 'active': '' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Asesor</p>
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
                <a href="<?php echo base_url().'lowonganasesi/daftarlowongan' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'daftarlowongan' ? 'active': '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Lowongan</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="<?php echo base_url().'lowonganasesi/listasesor' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Asesor Terdaftar
                  </p>
                </a>
              </li>
            </ul>
        </li>

        <!-- Progres Asesi -->
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url().'penugasanasesor' ?>" class="nav-link <?php echo $this->uri->segment(1) == 'penugasanasesor' ? 'active': '' ?>">
            <i class="nav-icon far fa-address-book"></i>
            <p>
              Progres Asesi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="<?php echo base_url().'penugasanasesor/listpenugasanasesor' ?>" class="nav-link <?php echo $this->uri->segment(2) == 'listpenugasanasesor' ? 'active': '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Penugasan Asesor
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
