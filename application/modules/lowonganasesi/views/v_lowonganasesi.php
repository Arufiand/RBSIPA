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

                <?php echo anchor('lowonganasesi/tambah_asesi/','Tambah',array('class' => 'btn btn-primary','data-placement'=>"top",'title'=>"Detail Data")); ?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Judul Lowongan</th>
                    <th class="align-middle text-center">Keterangan Lowongan</th>
                    <th class="align-middle text-center">Tanggal Posting</th>
                    <th class="align-middle text-center">Tanggal tanggal_kadaluarsa</th>
                    <th class="align-middle text-center">Status Lowongan</th>
                    <th class="align-middle text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach($asesi as $u){
                      if ($this->session->userdata('id_user')==3) {
                      if ($u->status_lowongan!=2) {
                  ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no; ?></td>
                      <td class="align-middle"><?php echo $u->judul_lowongan; ?></td>
                      <td class="align-middle text-center"><?php echo $u->keterangan_lowongan; ?></td>
                      <td class="align-middle text-center"><?php echo $u->tanggal_posting; ?></td>
                      <td class="align-middle text-center"><?php echo $u->tanggal_kadaluarsa; ?></td>
                      <td class="align-middle text-center">
                        <?php
                          if ($u->status_lowongan==1) {
                            echo "Terbuka";
                          }
                          elseif ($u->status_lowongan==2) {
                            echo "Tertutup";
                          }?>
                      </td>
                      <?php if ($this->session->userdata('id_user')!=3) {
                        echo "'"?>
                      <td class="align-middle text-center">
                        <?php echo anchor('lowonganasesi/detailasesi/'.$u->id_lowongan,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                        <?php echo anchor('lowonganasesi/editasesi/'.$u->id_lowongan,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                        <?php echo anchor('lowonganasesi/hapusasesi/'.$u->id_lowongan,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
                      </td>
                      <?php "'";}
                      else {
                        echo "'"?>
                        <td class="align-middle text-center">
                          <?php echo anchor('lowonganasesi/pilihasesi/','Pilih',array('class' => 'btn btn-primary','data-placement'=>"top",'title'=>"Detail Data")); ?>
                        </td>
                      <?php "'";} ?>
                    </tr>
                  <?php
                    $no++;
                  }}else {?>
                  <tr>
                    <td class="align-middle text-center"><?php echo $no; ?></td>
                    <td class="align-middle"><?php echo $u->judul_lowongan; ?></td>
                    <td class="align-middle text-center"><?php echo $u->keterangan_lowongan; ?></td>
                    <td class="align-middle text-center"><?php echo $u->tanggal_posting; ?></td>
                    <td class="align-middle text-center"><?php echo $u->tanggal_kadaluarsa; ?></td>
                    <td class="align-middle text-center">
                      <?php
                        if ($u->status_lowongan==1) {
                          echo "Terbuka";
                        }
                        elseif ($u->status_lowongan==2) {
                          echo "Tertutup";
                        }?>
                    </td>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo "'"?>
                    <td class="align-middle text-center">
                      <?php echo anchor('lowonganasesi/detailasesi/'.$u->id_lowongan,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                      <?php echo anchor('lowonganasesi/editasesi/'.$u->id_lowongan,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                      <?php echo anchor('lowonganasesi/hapusasesi/'.$u->id_lowongan,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
                    </td>
                    <?php "'";}
                    else {
                      echo "'"?>
                      <td class="align-middle text-center">
                        <?php echo anchor('lowonganasesi/pilihasesi/','Pilih',array('class' => 'btn btn-primary','data-placement'=>"top",'title'=>"Detail Data")); ?>
                      </td>
                    <?php "'";} ?>
                  </tr>
                <?php }}?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Judul Lowongan</th>
                    <th class="align-middle text-center">Keterangan Lowongan</th>
                    <th class="align-middle text-center">Tanggal Posting</th>
                    <th class="align-middle text-center">Tanggal tanggal_kadaluarsa</th>
                    <th class="align-middle text-center">Status Lowongan</th>
                    <th class="align-middle text-center">Aksi</th>
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
