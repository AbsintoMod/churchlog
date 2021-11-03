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
            <img class="animation__shake" src="../../../dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-1">Editar Grupo</h1>
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
                                            <a class="nav-link active" id="tab-membro" data-toggle="pill" href="#tab-membro-tab" role="tab" aria-controls="tab-membro-tab" aria-selected="true">Membros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-reuniao" data-toggle="pill" href="#tab-reuniao-tab" role="tab" aria-controls="tab-reuniao-tab" aria-selected="false">Reuniões</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-mensagem" data-toggle="pill" href="#tab-mensagem-tab" role="tab" aria-controls="tab-mensagem-tab" aria-selected="false">Mensagens</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-requisicao" data-toggle="pill" href="#tab-requisicao-tab" role="tab" aria-controls="tab-requisicao-tab" aria-selected="false">Requisição</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="tab-membro-tab" role="tabpanel" aria-labelledby="tab-membro">
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
                                                            <i class="fa-solid fa-user-group"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /total de Membro -->
                                            </div>

                                            <div class="card card-solid">
                                                <div class="card-body pb-0">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                                            <div class="card bg-light d-flex flex-fill">
                                                                <div class="card-header text-muted border-bottom-0">
                                                                    Digital Strategist
                                                                </div>
                                                                <div class="card-body pt-0">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <h2 class="lead"><b>Nicole Pearson</b></h2>
                                                                            <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-5 text-center">
                                                                            <img src="../../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="text-right">
                                                                        <a href="#" class="btn btn-sm btn-danger">
                                                                            <i class="fas fa-solid fa-x"></i> Excluir
                                                                        </a>    
                                                                        <a href="#" class="btn btn-sm btn-warning">
                                                                        <i class="fa-brands fa-creative-commons-nd"></i>
                                                                            
                                                                        </a>
                                                                        <a href="#" class="btn btn-sm btn-primary">
                                                                            <i class="fas fa-user"></i>
                                                                        </a>
                                                                        <a href="#" class="btn btn-sm bg-teal">
                                                                            <i class="fas fa-comments"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-reuniao-tab" role="tabpanel" aria-labelledby="tab-reuniao">
                                            <p>Reunião .CARDS</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-mensagem-tab" role="tabpanel" aria-labelledby="tab-mensagem">
                                            <p>Mensagem .CARDS</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-requisicao-tab" role="tabpanel" aria-labelledby="tab-requisicao">
                                            <p>Requisição (Formulario)
                                                Lista (com nivel de STATUS)</p>
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
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../../dist/js/adminlte.js"></script>
</body>

</html>