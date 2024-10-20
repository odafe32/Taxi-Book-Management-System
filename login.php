<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<head>
  <!-- Add a custom CSS file to make the design cleaner and more modern -->
  <link rel="stylesheet" href="path_to_your_custom.css">
</head>
<body class="hold-transition login-page" style="background: #fff; height: 100vh; display: flex; align-items: center; justify-content: center;">

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
          background-color: #ffcc00;
          border-color: #ff9900;
          color: white;
          transition: background-color 0.3s ease;
      }
      .btn-warning:hover {
          background-color: #e6ac00;
          border-color: #cc7a00;
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
    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
    <?php if ($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
    <?php endif;?>
    
    <center>
      <img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo" class="" id="">
    </center>
    
    <div class="clear-fix my-3"></div>
    
    <div class="card card-outline card-warning">
      <div class="card-header text-center">
        <a href="./" class="h1 text-decoration-none"><b>Login</b></a>
      </div>
      
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form id="clogin-frm" action="" method="post">
    <div class="input-group mb-3">
        <input type="email" class="form-control" name="email" autofocus placeholder="Email">
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

    <div class="text-center mb-3">
        <button type="submit" class="btn btn-dark btn-lg btn-block" style="font-size: 1.25rem;">
            Sign In
        </button>
    </div>
    
    <div class="row">
        <div class="col-12 text-center">
            <a href="<?php echo base_url.'register.php' ?>">Create an Account</a>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="<?php echo base_url ?>" class="text-danger">Back to Site</a>
    </div>
</form>

      </div>
    </div>
  </div>

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
