<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
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
                            <h1 class="m-1">Secretaria</h1>
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
                                            <a class="nav-link active" id="tab-membro" data-toggle="pill" href="#tab-membro-tab" role="tab" aria-controls="tab-membro-tab" aria-selected="true">Membros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-departamento" data-toggle="pill" href="#tab-departamento-tab" role="tab" aria-controls="tab-departamento-tab" aria-selected="false">Departamento</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-carteira-e-impresso" data-toggle="pill" href="#tab-carteira-e-impresso-tab" role="tab" aria-controls="tab-carteira-e-impresso-tab" aria-selected="false">Carteira e Impressos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-evento" data-toggle="pill" href="#tab-evento-tab" role="tab" aria-controls="tab-evento-tab" aria-selected="false">Eventos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-patrimonio" data-toggle="pill" href="#tab-patrimonio-tab" role="tab" aria-controls="tab-patrimonio-tab" aria-selected="false">Patrimônio</a>
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-membro-tab" role="tabpanel" aria-labelledby="tab-membro">
                                            <p>aba membro</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-departamento-tab" role="tabpanel" aria-labelledby="tab-departamento">
                                            <p>aba departamento</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-carteira-e-impresso-tab" role="tabpanel" aria-labelledby="tab-carteira-e-impresso">
                                            <p>aba carteira-e-impresso</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-evento-tab" role="tabpanel" aria-labelledby="tab-evento">
                                            <p>aba evento</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-patrimonio-tab" role="tabpanel" aria-labelledby="tab-patrimonio">
                                            <p>aba patrimonio</p> 
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

    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../../dist/js/adminlte.js"></script>
    <!--JS Busca CEP-->
    <script src="../../../dist/js/pages/busca_cep.js"></script>
    <!--JS Mask-->
    <script src="../../../dist/js/pages/jquery.mask.min.js"></script>
    <script src="../../../dist/js/pages/mascara.js"></script>
    <!--JS Formulario-->
    <script src="../../../dist/js/pages/formulario.js"></script>
</body>

</html>