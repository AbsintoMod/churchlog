<?php
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
                        <h1 class="m-0"><?=$menu_secretariat?></h1>
                    </div>
                </div>
            </div>
        </div><!-- /.page header -->
        <section class="content">
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#membro">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_members?>
                                </h4>
                            </div>
                        </a>
                        <div id="membro" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#departamento">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_department?>
                                </h4>
                            </div>
                        </a>
                        <div id="departamento" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#carteira">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_membership_card_printed?>
                                </h4>
                            </div>
                        </a>
                        <div id="carteira" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#evento">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_event?>
                                </h4>
                            </div>
                        </a>
                        <div id="evento" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#patrimonio">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_patrimony?>
                                </h4>
                            </div>
                        </a>
                        <div id="patrimonio" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#protocolo">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_protocol?>
                                </h4>
                            </div>
                        </a>
                        <div id="protocolo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#documento">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <?=$menu_document?>
                                </h4>
                            </div>
                        </a>
                        <div id="documento" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <section class="content">
                                    <!-- container-fluid -->
                                    <div class="container-fluid">
                                        
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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