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
                                                <div class="col-5 col-sm-3">
                                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="vert-tabs-informacao-tab" data-toggle="pill" href="#vert-tabs-informacao" role="tab" aria-controls="vert-tabs-informacao" aria-selected="true">Informações</a>
                                                        <a class="nav-link" id="vert-tabs-documento-tab" data-toggle="pill" href="#vert-tabs-documento" role="tab" aria-controls="vert-tabs-documento" aria-selected="false">Documentos</a>
                                                        <a class="nav-link" id="vert-tabs-endereco-tab" data-toggle="pill" href="#vert-tabs-endereco" role="tab" aria-controls="vert-tabs-endereco" aria-selected="false">Endereço</a>
                                                        <a class="nav-link" id="vert-tabs-foto-tab" data-toggle="pill" href="#vert-tabs-foto" role="tab" aria-controls="vert-tabs-foto" aria-selected="false">Foto</a>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-sm-9">
                                                    <div class="tab-content" id="vert-tabs-tabContent">
                                                        <div class="tab-pane text-left fade show active" id="vert-tabs-informacao" role="tabpanel" aria-labelledby="vert-tabs-informacao-tab">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group col-sm-12">
                                                                        <label for="matricula" class="col-md-12 control-label">Matricula:</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="matricula" name="matricula" value="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-100"></div>
                                                                    <div class="form-group col-sm-12">
                                                                        <label for="nome" class="col-md-12 control-label">Nome:</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="nome" name="nome" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-12">
                                                                        <label for="sobrenome" class="col-md-12 control-label">Sobrenome:</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-none d-sm-block col-sm-6">
                                                                    <div class="text-center">
                                                                        <img src="../../dist/img/boxed-bg.jpg" alt="foto" class="img-thumbnail rounded" style="max-width: 200px; height: 200px; margin-top:8%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="pai" class="col-sm-12 control-label">Nome do Pai:</label>
                                                                    <div class="col-sm-12">
                                                                        <input name="nome_pai" type="text" class="form-control" id="pai" value="" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="mae" class="col-sm-12 control-label">Nome da Mãe:</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="nome_mae" class="form-control" id="mae" value="" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="sexo" class="col-sm-12 control-label">Sexo:</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="sexo" class="form-control" id="sexo" value="" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="cod_escolaridade" class="col-sm-12 control-label">Escolaridade:</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="cod_escolaridade" class="form-control" id="cod_escolaridade" value="" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="cod_estado_civil" class="col-sm-12 control-label">Estado Civil:</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="cod_estado_civil" class="form-control" id="cod_estado_civil" value="" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--DIV para impressão de FILHOS-->
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="telefone" class="col-sm-12 control-label">Telefone 1:</label>
                                                                    <div class="col-sm-12">
                                                                        <input name="telefone_1" type="text" class="form-control phone_with_ddd" id="telefone_1" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="telefone_2" class="col-sm-12 control-label">Telefone 2:</label>
                                                                    <div class="col-sm-12">
                                                                        <input name="telefone_2" type="text" class="form-control phone_with_ddd" id="telefone_2" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--DIV para selecionar numero principal-->
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="email" class="col-sm-12 control-label">Email:</label>
                                                                    <div class="col-sm-12">
                                                                        <input name="email" type="email" class="form-control" id="email" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="vert-tabs-documento" role="tabpanel" aria-labelledby="vert-tabs-documento-tab">
                                                            <p>Aba Documentos</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="vert-tabs-endereco" role="tabpanel" aria-labelledby="vert-tabs-endereco-tab">
                                                            <p>Aba Endereço</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="vert-tabs-foto" role="tabpanel" aria-labelledby="vert-tabs-foto-tab">
                                                            <p>Aba Foto</p>
                                                        </div>
                                                    </div>
                                                </div>
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
    <!--JS Busca CEP-->
    <script src="../../dist/js/pages/busca_cep.js"></script>
    <!--JS Mask-->
    <script src="../../dist/js/pages/jquery.mask.min.js"></script>
    <script src="../../dist/js/pages/mascara.js"></script>
    <script src="../../dist/js/pages/formulario.js"></script>
</body>

</html>