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
                        <h1 class="m-0"><?=$menu_teaching?></h1>
                    </div>
                </div>
            </div>
        </div><!-- /.page header -->
        <section class="content">
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#escola">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                <?=$menu_school_bible?>
                                </h4>
                            </div>
                        </a>
                        <div id="escola" class="collapse show" data-parent="#accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#musical">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                <?=$menu_musical_school?>
                                </h4>
                            </div>
                        </a>
                        <div id="musical" class="collapse" data-parent="#accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#estudos">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                <?=$menu_studies?>
                                </h4>
                            </div>
                        </a>
                        <div id="estudos" class="collapse" data-parent="#accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#discipulado">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                <?=$menu_discipleship?>
                                </h4>
                            </div>
                        </a>
                        <div id="discipulado" class="collapse" data-parent="#accordion">
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
                        <a class="d-block w-100" data-toggle="collapse" href="#biblioteca">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                <?=$menu_library?>
                                </h4>
                            </div>
                        </a>
                        <div id="biblioteca" class="collapse" data-parent="#accordion">
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