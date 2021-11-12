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
                            <h1 class="m-1">Financeiro</h1>
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
                                            <a class="nav-link active" id="tab-dizimo" data-toggle="pill" href="#tab-dizimo-tab" role="tab" aria-controls="tab-dizimo-tab" aria-selected="true">Dizimo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-oferta" data-toggle="pill" href="#tab-oferta-tab" role="tab" aria-controls="tab-oferta-tab" aria-selected="false">Oferta</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-despesa" data-toggle="pill" href="#tab-despesa-tab" role="tab" aria-controls="tab-despesa-tab" aria-selected="false">Despesa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-solicitacao-de-compra" data-toggle="pill" href="#tab-solicitacao-de-compra-tab" role="tab" aria-controls="tab-solicitacao-de-compra-tab" aria-selected="false">Solicitação de Compra</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-relatorio" data-toggle="pill" href="#tab-relatorio-tab" role="tab" aria-controls="tab-relatorio-tab" aria-selected="false">Relatório</a>
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-dizimo-tab" role="tabpanel" aria-labelledby="tab-dizimo">
                                            <p>aba dizimo</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-oferta-tab" role="tabpanel" aria-labelledby="tab-oferta">
                                            <p>aba oferta</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-despesa-tab" role="tabpanel" aria-labelledby="tab-despesa">
                                            <p>aba despesa</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-solicitacao-de-compra-tab" role="tabpanel" aria-labelledby="tab-solicitacao-de-compra">
                                            <p>aba solicitacao-de-compra</p> 
                                        </div>
                                        <div class="tab-pane fade" id="tab-relatorio-tab" role="tabpanel" aria-labelledby="tab-relatorio">
                                            <p>aba relatorio</p> 
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