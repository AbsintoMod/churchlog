<?php
session_start();

if (empty($_SESSION['id'])) {
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location:../../../../login/home.php");
}

$lang = $_SESSION['lang'];
require_once '../../../../assets/lang/'.$lang.'.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    //Google Font: Source Sans Pro
        require_once '../../../../assets/head/font_google.php';
    
    // Font Awesome Icons 
        require_once '../../../../assets/head/font_awesome.php';
    ?>
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../dist/css/adminlte.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-1">Vista Grupos</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- conteudo -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user shadow">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-info">
                                    <h3 class="widget-user-username">Grupo de Música</h3>
                                    <h5 class="widget-user-desc">Musical</h5>
                                </div>
                                <div class="widget-user-image">    
                                    <img onclick="window.location.href='grupo.php'" class="img-circle elevation-2 link-foto" src="../../../../dist/img/avatar/avatar_boy_128x128.png" alt="Emblema">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">10</h5>
                                                <span class="description-text">MEMBROS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">10/10/10</h5>
                                                <span class="description-text">CRIADO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Ativo</h5>
                                                <span class="description-text">STATUS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        
                        
                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user shadow-lg">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header text-white" style="background: url('../../../../dist/img/photo1.png') center center;">
                                    <h3 class="widget-user-username text-right">Grupo de Música</h3>
                                    <h5 class="widget-user-desc text-right">Musical</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img onclick="window.location.href='grupo.php'" class="img-circle link-foto" src="../../../../dist/img/avatar/avatar_boy_128x128.png" alt="Emblema">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">6</h5>
                                                <span class="description-text">MEMBROS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">13/11/21</h5>
                                                <span class="description-text">CRIADO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Avado</h5>
                                                <span class="description-text">STATUS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        
                        
                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user shadow-lg">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header text-white" style="background: url('../../../../dist/img/photo1.png') center center;">
                                    <h3 class="widget-user-username text-right">Grupo de Dança</h3>
                                    <h5 class="widget-user-desc text-right">Dança</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle link-foto" onclick="window.location.href='grupo.php'" src="../../../../dist/img/avatar/avatar_boy_128x128.png" alt="Emblema">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">20</h5>
                                                <span class="description-text">MEMBROS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">13/10/10</h5>
                                                <span class="description-text">CRIADO</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">Ativo</h5>
                                                <span class="description-text">STATUS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- /.conteudo -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../../../dist/js/adminlte.js"></script>
</body>

</html>