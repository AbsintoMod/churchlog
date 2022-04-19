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
  <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/logo.png">
  <title><?=$title?></title>
  <?php
    //Google Font: Source Sans Pro
        require_once '../../assets/head/font_google.php';
    
    // Font Awesome Icons 
        require_once '../../assets/head/font_awesome.php';
    ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css" integrity="sha512-jN4O0AUkRmE6Jwc8la2I5iBmS+tCDcfUd1eq8nrZIBnDKTmCp5YxxNN1/aetnAH32qT+dDbk1aGhhoaw5cJNlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

<body id="body" class="hold-transition sidebar-mini layout-fixed dark-mode" data-panel-auto-height-mode="height">
  <div class="wrapper">
    <?php
    //top-bar
    require_once '../../assets/top_panel.php';
    //Menu
    require_once '../../assets/menu.php'
    ?>
    <!-- Content Page -->
    <div id="div-geral" class="content-wrapper iframe-mode bg-dark" data-widget="iframe" data-auto-dark-mode="true" data-loading-screen="750">

      <div class="nav navbar navbar-expand navbar-dark border-bottom border-dark p-0">

        <a class="nav-link bg-danger" href="#" data-widget="iframe-close"><?= $button_close ?></a>

        <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <a class="nav-link bg-dark" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
      </div>
      <div class="tab-content">
        <!-- Aba Vazia -->
        <div class="tab-empty">
          <h2><span id="mostra_data" class="badge bg-dark"></span></h2>
        </div><!-- /. aba vazia -->
        <div class="tab-loading">
          <!-- Loading -->
          <div>
            <img class="animation__shake" src="../../dist/img/logo.png" alt="ChurchLogLogo" height="60" width="60">
          </div>
          </div><!-- /. loading -->
        </div>
      </div>
    </div>
    <!-- /. Content Page -->

    <!-- Rodapé -->
    <?php require_once '../../assets/footer.php' ?>
    <!-- ./ Rodapé -->

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js" integrity="sha512-B1xv1CqZlvaOobTbSiJWbRO2iM0iii3wQ/LWnXWJJxKfvIRRJa910sVmyZeOrvI854sLDsFCuFHh4urASj+qgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- Mostra Saudação -->
  <script src='../../dist/js/pages/data.js'></script>
</body>

</html>