<?php require_once('./../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page">
  <script>
    start_loader()
  </script>
 
  <style>
      body {
          width: 100%;
          height: 100%;
          background: #f4f6f9;
          font-family: 'Roboto', sans-serif;
      }
      #logo-img {
          width: 100px;
          height: 100px;
          object-fit: cover;
          object-position: center center;
      }
      .login-box {
          width: 360px;
          padding: 2rem;
          background: white;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }
      .card {
          border: none;
      }
      .card-header {
          background: none;
          border-bottom: none;
      }
      .btn-warning {
          background-color: #000;
          border-color: #ff9900;
          color: white;
          transition: background-color 0.3s ease;
      }
     
      .form-control {
          border-radius: 5px;
          border: 1px solid #ced4da;
          transition: box-shadow 0.3s ease;
      }
      .form-control:focus {
          box-shadow: 0 0 5px rgba(255, 153, 0, 0.5);
      }
      .input-group-text {
          background-color: white;
          border: 1px solid #ced4da;
          border-left: none;
      }
      a {
          color: #000;
          text-decoration: none;
      }
      a:hover {
          color: #cc7a00;
      }
  </style>

<div class="login-box">
<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
    <?php endif;?>
  <!-- /.login-logo -->
  <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo" style="width: 300px;"></center>
  <div class="clear-fix my-2"></div>
  <div class="card card-outline card-warning">
    <div class="card-header text-center">
      <a href="./" class="h1 text-decoration-none"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="dlogin-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="reg_code" autofocus placeholder="Code">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-8">
            <a href="<?php echo base_url ?>">Back to Site</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-sm btn-flat btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>