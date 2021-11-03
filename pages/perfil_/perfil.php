<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Carregamento -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-1">Editar Perfil - {Nome da Pessoa}</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- conteudo -->
            <!-- Main content -->
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
                                            <a class="nav-link active" id="tab-perfil" data-toggle="pill" href="#tab-perfil-tab" role="tab" aria-controls="tab-perfil-tab" aria-selected="true">Perfil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-certificado" data-toggle="pill" href="#tab-certificado-tab" role="tab" aria-controls="tab-certificado-tab" aria-selected="false">Certificados</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-mensagem" data-toggle="pill" href="#tab-mensagem-tab" role="tab" aria-controls="tab-mensagem-tab" aria-selected="false">Pedidos de Oração</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-configuracao" data-toggle="pill" href="#tab-configuracao-tab" role="tab" aria-controls="tab-configuracao-tab" aria-selected="false">Configuração</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-perfil-tab" role="tabpanel" aria-labelledby="tab-perfil">
                                            <div class="row">
                                                <!-- cadastro de Membro -->
                                                <div class="col-lg-3 col-6">
                                                    <a href="#">
                                                        <div class="small-box bg-info">
                                                            <div class="inner">
                                                                <h4>Cadastrar</h4>
                                                                <p>Membro</p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="fas fa-user-plus"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- /cadastro de Membro -->
                                                <!-- total de Membro -->
                                                <div class="col-lg-3 col-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h4>53</h4>
                                                            <p>Total Membros</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-user-group"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /total de Membro -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-certificado-tab" role="tabpanel" aria-labelledby="tab-certificado">
                                            <p>Credenciais</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-mensagem-tab" role="tabpanel" aria-labelledby="tab-mensagem">
                                            <p>Pedido de Oração.CARDS</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-configuracao-tab" role="tabpanel" aria-labelledby="tab-configuracao">
                                            <p>Configuração</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.Main content -->
            <!-- /.conteudo -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../dist/js/adminlte.js"></script>
</body>

</html>