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
          <form class="col s12" action="<?php echo base_url(). 'pendaftaranlowonganasesor/tambah_aksi_daftar'; ?>" method="post">
            <div class="row">


              <div class="col-sm-12">
                <div class="form-group">
                  <label>Lowongan</label>
                  <select class="form-control" name="lowongan">
                    <?php foreach($lowongan as $r){ ?>
                    <option value="<?php echo $r->id_lowongan; ?>"><?php echo $r->judul_lowongan; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Alamat Domisili</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="adomisili">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kelurahan/Desa Domisili</label>
                  <?php foreach ($user as $u) {?>
                  <input type="hidden" class="form-control" placeholder="Alamat" name="nia" value="<?php echo $u->nia; ?>">
                <?php } ?>
                  <input type="text" class="form-control" placeholder="Kelurahan/Desa Domisili" name="desa">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kecamatan Domisili</label>
                  <input type="text" class="form-control" placeholder="KEcamatan Domisili" name="kecamatan">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kota Domisili</label>
                  <input type="text" class="form-control" placeholder="Kota Domisili" name="kota">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" class="form-control" placeholder="Provinsi Domisili" name="provinsi">
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Kesanggupan Asesi</label>
                  <input type="text" class="form-control" placeholder="Kesanggupan Asesi" name="kesanggupan">
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Keterangan Asesi</label>
                  <input type="text" class="form-control" placeholder="Keterangan Asesi" name="ketasesi">
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
