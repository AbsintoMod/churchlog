<?php
session_start();

if (empty($_SESSION['id'])) {
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location:../../../../login/home.php");
}

    require_once '../../../../assets/lang/pt-br.php';
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
                        <h1 class="m-0"><?=$menu_social_action?></h1>
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
                                            <a class="nav-link active" id="tab-voluntario" data-toggle="pill" href="#tab-voluntario-tab" role="tab" aria-controls="tab-voluntario-tab" aria-selected="true"><?=$menu_volunteers?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-doacao" data-toggle="pill" href="#tab-doacao-tab" role="tab" aria-controls="tab-doacao-tab" aria-selected="false"><?=$menu_donations?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-campanha" data-toggle="pill" href="#tab-campanha-tab" role="tab" aria-controls="tab-campanha-tab" aria-selected="false"><?=$menu_campaigns?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-trabalho_de_rua" data-toggle="pill" href="#tab-trabalho_de_rua-tab" role="tab" aria-controls="tab-trabalho_de_rua-tab" aria-selected="false"><?=$menu_street_works?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-voluntario-tab" role="tabpanel" aria-labelledby="tab-voluntario">
                                            <p>aba voluntario</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-doacao-tab" role="tabpanel" aria-labelledby="tab-doacao">
                                            <p>aba doações</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-campanha-tab" role="tabpanel" aria-labelledby="tab-campanha">
                                            <p>aba campanha</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-trabalho_de_rua-tab" role="tabpanel" aria-labelledby="tab-trabalho_de_rua">
                                            <p>aba trabalhos de rua</p>
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