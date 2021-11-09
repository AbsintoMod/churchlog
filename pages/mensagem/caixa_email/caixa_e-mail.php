<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
                            <h1 class="m-1">Caixa de E-mail</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- conteudo -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <a data-toggle="modal" data-target="#modalEscrever" class="btn btn-primary btn-block mb-3">Escrever</a>
                            <!--botão abre modal para escrever e enviar-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Pastas</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav nav-pills nav-tabs flex-column" role="tablist">
                                        <li class="nav-item active">
                                            <a class="nav-link active" id="vert-tabs-entrada-tab" data-toggle="pill" href="#vert-tabs-entrada" role="tab" aria-controls="vert-tabs-entrada" aria-selected="true">
                                                <i class="fas fa-inbox"></i> Caixa de Entrada
                                                <span class="badge bg-primary float-right">12</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vert-tabs-enviado-tab" data-toggle="pill" href="#vert-tabs-enviado" role="tab" aria-controls="vert-tabs-enviado" aria-selected="false">
                                                <i class="far fa-envelope"></i> Enviado
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vert-tabs-lidos-tab" data-toggle="pill" href="#vert-tabs-lidos" role="tab" aria-controls="vert-tabs-lidos" aria-selected="false">
                                                <!--colocar lista de lidos com aba de leitura-->
                                                <i class="far fa-file-alt"></i> Lidos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vert-tabs-nao-lidos-tab" data-toggle="pill" href="#vert-tabs-nao-lidos" role="tab" aria-controls="vert-tabs-nao-lidos" aria-selected="false">
                                                <i class="fas fa-filter"></i> Não Lidos
                                                <span class="badge bg-warning float-right">65</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vert-tabs-lixeira-tab" data-toggle="pill" href="#vert-tabs-lixeira" role="tab" aria-controls="vert-tabs-lixeira" aria-selected="false">
                                                <i class="far fa-trash-alt"></i> Lixeira
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Etiquetas</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="far fa-circle text-danger"></i> Importante</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="far fa-circle text-warning"></i> Promoções</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="far fa-circle text-primary"></i> Social</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-entrada" role="tabpanel" aria-labelledby="vert-tabs-entrada-tab">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Caixa de Entrada</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Buscar E-Mail">
                                                    <div class="input-group-append">
                                                        <div class="btn btn-primary">
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                            <div class="table-responsive mailbox-messages">
                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check1">
                                                                    <label for="check1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">5 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check2">
                                                                    <label for="check2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">28 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check3">
                                                                    <label for="check3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">11 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check4">
                                                                    <label for="check4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">15 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check5">
                                                                    <label for="check5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">Yesterday</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check6">
                                                                    <label for="check6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check7">
                                                                    <label for="check7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check8">
                                                                    <label for="check8"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check9">
                                                                    <label for="check9"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check10">
                                                                    <label for="check10"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a ()">Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- /.table -->
                                            </div>
                                            <!-- /.mail-box-messages -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                                    <i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-enviado" role="tabpanel" aria-labelledby="vert-tabs-enviado-tab">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Enviados</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Buscar E-Mail">
                                                    <div class="input-group-append">
                                                        <div class="btn btn-primary">
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                            <div class="table-responsive mailbox-messages">
                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check1">
                                                                    <label for="check1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject">
                                                                <p>AdminLTE 3.0 Issue</p> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">5 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check2">
                                                                    <label for="check2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject">
                                                                <p>AdminLTE 3.0 Issue</p> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">28 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check3">
                                                                    <label for="check3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject">
                                                                <p>AdminLTE 3.0 Issue</p> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">11 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check4">
                                                                    <label for="check4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject">
                                                                <p>AdminLTE 3.0 Issue</p> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">15 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check5">
                                                                    <label for="check5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject">
                                                                <p>AdminLTE 3.0 Issue</p> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">Yesterday</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check6">
                                                                    <label for="check6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject">
                                                                <p>AdminLTE 3.0 Issue</p> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- /.table -->
                                            </div>
                                            <!-- /.mail-box-messages -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                                    <i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-lidos" role="tabpanel" aria-labelledby="vert-tabs-lidos-tab">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Lidos</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Buscar E-Mail">
                                                    <div class="input-group-append">
                                                        <div class="btn btn-primary">
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                            <div class="table-responsive mailbox-messages">
                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check1">
                                                                    <label for="check1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">5 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check2">
                                                                    <label for="check2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">28 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check3">
                                                                    <label for="check3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">11 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check4">
                                                                    <label for="check4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">15 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check5">
                                                                    <label for="check5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">Yesterday</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check6">
                                                                    <label for="check6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check7">
                                                                    <label for="check7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check8">
                                                                    <label for="check8"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check9">
                                                                    <label for="check9"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check10">
                                                                    <label for="check10"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><i>AdminLTE 3.0 Issue</i> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- /.table -->
                                            </div>
                                            <!-- /.mail-box-messages -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                                    <i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-nao-lidos" role="tabpanel" aria-labelledby="vert-tabs-nao-lidos-tab">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Não Lidos</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Buscar E-Mail">
                                                    <div class="input-group-append">
                                                        <div class="btn btn-primary">
                                                            <i class="fas fa-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                            <div class="table-responsive mailbox-messages">
                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check1">
                                                                    <label for="check1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">5 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check2">
                                                                    <label for="check2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">28 mins ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check3">
                                                                    <label for="check3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">11 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check4">
                                                                    <label for="check4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">15 hours ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check5">
                                                                    <label for="check5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">Yesterday</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check6">
                                                                    <label for="check6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check7">
                                                                    <label for="check7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check8">
                                                                    <label for="check8"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check9">
                                                                    <label for="check9"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                        <tr onclick="modalLer()" type="button">
                                                            <td>
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" value="" id="check10">
                                                                    <label for="check10"></label>
                                                                </div>
                                                            </td>
                                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                            <td class="mailbox-name"><a>Alexander Pierce</a></td>
                                                            <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                                            </td>
                                                            <td class="mailbox-attachment"></td>
                                                            <td class="mailbox-date">2 days ago</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- /.table -->
                                            </div>
                                            <!-- /.mail-box-messages -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer p-0">
                                            <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                                    <i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fas fa-share"></i>
                                                    </button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <i class="fas fa-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-lixeira" role="tabpanel" aria-labelledby="vert-tabs-lixeira-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.conteudo -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <!-- Modal Escrever-->
    <div class="modal fade" id="modalEscrever" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Escrever E-mail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" placeholder="Para:">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Assunto:">
                    </div>
                    <div class="form-group">
                        <textarea id="compose-textarea" class="form-control" style="height: 250px">
                            <h1><u>Heading Of Message</u></h1>
                            <h4>Subheading</h4>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                was born and I will give you a complete account of the system, and expound the actual teachings
                                of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                                dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                                how to pursue pleasure ration</p>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Anexo
                            <input type="file" name="attachment">
                        </div>
                        <p class="help-block">Max. 32MB</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button>
                    </div>
                    <button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ler-->
<div class="modal fade" id="modalLer" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalLongoExemplo">Ler E-mail</h5>
        <div class="card-tools">
          <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
          <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
    <!-- AdminLTE dashboard -->
    <script src="../../../dist/js/pages/dashboard3.js"></script>
    <!-- Summernote -->
    <script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Page specific script -->
    <script>
        function modalLer() {
            $('#modalLer').modal('show')
        }; 

        $(function() {
            //Add text editor
            $('#compose-textarea').summernote()
        })
        $(function() {
            //Enable check and uncheck all functionality
            $('.checkbox-toggle').click(function() {
                var clicks = $(this).data('clicks')
                if (clicks) {
                    //Uncheck all checkboxes
                    $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                    $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
                } else {
                    //Check all checkboxes
                    $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                    $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
                }
                $(this).data('clicks', !clicks)
            })

            //Handle starring for font awesome
            $('.mailbox-star').click(function(e) {
                e.preventDefault()
                //detect type
                var $this = $(this).find('a > i')
                var fa = $this.hasClass('fa')

                //Switch states
                if (fa) {
                    $this.toggleClass('fa-star')
                    $this.toggleClass('fa-star-o')
                }
            })
        });
    </script>
</body>

</html>