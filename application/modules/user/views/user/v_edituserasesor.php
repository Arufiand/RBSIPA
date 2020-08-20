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
          <?php foreach($user as $u){ ?>
          <div class="card-body">
          <form class="col s12" action="<?php echo base_url(). 'user/edit_aksi_user_asesor'; ?>" method="post">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">

                  <label>Jenis User</label>
                  <select class="form-control" name="jenis_user">
                    <?php foreach($role as $r){
                      if ($u->id_role==$r->id_role) {?>
                    <option value="<?php echo $r->id_role; ?>" selected><?php echo $r->nama_role; ?></option>
                    <?php } ?>
                    <option value="<?php echo $r->id_role; ?>"><?php echo $r->nama_role; ?></option>
                    <?php } ?>
                  </select>

                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $u->email_user; ?>">
                  <input type="hidden" class="form-control" placeholder="" name="id_user" value="<?php echo $u->id_user; ?>">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="pass" value="<?php echo $u->password_user; ?>">
                  <label>Status User</label>
                  <select class="form-control" name="status_user">
                    <?php if ($u->status_user==1) {?>
                      <option value="1" selected>Aktif</option>
                      <option value="2">Non-Aktif</option>
                    <?php }else {
                    ?>
                    <option value="1">Aktif</option>
                    <option value="2" selected>Non-Aktif</option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nomer Induk User</label>
                  <input type="text" class="form-control" placeholder="Nomer Induk User" name="niu" value="<?php echo $u->nia; ?>">
                  <label>Nama User</label>
                  <input type="text" class="form-control" placeholder="Nama Asesor" name="nama_user" value="<?php echo $u->nama_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $u->tempat_lahir_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input name="tanggal_lahir" value="<?php echo $u->tanggal_lahir_asesor; ?>" type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Jenis Kelamin Asesor</label>
                  <?php if ($u->jenis_kelamin_asesor==1) {?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" value="1" checked>
                    <label class="form-check-label">Laki-Laki</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" value="2">
                    <label class="form-check-label">Perempuan</label>
                  </div>
                <?php }elseif ($u->jenis_kelamin_asesor==2){?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" value="1">
                    <label class="form-check-label">Laki-Laki</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" value="2" checked>
                    <label class="form-check-label">Perempuan</label>
                  </div>
                <?php } ?>
                </div>


              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>No. Telepon</label>
                  <input type="text" class="form-control" placeholder="No. Telepon" name="notelp" value="<?php echo $u->nomor_telepon_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $u->pekerjaan_asesor; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama">
                    <?php if ($u->agama_asesor==1) {?>
                      <option value="1" selected>Islam</option>
                      <option value="2">Kristen Protestan</option>
                      <option value="3">Katolik</option>
                      <option value="4">Budha</option>
                      <option value="5">Hindu</option>
                      <option value="6">Konghucu</option>
                    <?php }elseif ($u->agama_asesor==2){?>
                      <option value="1">Islam</option>
                      <option value="2"selected>Kristen Protestan</option>
                      <option value="3">Katolik</option>
                      <option value="4">Budha</option>
                      <option value="5">Hindu</option>
                      <option value="6">Konghucu</option>
                    <?php }elseif ($u->agama_asesor==3){?>
                      <option value="1">Islam</option>
                      <option value="2">Kristen Protestan</option>
                      <option value="3" selected>Katolik</option>
                      <option value="4">Budha</option>
                      <option value="5">Hindu</option>
                      <option value="6">Konghucu</option>
                    <?php }elseif ($u->agama_asesor==4){?>
                      <option value="1">Islam</option>
                      <option value="2">Kristen Protestan</option>
                      <option value="3">Katolik</option>
                      <option value="4" selected>Budha</option>
                      <option value="5">Hindu</option>
                      <option value="6">Konghucu</option>
                    <?php }elseif ($u->agama_asesor==5){?>
                      <option value="1">Islam</option>
                      <option value="2">Kristen Protestan</option>
                      <option value="3">Katolik</option>
                      <option value="4">Budha</option>
                      <option value="5" selected>Hindu</option>
                      <option value="6">Konghucu</option>
                    <?php }elseif ($u->agama_asesor==6){?>
                      <option value="1">Islam</option>
                      <option value="2">Kristen Protestan</option>
                      <option value="3">Katolik</option>
                      <option value="4">Budha</option>
                      <option value="5">Hindu</option>
                      <option value="6" selected>Konghucu</option>
                    <?php } ?>
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
                  <textarea class="form-control" rows="3" placeholder="Alamat User" name="alamat"><?php echo $u->alamat_asessor; ?></textarea>
                </div>
              </div>

              
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kelurahan/Desa</label>
                  <input type="text" class="form-control" placeholder="Kelurahan/Desa" name="desa" value="<?php echo $u->kelurahan_desa_asesor; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?php echo $u->kecamatan_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" class="form-control" placeholder="Kota" name="kota" value="<?php echo $u->kota_asesor; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" class="form-control" placeholder="Provinsi" name="provinsi" value="<?php echo $u->provinsi_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Status Asesor</label>
                  <select class="form-control" name="status_asesor">
                    <?php if ($u->status_asesor==1) {?>
                      <option value="1" selected>Aktif</option>
                      <option value="2" >Non-Aktif</option>
                    <?php }else {
                    ?>
                      <option value="1">Aktif</option>
                      <option value="2" selected>Non-Aktif</option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tipe Asesor</label>
                  <select class="form-control" name="tipe_asesor">
                    <?php if ($u->tipe_asesor==1) {?>
                      <option value="1" selected>Asesor SM</option>
                      <option value="2" >Asesor PT</option>
                    <?php }else {
                    ?>
                    <option value="1">Asesor SM</option>
                    <option value="2" selected>Asesor PT</option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Rumpun Asesor</label>
                  <select class="form-control" name="rumpun_asesor">
                    <?php if ($u->rumpun_asesor==1) {?>
                      <option value="1" selected>PAUD</option>
                      <option value="2" >PKBM</option>
                    <?php }else {
                    ?>
                    <option value="1">PAUD</option>
                    <option value="2" selected>PKBM</option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Jumlah Visitasi</label>
                  <input type="text" class="form-control" placeholder="Provinsi" name="jumlah_visitasi" value="<?php echo $u->jumlah_visitasi_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Jumlah Validasi</label>
                  <input type="text" class="form-control" placeholder="Provinsi" name="jumlah_validasi" value="<?php echo $u->jumlah_validasi_asesor; ?>">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Rangking Asesor</label>
                  <input type="text" class="form-control" placeholder="Provinsi" name="ranking" value="<?php echo $u->ranking_keseluruhan_asesor; ?>">
                </div>
              </div>

            </div>
            <td><input type="submit" value="Simpan" class="btn btn-primary "></td>
          </form>
          </div>
          <?php } ?>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
</section>
