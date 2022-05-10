<?php 
if($this->session->userdata('admin_login')==FALSE)
{
redirect(base_url('admin')); 
}
$setting = $this->db->get('setting')->row_array();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bansal & Sons Jewellers</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/fontawesome-free/css/all.min.css');?>">-->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/dist/css/adminlte.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- oldto past Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
    <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/daterangepicker/daterangepicker.css');?>">
   <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('cmn/admin/plugins/summernote/summernote-bs4.css');?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed" onload="startTime()">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>


<div class="col-sm-3">
<strong>Date : </strong> <span id="da"></span>-<script>
var d = new Date();
document.getElementById("da").innerHTML = d.getDate();
</script><span id="mo"></span>-<script>
var d = new Date();
document.getElementById("mo").innerHTML = d.getMonth() + 1;
</script><span id="ye"></span>
<script>
var d = new Date();
document.getElementById("ye").innerHTML = d.getFullYear();
</script>
</div>
<!--Date end-->

<!-- Time start-->
<script>
function startTime() 
{
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  var ampm = h >= 12 ? 'PM' : 'AM';
  h = h % 12;
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('tim').innerHTML =
  h + ":" + m + ":" + s + " " + ampm;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) 
{
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<div class="col-sm-3">  
  <strong style="padding-right:10px;" >Time :  <span id="tim"></span>   
 </strong>
</div>
<!-- Time end-->
  

 <marquee width="70%" direction="right" direction="left"><span style="font-size:25px;font-weight:bold;color:#1F7A8C;font-family:'lobster', cursive;">Welcome To Bansal and Sons Jewellers</span>
        </marquee>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
  

 <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user-circle"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-right">
         
          
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url('admin/setting'); ?>" class="dropdown-item dropdown-footer"><i class="fa fa-cogs"></i> Setting</a>
            <div class="dropdown-divider"></div>
          <a href="<?php echo base_url('admin/logout'); ?>" class="dropdown-item dropdown-footer"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        </div>

      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->