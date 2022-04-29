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
    <!-- summernote -->
    <link rel="stylesheet" href="../../../../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Content -->
    <div class="content">
        <!-- Page header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0"><?=$menu_coordination?></h1>
                    </div>
                </div>
            </div>
        </div><!-- /.page header -->
            <!-- conteudo -->
            <section class="content">
                <!-- container-fluid -->
                <div class="container-fluid">
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab-gabinete" data-toggle="pill" href="#tab-gabinete-tab" role="tab" aria-controls="tab-gabinete-tab" aria-selected="true">Gabinete</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-pastores" data-toggle="pill" href="#tab-pastores-tab" role="tab" aria-controls="tab-pastores-tab" aria-selected="false">Pastores</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-lideres" data-toggle="pill" href="#tab-lideres-tab" role="tab" aria-controls="tab-lideres-tab" aria-selected="false">Lideres</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-gabinete-tab" role="tabpanel" aria-labelledby="tab-gabinete">
                                            <p>aba gabinete</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-pastores-tab" role="tabpanel" aria-labelledby="tab-pastores">
                                            <p>aba pastores</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-lideres-tab" role="tabpanel" aria-labelledby="tab-lideres">
                                            <p>aba lideres</p> 
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
            </section>
            <!-- /.conteudo -->
    </div><!-- /.content -->

    <!-- jQuery -->
    <script src="../../../../plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../../dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="../../../../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Summernote
            $('.summernote').summernote({});
        });
    </script>
</body>

</html>