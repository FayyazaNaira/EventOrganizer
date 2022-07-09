  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Backend Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan')?>">Kegiatan</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/kegiatan/read')?>">Kegiatan</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card  card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Read Kegiatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr><td>Judul</td><td><?=$kegiatan->judul?></td></tr>
                  <tr><td>Kapasitas</td><td><?=$kegiatan->kapasitas?></td></tr>
                  <tr><td>harga_tiket</td><td><?=$kegiatan->harga_tiket?></td></tr>
                  <tr><td>Tanggal</td><td><?=$kegiatan->tanggal?></td></tr>
                  <tr><td>Narasumber</td><td><?=$kegiatan->narasumber?></td></tr>
                  <tr><td>Tempat</td><td><?=$kegiatan->tempat?></td></tr>
                  <tr><td>Pic</td><td><?=$kegiatan->pic?></td></tr>
                  <tr><td>Jenis ID</td><td><?=$kegiatan->jenis_id?></td></tr>
                  </tbody>
              </table>
            </div>
            <div class="col-sm-4">
            <?php
              $foto_flyer = base_url('/dist/img/'.$kegiatan->foto_flyer);

              $array = get_headers($foto_flyer);
              $string = $array[0];
              if(strpos($string,"200")){
                echo '<img src="'.$foto_flyer.'" width="100%" class="img-fluid" alt="foto"/>';
              }else{
                echo '<img src="'.base_url('/dist/img/boxed-bg.jpg').'" class="img-fluid" alt="foto"/>';
              }
            ?>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->