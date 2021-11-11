<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
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
                            <h1 class="m-1">Editar Grupo - {Nome do Grupo}</h1>
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
                                            <a class="nav-link" id="tab-aviso" data-toggle="pill" href="#tab-aviso-tab" role="tab" aria-controls="tab-aviso-tab" aria-selected="false">Avisos</a>
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
                                                <div class="col-6 col-sm-6">
                                                    <a href="#">
                                                        <div class="small-box bg-success">
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
                                                <div class="col-6 col-sm-6">
                                                    <!-- small card -->
                                                    <div class="small-box bg-info">
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
                                                                            <p class="text-muted text-sm"><b> Função: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Endereço:</b> Demo Street 123, Demo City 04312, NJ</li>
                                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-5 text-center">
                                                                            <img src="../../../dist/img/user1-128x128.jpg" alt="perfil_128*128" class="img-circle img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="text-right">
                                                                        <a href="#" class="btn btn-sm btn-danger">
                                                                            <i class="fas fa-solid fa-x"></i> Excluir
                                                                        </a>
                                                                        <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalFuncao">
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
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-6">
                                                    <label for="titulo-reuniao" class="col-sm-12 control-label">Titulo:</label>
                                                    <div class="col-sm-12">
                                                        <input name="titulo-reuniao" type="text" class="form-control" id="titulo" placeholder="...">
                                                    </div>

                                                    <label for="data" class="col-12 col-sm-6 control-label">Data:</label>
                                                    <div class="col-12 col-sm-6">
                                                        <input name="data" type="date" class="form-control" id="data">
                                                    </div>
                                                    <label for="hora" class="col-sm-3 control-label">Horario:</label>
                                                    <div class="col-12 col-sm-6">
                                                        <input name="hora" type="time" class="form-control" id="hora">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <textarea id="conteudo_reuniao" class="summernote-conteudo-reuniao">

                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div id="bloco-reuniao">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h4 class="card-title w-100">
                                                                <a class="d-block w-100" data-toggle="collapse" href="#reuniao1">
                                                                    <div class="row text-center">
                                                                        <div class="col-12 col-sm-4">
                                                                            Titulo da Reunião
                                                                        </div>
                                                                        <div class="col-12 col-sm-4 ">
                                                                            Data: 10/11/2021
                                                                        </div>
                                                                        <div class="col-12 col-sm-4">
                                                                            Hora: 00:00
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="reuniao1" class="collapse show" data-parent="#bloco-reuniao">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nesciunt you probably haven't heard of them accusamus
                                                                labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-danger">
                                                        <div class="card-header">
                                                            <h4 class="card-title w-100">
                                                                <a class="d-block w-100" data-toggle="collapse" href="#reuniao2">
                                                                    <div class="row text-center">
                                                                        <div class="col-12 col-sm-4">
                                                                            Titulo da Reunião
                                                                        </div>
                                                                        <div class="col-12 col-sm-4 ">
                                                                            Data: 05/11/2021
                                                                        </div>
                                                                        <div class="col-12 col-sm-4">
                                                                            Hora: 00:10
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="reuniao2" class="collapse" data-parent="#bloco-reuniao">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nesciunt you probably haven't heard of them labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-success">
                                                        <div class="card-header">
                                                            <h4 class="card-title w-100">
                                                                <a class="d-block w-100" data-toggle="collapse" href="#reuniao3">
                                                                    <div class="row text-center">
                                                                        <div class="col-12 col-sm-4">
                                                                            Titulo da Reunião
                                                                        </div>
                                                                        <div class="col-12 col-sm-4 ">
                                                                            Data: 15/11/2021
                                                                        </div>
                                                                        <div class="col-12 col-sm-4">
                                                                            Hora: 20:00
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="reuniao3" class="collapse" data-parent="#bloco-reuniao">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nesciunt you probably haven't heard of them labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-aviso-tab" role="tabpanel" aria-labelledby="tab-aviso">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-12 col-sm-6">
                                                        <label for="titulo-aviso" class="col-12 control-label">Titulo:</label>
                                                        <div class=" col-12">
                                                            <input name="titulo" type="text" class="form-control" id="titulo-aviso" placeholder="...">
                                                        </div>
                                                    </div>
                                                    <div class="form-group  col-12 col-sm-6">
                                                        <label for="chamada-aviso" class="col-12 control-label">Chamada:</label>
                                                        <div class=" col-12">
                                                            <input name="chamada" type="text" class="form-control" id="chamada-aviso" placeholder="...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <textarea class="summernote-conteudo-aviso" id="conteudo-aviso"></textarea>  
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <button type="button" class="btn btn-block bg-primary">Cor</button>
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <button type="button" class="btn btn-block btn-danger">Limpar</button>
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <button type="button" class="btn btn-block btn-success ">Lançar</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="card card-danger shadow-lg" style="max-width: 18rem;">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Titulo</h3>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                    </button>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="card-body">
                                                                <h5 class="card-title">Chamada</h5>
                                                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="card card-purple shadow-lg" style="max-width: 18rem;">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Titulo</h3>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                    </button>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="card-body">
                                                                <h5 class="card-title">Chamada</h5>
                                                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="card card-warning shadow-lg" style="max-width: 18rem;">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Titulo</h3>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                    </button>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="card-body">
                                                                <h5 class="card-title">Chamada</h5>
                                                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- Modal Mudança de Função-->
    <div class="modal fade" id="modalFuncao" tabindex="-1" role="dialog" aria-labelledby="modalFuncao" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Função no Grupo</h5>
                </div>
                <div class="form-group modal-body">
                    <div class="form-group">
                        <!--Criar select com funções do grupo-->
                        <label for="funcao">Selecione uma ou mais Funções:</label>
                        <select id="select_funcao" name="funcao" class="select2" multiple="multiple" data-placeholder="Selecione" style="width: 100%;">
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../../dist/js/adminlte.js"></script>
    <!-- Summernote -->
    <script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Select2 -->
    <script src="../../../plugins/select2/js/select2.full.min.js"></script>
    <!-- JS LOCAL-->
    <script src="../../../dist/js/pages/formulario.js"></script>
</body>

</html>