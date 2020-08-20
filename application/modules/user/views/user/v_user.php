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

                <?php echo anchor('daftaruser/tambah_user/','Tambah',array('class' => 'btn btn-primary','data-placement'=>"top",'title'=>"Detail Data")); ?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Nama User</th>
                    <th class="align-middle text-center">Peran</th>
                    <th class="align-middle text-center">Status User</th>
                    <th class="align-middle text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach($user as $u){
                  ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no; ?></td>
                      <td class="align-middle"><?php echo $u->nama_asesor; ?></td>
                      <td class="align-middle text-center"><?php echo $u->nama_role; ?></td>
                      <td class="align-middle text-center">
                        <?php
                          if ($u->status_user==1) {
                            echo "Active";
                          }
                          elseif ($u->status_user==2) {
                            echo "Not-active";
                          }?>
                      </td>
                      <td class="align-middle text-center">
                        <?php echo anchor('user/detailuserasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                        <?php echo anchor('user/edituserasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                        <?php echo anchor('user/hapususerasesor/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
                      </td>
                    </tr>
                  <?php
                    $no++;
                    }
                  ?>

                  <?php
                    foreach($user2 as $u){
                  ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no; ?></td>
                      <td class="align-middle"><?php echo $u->nama_pegawai; ?></td>
                      <td class="align-middle text-center"><?php echo $u->nama_role; ?></td>
                      <td class="align-middle text-center">
                        <?php
                          if ($u->status_user==1) {
                            echo "Active";
                          }
                          elseif ($u->status_user==2) {
                            echo "Not-active";
                          }?>
                      </td>
                      <td class="align-middle text-center">
                        <?php echo anchor('user/detailuserpegawai/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                        <?php echo anchor('user/edituserpegawai/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                        <?php echo anchor('user/hapususerpegawai/'.$u->id_user,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
                      </td>
                    </tr>
                  <?php
                    $no++;
                    }
                  ?>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Nama User</th>
                    <th class="align-middle text-center">Peran</th>
                    <th class="align-middle text-center">Status User</th>
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
