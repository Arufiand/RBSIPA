<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Asesor</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <form class="col s12" action="<?php echo base_url(). 'role/tambah_aksi_role'; ?>" method="post">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Peran</label>
                  <input type="text" class="form-control" placeholder="Nama Peran" name="nama_role">
                  <label>Status Peran</label>
                  <select class="form-control" name="status_role">
                    <option disabled>-Pilih-</option>
                    <option value="1">Aktif</option>
                    <option value="2">Non-Aktif</option>
                  </select>
                </div>
              </div>
            </div>

            <td><input type="submit" value="Tambah" class="btn btn-primary "></td>
          </form>
        </div>
      </div>
      <!-- /.card -->

    </section>
