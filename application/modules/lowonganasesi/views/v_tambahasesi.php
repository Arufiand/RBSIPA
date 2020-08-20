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
          <form class="col s12" action="<?php echo base_url(). 'lowonganasesi/tambah_aksi_asesi'; ?>" method="post">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">

                  <label>Judul Lowongan</label>
                  <input type="text" class="form-control" placeholder="Judul Lowongan" name="judul_lowongan">

                  <label>Keterangan Lowongan</label>
                  <input type="text" class="form-control" placeholder="Keterangan Lowongan" name="keterangan_lowongan">

                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Tanggal Kedaluarsa:</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input name="tanggal_kedaluarsa" type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                </div>
              </div>

            </div>
            <td><input type="submit" value="Tambah" class="btn btn-primary "></td>
          </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
</section>
