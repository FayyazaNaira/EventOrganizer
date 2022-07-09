<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h3 class="card-title">Data Kegiatan</h3>

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
        <a class="btn-sm btn-primary" href="<?php echo base_url('index.php/kegiatan/insert')?>"><i class="fas fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th><th>Judul</th><th>Kapasitas</th><th>Harga Tiket</th><th>Tanggal</th><th>Narasumber</th><th>Tempat</th><th>Pic</th><th>Foto Flyer</th><th>Jenis Kegiatan</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $nomor=1;
                    foreach($list_kegiatan as $row){
                ?>
                <tr>
                <td class="text-center"><?=$nomor?></td>
                    <td><?=$row->judul?></td>
                    <td><?=$row->kapasitas?></td>
                    <td><?=$row->harga_tiket?></td>
                    <td><?=$row->tanggal?></td>
                    <td><?=$row->narasumber?></td>
                    <td><?=$row->tempat?></td>
                    <td><?=$row->pic?></td>
                    <td><img src="<?php echo base_url().'/dist/img/'.$row->foto_flyer?>" height="100" ></td>
                    <td><?=$row->jenis_kegiatan?></td>
                    <td>
              <a href="<?php echo base_url('index.php/kegiatan/read?id='.$row->id)?>">View </a>|
              <a href="<?php echo base_url('index.php/kegiatan/edit?id='.$row->id)?>"> Edit </a>|
              <a href="<?php echo base_url('index.php/kegiatan/delete?id='.$row->id)?>"onclick="if(!confirm('Anda Yakin Hapus kegiatan ini')){return false}">Delete</a>
            </td>
            <?php $nomor++; }?>

                </tr>
              
            </tbody>
        </table>
        <a class="btn btn-primary" href="<?php echo base_url('index.php/kegiatan/insert')?>" role="button">Create kegiatan</a>
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