<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Daftar </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/insert')?>">Daftar</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kelola Data Pendaftaran Kegiatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <a class="btn btn-primary" href="<?php echo base_url('index.php/daftar/insert')?>" role="button">Create</a>
        <br><br><br>
        
        <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="bg-teal">
              <tr>
              <th>No</th><th>Tanggal Daftar</th><th>Alasan</th><th>Nama User</th><th>Judul Kegiatan</th><th>Kategori Peserta</th><th>nosertifikat</th><th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
                     $nomor=1;
                foreach($list_daftar as $daftar){
                ?>
                <tr>
                   
                    <td><?=$nomor?></td>
                    <td><?=$daftar->tanggal_daftar?></td>
                    <td><?=$daftar->alasan?></td>
                    <td><?=$daftar->users_id?></td>
                    <td><?=$daftar->kegiatan_id?></td>
                    <td><?=$daftar->kategori_peserta_id?></td>
                    <td><?=$daftar->nosertifikat?></td>
                <td class="text-center">
                  <div class="btn-group btn-group-sm">
                    <a href="<?php echo base_url('index.php/daftar/read?id='.$daftar->id)?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo base_url('index.php/daftar/update?id='.$daftar->id)?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="<?php echo base_url('index.php/daftar/delete?id='.$daftar->id)?>" class="btn btn-danger" onclick="if(!confirm('Anda Yakin Akan Menghapus data pendaftar Ini?')) {return false}"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              <?php $nomor++; } ?>
              </tr>

            </tbody>
          </table>
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="bg-teal">
            <thead>
                <tr>
                    <th>No</th><th>Tanggal Daftar</th><th>Alasan</th><th>Nama User</th><th>Judul Kegiatan</th><th>Kategori Peserta</th><th>nosertifikat</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     $nomor=1;
                foreach($list_daftar as $daftar){
                ?>
                <tr>
                   
                    <td><?=$nomor?></td>
                    <td><?=$daftar->tanggal_daftar?></td>
                    <td><?=$daftar->alasan?></td>
                    <td><?=$daftar->users_id?></td>
                    <td><?=$daftar->kegiatan_id?></td>
                    <td><?=$daftar->kategori_peserta_id?></td>
                    <td><?=$daftar->nosertifikat?></td>
                    <td>
              <a href="<?php echo base_url('index.php/daftar/read?id='.$daftar->id)?>">View </a>|
              <a href="<?php echo base_url('index.php/daftar/update?id='.$daftar->id)?>"> Edit </a>|
              <a href="<?php echo base_url('index.php/daftar/delete?id='.$daftar->id)?>"onclick="if(!confirm('Anda Yakin Hapus daftar <?=$daftar->id?>?')){return false}">Delete</a>
            </td>
                </tr>
                <?php
                $nomor++;
                    }
                ?>
            </tbody>
        </table>
        </div>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->