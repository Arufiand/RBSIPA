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
          <form class="col s12" action="<?php echo base_url(). 'daftaruser/tambah_aksi_user'; ?>" method="post">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">

                  <label>Jenis User</label>
                  <select class="form-control" name="jenis_user">
                    <?php foreach($role as $r){ ?>
                    <option value="<?php echo $r->id_role; ?>"><?php echo $r->nama_role; ?></option>
                    <?php } ?>
                  </select>

                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Email" name="email">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="pass">
                </div>
                <div class="form-group">
                  <label>Nomer Induk User</label>
                  <input type="text" class="form-control" placeholder="Nomer Induk User" name="niu">
                  <label>Nama User</label>
                  <input type="text" class="form-control" placeholder="Nama Asesor" name="nama_user">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input name="tanggal_lahir" type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Jenis Kelamin Asesor</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" value="1">
                    <label class="form-check-label">Laki-Laki</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" value="2">
                    <label class="form-check-label">Perempuan</label>
                  </div>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>No. Telepon</label>
                  <input type="text" class="form-control" placeholder="No. Telepon" name="notelp">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama">
                    <option value="1">Islam</option>
                    <option value="2">Kristen Protestan</option>
                    <option value="3">Katolik</option>
                    <option value="4">Budha</option>
                    <option value="5">Hindu</option>
                    <option value="6">Konghucu</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <label>Alamat</label>
              </div>
              <div class="col-sm-12">
                <!-- textarea -->
                <div class="form-group">
                  <label>Alamat User</label>
                  <textarea class="form-control" rows="3" placeholder="Alamat User" name="alamat"></textarea>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kelurahan/Desa</label>
                  <input type="text" class="form-control" placeholder="Kelurahan/Desa" name="desa">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" class="form-control" placeholder="Kota" name="kota">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" class="form-control" placeholder="Provinsi" name="provinsi">
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
