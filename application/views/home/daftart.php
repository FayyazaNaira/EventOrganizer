<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FasKes Depok | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>"> 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1 text-primary"><b>Masterplan</b>Agency</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar Kegiatan</p>
      <?php ?>
          <?php echo form_open('daftar/daftart')?>
          <input type="hidden" name="users_id" value="<?php echo $this->session->userdata('ID')?>">
          <input type="hidden" name="kegiatan_id" value="<?php echo $this->input->get('idkegiatan')?>">
          <input type="hidden" name="kategori_peserta_id" value="<?php echo $this->input->get('idkategoripeserta')?>">
  <div class="form-group row">
    <label for="isi" class="col-4 col-form-label">Alasan</label> 
    <div class="col-8">
      <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="tanggal_daftar" class="col-4 col-form-label">No Sertifikat</label> 
    <div class="col-8"> 
        <input id="nosertifikat" name="nosertifikat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategoripeserta" class="col-4 col-form-label">Kategori Peserta</label> 
    <div class="col-8">
      <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
       <?php foreach($list_kategoripeserta as $kategori){?>
      <option value="<?php echo $kategori->id?>"><?php echo $kategori->nama?> </option>
      <?php } ?>
    </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js')?>"></script>
</body>
</html>
