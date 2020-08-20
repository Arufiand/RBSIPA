<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">pegawai</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <?php foreach($user as $u){ ?>
          <div class="row">
            <div class="col-sm-3">
              <label>Nama</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->nama_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Tempat, Tanggal lahir</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->tempat_lahir_pegawai.', '.$u->tanggal_lahir_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Jenis Kelamin</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->jenis_kelamin_pegawai == 1) {
                    echo "Laki-Laki";
                  }
                  elseif ($u->jenis_kelamin_pegawai == 2) {
                    echo "Perempuan";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Status Pernikahan</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->status_perkawinan_pegawai == 1) {
                    echo "Menikah";
                  }
                  elseif ($u->status_perkawinan_pegawai == 2) {
                    echo "Belum Menikah";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Nomer Telepon</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->nomor_telepon_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Agama</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->agama_pegawai == 1) {
                    echo "Islam";
                  }
                  elseif ($u->agama_pegawai == 2) {
                    echo "Protestan";
                  }
                  elseif ($u->agama_pegawai == 3) {
                    echo "Katolik";
                  }
                  elseif ($u->agama_pegawai == 4) {
                    echo "Budha";
                  }
                  elseif ($u->agama_pegawai == 5) {
                    echo "Hindu";
                  }
                  elseif ($u->agama_pegawai == 6) {
                    echo "Konghucu";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Pekerjaan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->pekerjaan_pegawai; ?></a>
            </div>

            <div class="col-sm-12">
              <label>Alamat Lengkap</label>
            </div>

            <div class="col-sm-3">
              <label>Alamat</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->alamat_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Desa/Kelurahan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->kelurahan_desa_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>RT/RW</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->rt_pegawai.'/'.$u->rw_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Kecamatan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->kecamatan_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Kota</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->kota_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Provinsi</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->provinsi_pegawai; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Status pegawai</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->status_pegawai == 1) {
                    echo "Aktive";
                  }
                  elseif ($u->status_pegawai == 2) {
                    echo "Non-Aktive";
                  }
                ?>
              </a>
            </div>

          <?php } ?>
          <?php echo anchor('user/listuser/','Kembali',array('class' => 'btn btn-sm btn-primary','data-placement'=>"top",'title'=>"Kembali")); ?>
        </div>
      </div>
      <!-- /.card -->

    </section>
