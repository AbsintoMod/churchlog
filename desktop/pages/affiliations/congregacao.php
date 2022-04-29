<?php
session_start();

if (empty($_SESSION['id'])) {
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location:../../../login/home.php");
}

$lang = $_SESSION['lang'];
require_once '../../../assets/lang/'.$lang.'.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  //Google Font: Source Sans Pro
    require_once '../../../assets/head/font_google.php';
    
  // Font Awesome Icons 
    require_once '../../../assets/head/font_awesome.php';
  ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="content">
    <!-- Page header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1 class="m-0"><?=$menu_congregation?></h1>
          </div>
        </div>
      </div>
    </div><!-- /.content-header -->
    <!-- Conteudo -->

    <!-- /.Conteudo -->
  </div><!-- /.content -->

  <!-- jQuery -->
  <script src="../../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../../dist/js/adminlte.min.js"></script>
</body>

</html>