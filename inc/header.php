<?php
  // require_once('sess_auth.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_settings->info('title') != false ? $_settings->info('title') . ' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />

    <!-- New CSS Links with base_url -->
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/elements.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/blog.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/main.css"> 

    <!-- New JS Links with base_url -->
    <script src="<?php echo base_url ?>assets/js/vendor/jquary-3.6.0.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/jquery.ajaxchimp.min.js"></script>
    <!-- <script src="<?php echo base_url ?>assets/js/vendor/bootstrap.min.js"></script> -->
    <script src="<?php echo base_url ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/swiper.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/venobox.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/smooth-scroll.js"></script>
    <script src="<?php echo base_url ?>assets/js/vendor/wow.min.js"></script>
    <script src="<?php echo base_url ?>assets/js/book-ride.js"></script>
    <script src="<?php echo base_url ?>assets/js/main.js"></script>

    <style>
        html, body {
            overflow-x: hidden;
            width: 100%;
            font-family: "Poppins", sans-serif;
        }
        #main-header {
            position: relative;
            background: rgb(0, 0, 0) !important;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.485) 22%, rgba(0, 0, 0, 0.395) 49%, rgba(0, 212, 255, 0) 100%) !important;
            height: 70vh;
        }
        #main-header:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(<?php echo base_url . $_settings->info('cover') ?>);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            filter: drop-shadow(0px 7px 6px black);
            z-index: -1;
        }
    </style>
    <?php
  // require_once('sess_auth.php');
  
?>
<h>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css"> -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
      <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
   <!-- Select2 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">  -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>assets/css/styles.css">  -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css"> -->
     <!-- SweetAlert2 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"> -->
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>
    <script src="<?php echo base_url ?>dist/js/script.js"></script>
    <script src="<?php echo base_url ?>assets/js/scripts.js"></script>

  
</head>

