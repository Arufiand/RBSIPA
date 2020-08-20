<section class="content">
  <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
                            <?php echo anchor('role/tambahrole/','Tambah',array('class' => 'btn btn-primary','data-placement'=>"top",'title'=>"Detail Data")); ?>

                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th class="align-middle text-center">No.</th>
                                <th class="align-middle text-center">Nama Peran</th>
                                <th class="align-middle text-center">Status Peran</th>
                                <th class="align-middle text-center">Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                $no = 1;
                                foreach($role as $u){
                              ?>
                                <tr>
                                  <td class="align-middle text-center"><?php echo $no; ?></td>
                                  <td class="align-middle"><?php echo $u->nama_role; ?></td>
                                  <td class="align-middle text-center">
                                    <?php
                                      if ($u->status_role==1) {
                                        echo "Active";
                                      }
                                      elseif ($u->status_role==2) {
                                        echo "Not-active";
                                      }?>
                                  </td>
                                  <td class="align-middle text-center">
                                    <?php echo anchor('role/detailrole/'.$u->id_role,' ',array('class' => 'btn btn-sm btn-success nav-icon fab fa-sistrix','data-placement'=>"top",'title'=>"Detail Data")); ?>
                                    <?php echo anchor('role/editrole/'.$u->id_role,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                                    <?php echo anchor('role/hapusrole/'.$u->id_role,' ',array('class' => 'btn btn-sm btn-danger nav-icon fas fa-trash-alt','data-placement'=>"top",'title'=>"Hapus Data")); ?>
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
                                <th class="align-middle text-center">Nama Peran</th>
                                <th class="align-middle text-center">Status Peran</th>
                                <th class="align-middle text-center">Aksi</th>
                              </tr>
                              </tfoot>
                            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
</section>
