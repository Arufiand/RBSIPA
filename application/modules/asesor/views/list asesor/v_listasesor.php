<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">

                <button type="button" class="btn-lg btn-primary" data-toggle="modal" data-target="#modal-tambah">
                    Tambah
                </button>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Nama Asesor</th>
                    <th class="align-middle text-center">Tempat Tanggal Lahir</th>
                    <th class="align-middle text-center">Status User</th>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo '<th class="align-middle text-center">Aksi</th>';}
                    ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach($asesor as $u){
                      if ($this->session->userdata('id_user')==3) {
                      if ($u->status_asesor!=2) {
                  ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no; ?></td>
                      <td class="align-middle"><?php echo $u->nama_asesor; ?></td>

                      <td class="align-middle text-center"><?php echo $u->tempat_lahir_asesor.', '.$u->tanggal_lahir_asesor; ?></td>
                      <td class="align-middle text-center">
                        <?php
                          if ($u->status_asesor == 2) {
                            echo "Non-Aktif";
                          }
                          elseif ($u->status_asesor == 1) {
                            echo "Aktif";
                          }?>
                      </td>
                      <?php if ($this->session->userdata('id_user')!=3) {
                        echo "'"?>
                      <td class="align-middle text-center">
                        <?php echo anchor('asesor/detailasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                        <?php echo anchor('user/edituserasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                        <?php echo anchor('user/hapususerasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
                      </td>
                      <?php "'";} ?>
                    </tr>
                  <?php
                    $no++;}}else {
                  ?>
                  <tr>
                    <td class="align-middle text-center"><?php echo $no; ?></td>
                    <td class="align-middle"><?php echo $u->nama_asesor; ?></td>

                    <td class="align-middle text-center"><?php echo $u->tempat_lahir_asesor.', '.$u->tanggal_lahir_asesor; ?></td>
                    <td class="align-middle text-center">
                      <?php
                        if ($u->status_asesor == 2) {
                          echo "Non-Aktif";
                        }
                        elseif ($u->status_asesor == 1) {
                          echo "Aktif";
                        }?>
                    </td>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo "'"?>
                    <td class="align-middle text-center">
                      <?php echo anchor('asesor/detailasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                      <?php echo anchor('user/edituserasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                      <?php echo anchor('user/hapususerasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
                    </td>
                    <?php "'";} ?>
                  </tr>
                <?php }} ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Nama Asesor</th>
                    <th class="align-middle text-center">Tempat Tanggal Lahir</th>
                    <th class="align-middle text-center">Status User</th>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo '<th class="align-middle text-center">Aksi</th>';}
                    ?>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->


    </section>
