<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Carregamento -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../../dist/img/logo.png" alt="ChurchLogLogo" height="60" width="60">
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-1">Ensino</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
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
                                            <a class="nav-link active" id="tab-ebd" data-toggle="pill" href="#tab-ebd-tab" role="tab" aria-controls="tab-ebd-tab" aria-selected="true">E.B.D</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-musical" data-toggle="pill" href="#tab-musical-tab" role="tab" aria-controls="tab-musical-tab" aria-selected="false">Musical</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-estudo" data-toggle="pill" href="#tab-estudo-tab" role="tab" aria-controls="tab-estudo-tab" aria-selected="false">Estudos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-discipulado" data-toggle="pill" href="#tab-discipulado-tab" role="tab" aria-controls="tab-discipulado-tab" aria-selected="false">Discipulado</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-biblioteca" data-toggle="pill" href="#tab-biblioteca-tab" role="tab" aria-controls="tab-biblioteca-tab" aria-selected="false">Biblioteca</a>
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
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard -->
    <script src="../../../dist/js/pages/dashboard3.js"></script>
</body>

</html>