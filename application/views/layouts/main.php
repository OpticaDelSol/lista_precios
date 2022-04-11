<?php

$CI=& get_instance();

if(!$CI->session->userdata('user_name'))
{
    redirect('inicio/index');
}

$_user_name  = $CI->session->userdata('user_name'); 
$_details = $CI->session->userdata('details'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo site_url('resources/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/adminlte.min.css');?>">

  <link href="<?php echo site_url('resources/css/summernote-bs5.min.css');?>" rel="stylesheet">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  

<?php 
//load parts
$this->load->view('layouts/navbar'); 
$this->load->view('layouts/sidebar'); 

?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($view); ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view('layouts/footer'); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo site_url('resources/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo site_url('resources/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE -->
<script src="<?php echo site_url('resources/js/adminlte.js'); ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo site_url('resources/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo site_url('resources/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo site_url('resources/js/pages/dashboard3.js'); ?>"></script>

<script src="<?php echo site_url('resources/js/summernote-bs5.min.js'); ?>"></script>
<?php
if ( isset($js_to_load)){ 
  if(is_array($js_to_load)) {
      foreach($js_to_load as $js){ 
          ?>

          <script src="<?php echo site_url('resources/js/'.$js);?>"> </script>

  <?php } } else {?> 

      <script src="<?php echo site_url('resources/js/'.$js_to_load);?>"> </script>

<?php 
}
}
?>
</body>
</html>
