
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SS ID | login </title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/img/favicon.ico">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>adminlte/dist/css/adminlte.min.css">

  <style>
    .loginpage-transparent {
        min-height: 100vh;
        background: linear-gradient(to right, rgba(56, 154, 255, 0.71), rgba(144, 0, 149, 0.71)), url("<?= base_url('assets') ?>/img/bg_1.jpg") no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
    }
    .logincard-transparent {
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        border-radius: 20px;
        padding: 20px 10px 30px 10px;
        color: lightgray;
    }
  </style>
</head>

<body class="hold-transition login-page loginpage-transparent">
<div class="login-box logincard-transparent" >

  <!-- /.login-logo -->
  <div class="" >
    <div class="card-header text-center">
    
      <a href="<?= base_url('home') ?>" class="h1"><img src="<?= base_url('assets') ?>/img/logo-gmahk-white.png" width="80px" alt="SiGMAHK Piekul" class="brand-image img-circle elevation-1" style="opacity: .8"><br>Si<b>GMAHK</b></a><br>
      <span class="login-box-msg">Sistem Informas</span>
    </div>
    <div class="card-body">
      <!-- <?php
        if (session()->getFlashdata('pesan')) {
          echo '';
          echo session()->getFlashdata('pesan');
          echo '';
        }
        if (session()->getFlashdata('gagal')) {
          echo '<div class="alert alert-danger">';
          echo session()->getFlashdata('gagal');
          echo '</div>';
        }
        if (session()->getFlashdata('logout')) {
          echo '<div class="alert alert-success">';
          echo session()->getFlashdata('logout');
          echo '</div>';
        }
      ?> -->
      
    <?php echo form_open('login/ceklogin') ?>
        <span><?= $validation->hasError('email') ? $validation->getError('email') : '' ?></span>
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email" style="border-radius: 20px; border: 2px solid rgba(255, 255, 255, .2); height:45px; background: transparent; background-color:rgba(255, 255, 255, 0.05);">
          <div class="input-group-append">
          </div>
          <i class="fas fa-envelope" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:darkgray;"></i>
        </div>

        <span><?= $validation->hasError('password') ? $validation->getError('password') : '' ?></span>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="password" style="border-radius: 20px; border: 2px solid rgba(255, 255, 255, .2); height:45px; background-color:rgba(255, 255, 255, 0.05);">
          <div class="input-group-append">
          </div>
          <i class="fas fa-lock" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); color:darkgray;"></i>
        </div>

        <div class="row">
          <!--<div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>-->
          <!-- /.col -->
          <div class="col-6">
            <!-- <a href="<?= base_url('') ?>">
            <button type="submit" class="btn btn-primary btn-block" style="border-radius: 20px; height:45px;">Kembali</button>
            </a> -->
            <a href="<?= base_url('') ?>" class="btn btn-primary btn-block m-0" style="border-radius: 20px; height:45px;">Kembali</a>
          </div>
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block" style="border-radius: 20px; height:45px;">Login</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close(); ?>
      </div>
    <!-- /.card-body -->
    
  </div>
  <!-- /.card -->
  <div class="center" style="text-align: center;">
  <span style="font-size:12px;"><em>Version 1.0</em></span>
  </div>
  
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets') ?>adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets') ?>adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets') ?>adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
