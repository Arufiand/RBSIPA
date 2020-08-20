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
          <?php foreach($asesor as $u){ ?>
          <div class="row">
            <div class="col-sm-3">
              <label>Nama</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->nama_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Tempat, Tanggal lahir</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->tempat_lahir_asesor.', '.$u->tanggal_lahir_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Jenis Kelamin</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->jenis_kelamin_asesor == 1) {
                    echo "Laki-Laki";
                  }
                  elseif ($u->jenis_kelamin_asesor == 2) {
                    echo "Perempuan";
                  }
                ?>
              </a>
            </div>



            <div class="col-sm-3">
              <label>Nomer Telepon</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->nomor_telepon_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Agama</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->agama_asesor == 1) {
                    echo "Islam";
                  }
                  elseif ($u->agama_asesor == 2) {
                    echo "Protestan";
                  }
                  elseif ($u->agama_asesor == 3) {
                    echo "Katolik";
                  }
                  elseif ($u->agama_asesor == 4) {
                    echo "Budha";
                  }
                  elseif ($u->agama_asesor == 5) {
                    echo "Hindu";
                  }
                  elseif ($u->agama_asesor == 6) {
                    echo "Konghucu";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Pekerjaan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->pekerjaan_asesor; ?></a>
            </div>

            <div class="col-sm-12">
              <label>Alamat Lengkap</label>
            </div>

            <div class="col-sm-3">
              <label>Alamat</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->alamat_asessor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Desa/Kelurahan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->kelurahan_desa_asesor; ?></a>
            </div>

            

            <div class="col-sm-3">
              <label>Kecamatan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->kecamatan_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Kota</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->kota_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Provinsi</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->provinsi_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Status Asesor</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->status_asesor == 1) {
                    echo "Aktive";
                  }
                  elseif ($u->status_asesor == 0) {
                    echo "Non-Aktive";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Tipe Asesor</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->tipe_asesor == 1) {
                    echo "Asesor BAN SM";
                  }
                  elseif ($u->tipe_asesor == 2) {
                    echo "Asesor BAN PT";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Rumpun Asesor</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->rumpun_asesor == 1) {
                    echo "PAUD";
                  }
                  elseif ($u->rumpun_asesor == 2) {
                    echo "PKBM";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Jumlah Visitasi</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->jumlah_visitasi_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Jumlah Validasi</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->jumlah_validasi_asesor; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Rangkin Asesor</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->ranking_keseluruhan_asesor; ?></a>
            </div>


          <?php } ?>
          <?php echo anchor('asesor/listasesor/','Kembali',array('class' => 'btn btn-sm btn-primary','data-placement'=>"top",'title'=>"Kembali")); ?>
        </div>
      </div>
      <!-- /.card -->

    </section>
