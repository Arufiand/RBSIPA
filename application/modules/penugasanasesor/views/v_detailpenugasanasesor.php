<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <?php
                  $no = 1;
                  foreach($lowongan as $l){
                  ?>
                  <div class="col-sm-3">
                    <label>Judul Lowongan</label>
                  </div>
                  <div class="col-sm-9">
                    <a>: <?php echo $l->judul_lowongan; ?></a>
                  </div>
                  <div class="col-sm-3">
                    <label>Keterangan Lowongan</label>
                  </div>
                  <div class="col-sm-9">
                    <a>: <?php echo $l->keterangan_lowongan; ?></a>
                  </div>
                  <div class="col-sm-3">
                    <label>Tanggal Posting Lowongan</label>
                  </div>
                  <div class="col-sm-9">
                    <a>: <?php echo $l->tanggal_posting; ?></a>
                  </div>
                  <div class="col-sm-3">
                    <label>Tanggal Kedaluarsa Lowongan</label>
                  </div>
                  <div class="col-sm-9">
                    <a>: <?php echo $l->tanggal_kadaluarsa; ?></a>
                  </div>
                  <div class="col-sm-3">
                    <label>Batas Asesor</label>
                  </div>
                  <div class="col-sm-9">
                    <a>: <?php echo $l->batas_asesor; ?></a>
                  </div>
                <?php } ?>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Asesor 1</th>
                    <th class="align-middle text-center">Asesor 2</th>
                    <th class="align-middle text-center">Tanggal PEmbentukan Pasangan</th>
                    <th class="align-middle text-center">Kesanggupan</th>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo '<th class="align-middle text-center">Aksi</th>';}
                    ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach($asesor as $u){
                      if ($this->session->userdata('id_user')==3) {
                      if ($u->status_pegawai!=2) {
                        foreach ($pasangan as $p) {
                          if ($l->status_lowongan==1) {
                   ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no; ?></td>
                      <td class="align-middle"><?php echo $p->nama_asesor_1; ?></td>
                      <td class="align-middle text-center"><?php echo $p->nama_asesor_2; ?></td>
                      <td class="align-middle text-center"><?php echo $p->tanggal_pa_dibuat; ?></td>
                      <td class="align-middle text-center"><?php echo $p->jumlah_kesanggupan; ?></td>
                      <?php if ($this->session->userdata('id_user')!=3) {
                        echo "'"?>
                      <td class="align-middle text-center">
                        <?php echo anchor('penugasanasesor/editpasangan/'.$p->id_pasangan,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                      </td>
                      <?php "'";} ?>
                    </tr>
                  <?php
                    $no++;}}}}else {
                      foreach ($pasangan as $p) {
                        if ($l->status_lowongan==1) {
                  ?>
                  <tr>
                    <td class="align-middle text-center"><?php echo $no; ?></td>
                    <td class="align-middle"><?php echo $p->nama_asesor_1; ?></td>
                    <td class="align-middle text-center"><?php echo $p->nama_asesor_2; ?></td>
                    <td class="align-middle text-center"><?php echo $p->tanggal_pa_dibuat; ?></td>
                    <td class="align-middle text-center"><?php echo $p->jumlah_kesanggupan; ?></td>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo "'"?>
                    <td class="align-middle text-center">
                      <?php echo anchor('penugasanasesor/editpasangan/'.$p->id_pasangan,' ',array('class' => 'btn btn-sm btn-warning nav-icon fas fa-edit','data-placement'=>"top",'title'=>"Edit Data")); ?>
                    </td>
                    <?php "'";} ?>
                  </tr>
                <?php }}}} ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="align-middle text-center">No.</th>
                    <th class="align-middle text-center">Asesor 1</th>
                    <th class="align-middle text-center">Asesor 2</th>
                    <th class="align-middle text-center">Tanggal PEmbentukan Pasangan</th>
                    <th class="align-middle text-center">Kesanggupan</th>
                    <?php if ($this->session->userdata('id_user')!=3) {
                      echo '<th class="align-middle text-center">Aksi</th>';}
                    ?>
                  </tr>
                  </tfoot>
                </table>

                <div class="row">
                  <div class="col-sm-12">
                    &nbsp;
                  </div>
                  <div class="col-sm-12">
                    <?php echo anchor('penugasanasesor/listpenugasanasesor/','Kembali',array('class' => 'btn btn-sm btn-primary','data-placement'=>"top",'title'=>"Kembali")); ?>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->


    </section>
