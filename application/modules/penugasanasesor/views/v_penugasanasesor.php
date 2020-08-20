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
                    <th class="align-middle text-center">Lowongan</th>
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
                      if ($u->status_pegawai!=2) {
                        foreach ($lowongan as $l) {
                          if ($l->status_lowongan==1) {
                   ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no; ?></td>
                      <td class="align-middle"><?php echo $l->judul_lowongan; ?></td>

                      <td class="align-middle text-center"><?php echo $l->keterangan_lowongan; ?></td>
                      <td class="align-middle text-center"><?php echo $l->status_lowongan; ?></td>
                      <?php if ($this->session->userdata('id_user')!=3) {
                        echo "'"?>
                      <td class="align-middle text-center">
                        <?php echo anchor('penugasanasesor/detailpenugasan/'.$l->id_lowongan,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>

                      </td>
                      <?php "'";} ?>
                    </tr>
                  <?php
                    $no++;}}}}else {
                      foreach ($lowongan as $l) {
                        if ($l->status_lowongan==1) {
                  ?>
                  <tr>
                    <td class="align-middle text-center"><?php echo $no; ?></td>
                    <td class="align-middle"><?php echo $l->judul_lowongan; ?></td>

                    <td class="align-middle text-center"><?php echo $l->keterangan_lowongan; ?></td>
                    <td class="align-middle text-center">
                      <?php
                        if ($l->status_lowongan == 2) {
                          echo "Tertutup";
                        }
                        elseif ($l->status_lowongan == 1) {
                          echo "Terbuka";
                        }?>
                    </td>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo "'"?>
                    <td class="align-middle text-center">
                      <?php echo anchor('penugasanasesor/detailpenugasan/'.$l->id_lowongan,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                      
                    </td>
                    <?php "'";} ?>
                  </tr>
                <?php }}}} ?>
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
