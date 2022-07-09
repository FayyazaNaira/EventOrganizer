<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
          <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar')?>">Daftar</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/daftar/read')?>">Read</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Data Pendaftaran</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body" >

        <div class="row mb-2">
          <table class="table table-striped">
          <tbody>
            <tr><td>tanggal_daftar</td><td><?=$daftar->tanggal_daftar?></td></tr>
            <tr><td>alasan</td><td><?=$daftar->alasan?></td></tr>
            <tr><td>users_id</td><td><?=$daftar->users_id?></td></tr>
            <tr><td>kegiatan_id</td><td><?=$daftar->kegiatan_id?></td></tr>
            <tr><td>kategori_peserta_id</td><td><?=$daftar->kategori_peserta_id?></td></tr>
            <tr><td>nosertifikat</td><td><?=$daftar->nosertifikat?></td></tr>
          </tbody>
          </table>
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
