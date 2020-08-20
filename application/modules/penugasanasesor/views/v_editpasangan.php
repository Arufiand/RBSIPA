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
        <?php foreach ($pasangan as $r) {?>
        <div class="card-body">
          <form class="col s12" action="<?php echo base_url(). 'penugasanasesor/edit_aksi_pasangan'; ?>" method="post">
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Asesor 1</label>
                  <input type="hidden" class="form-control" placeholder="id_lowongan" name="id_lowongan" value="<?php echo $r->id_lowongan; ?>">
                  <select class="form-control" name="asesor1">
                    <?php foreach($asesor as $a){ ?>
                    <option value="<?php echo $a->nama_asesor; ?>"><?php echo $a->nama_asesor; ?></option>
                    <?php } ?>
                  </select>
                  <label>Asesor 2</label>
                  <select class="form-control" name="asesor2">
                    <?php foreach($asesor as $a){ ?>
                    <option value="<?php echo $a->nama_asesor; ?>"><?php echo $a->nama_asesor; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>

            <td><input type="submit" value="Simpan" class="btn btn-primary "></td>
          </form>
        </div>
      <?php } ?>
      </div>
      <!-- /.card -->

    </section>
