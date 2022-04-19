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
                                            <a class="nav-link active" id="tab-ebd" data-toggle="pill" href="#tab-ebd-tab" role="tab" aria-controls="tab-ebd-tab" aria-selected="true"><?=$menu_school_bible?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-musical" data-toggle="pill" href="#tab-musical-tab" role="tab" aria-controls="tab-musical-tab" aria-selected="false"><?=$menu_musical_school?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-estudo" data-toggle="pill" href="#tab-estudo-tab" role="tab" aria-controls="tab-estudo-tab" aria-selected="false"><?=$menu_studies?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-discipulado" data-toggle="pill" href="#tab-discipulado-tab" role="tab" aria-controls="tab-discipulado-tab" aria-selected="false"><?=$menu_discipleship?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-biblioteca" data-toggle="pill" href="#tab-biblioteca-tab" role="tab" aria-controls="tab-biblioteca-tab" aria-selected="false"><?=$menu_library?></a>
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-ebd-tab" role="tabpanel" aria-labelledby="tab-ebd">
                                            <p>aba ebd</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-musical-tab" role="tabpanel" aria-labelledby="tab-musical">
                                            <p>aba musical</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-estudo-tab" role="tabpanel" aria-labelledby="tab-estudo">
                                            <p>aba estudo</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-discipulado-tab" role="tabpanel" aria-labelledby="tab-discipulado">
                                            <p>aba discipulado</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-biblioteca-tab" role="tabpanel" aria-labelledby="tab-biblioteca">
                                            <p>aba biblioteca</p> 
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