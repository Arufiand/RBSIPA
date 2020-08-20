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
          <?php foreach($role as $u){ ?>
          <div class="row">
            <div class="col-sm-3">
              <label>ID Peran</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->id_role; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Nama Peran</label>
            </div>
            <div class="col-sm-9">
              <a>: <?php echo $u->nama_role; ?></a>
            </div>

            <div class="col-sm-3">
              <label>Status Peran</label>
            </div>

            <div class="col-sm-9">
              <a>:
                <?php
                  if ($u->status_role == 1) {
                    echo "Aktif";
                  }
                  elseif ($u->status_role == 2) {
                    echo "Non-Aktif"; 
                  }
                ?>
              </a>
            </div>



          <?php } ?>
          <?php echo anchor('role/listrole/','Kembali',array('class' => 'btn btn-sm btn-primary','data-placement'=>"top",'title'=>"Kembali")); ?>
        </div>
      </div>
      <!-- /.card -->

    </section>
