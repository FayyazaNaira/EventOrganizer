<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Daftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/daftar')?>">Daftar</a></li>
              <li class="breadcrumb-item disabled"><a href="<?php echo base_url('index.php/daftar/create')?>">Create</a></li>
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
          <h3 class="card-title">Create daftar</h3>

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
        <?php echo form_open('daftar/create')?>
  <div class="form-group row">
    <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal Daftar</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar-times-o"></i>
          </div>
        </div> 
        <input id="tanggal_daftar" name="tanggal_daftar" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alasan" class="col-4 col-form-label">alasan</label> 
    <div class="col-8">
        <input id="alasan" name="alasan" cols="40" rows="5" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">User id</label> 
    <div class="col-8">
    <select id="users_id" name="users_id" class="custom-select">
                <?php foreach($list_users as $users){?>
                <option value="<?=$users->id?>"><?=$users->username?></option>
              <?php } ?>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="kegiatan_id" class="col-4 col-form-label">Kegiatan</label> 
    <div class="col-8">
    <select id="kegiatan_id" name="kegiatan_id" class="custom-select">
                <?php foreach($list_kegiatan as $kegiatan){?>
                <option value="<?=$kegiatan->id?>"><?=$kegiatan->judul?></option>
              <?php } ?>
                </select>
  </div>
  </div>
  <div class="form-group row">
    <label for="kategori_peserta" class="col-4 col-form-label">Kategori peserta</label> 
    <div class="col-8">
    <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
                <?php $value=1; foreach($list_kategoripeserta as $kategoripeserta){?>
                <option value="<?=$value?>"><?=$kategoripeserta->nama?></option>
              <?php $value++; } ?>
                </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_daftar" class="col-4 col-form-label">No Sertifikat</label> 
    <div class="col-8"> 
        <input id="nosertifikat" name="nosertifikat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
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






