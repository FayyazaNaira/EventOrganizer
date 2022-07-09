<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/kegiatan')?>">Kegiatan</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/kegiatan/update')?>">Update</a></li>
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
          <h3 class="card-title">Kelola Kegiatan</h3>

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
            <?php $hidden = ['idedit'=>$kegiatan_update->id];?>
        <?php echo form_open_multipart('kegiatan/update','',$hidden)?>
        <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul</label> 
    <div class="col-8">
        <input id="judul" value="<?=$kegiatan_update->judul?>"  name="judul" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="kapasitas" class="col-4 col-form-label">Kapasitas</label> 
    <div class="col-8">
        <input id="kapasitas" name="kapasitas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
        <input id="harga_tiket" name="harga_tiket" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
        <input id="tanggal" name="tanggal" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="narasumber" class="col-4 col-form-label">Narasumber</label> 
    <div class="col-8">
        <input id="narasumber" name="narasumber" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="tempat" name="tempat" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pic" class="col-4 col-form-label">Pic</label> 
    <div class="col-8">
        <input id="pic" name="pic" type="text" value="<?=$kegiatan_update->pic?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
            <label for="foto_flyer" class="col-4 col-form-label">Foto Flyer</label> 
            <div class="col-8">
            <input id="foto_flyer" class="form-control" type="file" name="userfile[]" size="20" multiple required>
            </div>
          </div>
  <div class="form-group row">
    <label for="jenis_id" class="col-4 col-form-label">Jenis ID</label> 
    <div class="col-8">
              <select id="jenis_id" name="jenis_id" value="<?=$kegiatan_update->jenis_id?>" class="custom-select">
              <?php $value=1; foreach($list_jeniskegiatan as $jeniskegiatan){?>
                <option value="<?=$value?>"><?=$jeniskegiatan->nama?></option>
              <?php $value++; } ?>
              </select>
            </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close()?>
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






