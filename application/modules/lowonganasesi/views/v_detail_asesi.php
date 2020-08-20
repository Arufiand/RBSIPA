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
          <?php foreach($user as $u){ ?>
          <div class="row">

            <div class="col-sm-3">
              <label>Status Asesi</label>
            </div>
            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->status_lowongan == 1) {
                    echo "Terbuka";
                  }
                  elseif ($u->status_lowongan == 2) {
                    echo "Tertutup";
                  }
                ?>
              </a>
            </div>

            <div class="col-sm-3">
              <label>Judul Lowongan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->judul_lowongan; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Keterangan Lowongan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->keterangan_lowongan; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Tanggal Posting Lowongan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->tanggal_posting; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Tanggal Kadaluarsa Lowongan</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->tanggal_kadaluarsa; ?></a>
            </div>

            <div class="col-sm-12">
              <label>Asesor :</label>
            </div>
            <?php
              $no=1;
              foreach($user2 as $u2){
            ?>
            <div class="col-sm-12">
              <a><?php echo $no.'. '.$u2->nama_asesor; $no++?></a>
            </div>
          <?php } ?>
          <?php } ?>
          <?php echo anchor('lowonganasesi/daftarlowongan/','Kembali',array('class' => 'btn btn-sm btn-primary','data-placement'=>"top",'title'=>"Kembali")); ?>
        </div>
      </div>
      <!-- /.card -->

    </section>
