<?php
session_start();

if(empty($_SESSION['id'])){
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location:../../login/home.php");  
}

require_once '../../assets/lang/pt-br.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Imagem tamanho(16x16) exteção(.ico)-->
  <link rel="shortcut icon" type="image/x-icon" href="../dist/img/logo.png">
  <title>Church Admin</title>
  <?php
    //Google Font: Source Sans Pro
        require_once '../../assets/head/font_google.php';
    
    // Font Awesome Icons 
        require_once '../../assets/head/font_awesome.php';
    ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.css">
  
  <script>
        //função para não atualizar
        window.addEventListener('keydown', function (e) {
            var code = e.which || e.keyCode;

            if (code == 116) e.preventDefault();
            else return true;
            alert('Não Atualizar');
        });
    </script>
</head>

<body id="" class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">
    <?php
    //top-bar
    require_once '../../assets/top_panel.php';
    //Menu
    require_once '../../assets/menu.php'
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div id="div-geral" class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
      <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">

        <a class="nav-link bg-danger" href="#" data-widget="iframe-close"><?= $button_close ?></a>

        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
      </div>
      <div class="tab-content">
        <div class="tab-empty">
          <h2><span id="mostra_data" class="badge bg-dark"></span></h2>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2019-2021 <a href="https://www.instagram.com/driko_heavy">Driko Corp</a>.</strong>
      Todos os Direitos Reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Mostra Saudação -->
  <script src='../../dist/js/pages/data.js'></script>
</body>

</html>