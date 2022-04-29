<?php
session_start();

if (empty($_SESSION['id'])) {
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location:../../../login/home.php");
}

$lang = $_SESSION['lang'];
require_once '../../../assets/lang/'.$lang.'.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    //Google Font: Source Sans Pro
        require_once '../../../assets/head/font_google.php';
    
    // Font Awesome Icons 
        require_once '../../../assets/head/font_awesome.php';
    ?>
    <!--Add CSS Change-Theme-->
    <link rel='stylesheet' type='text/css' media='screen' href='../../../dist/css/pages/change-theme.css'>
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Content -->
    <div class="content">
        <!-- Page header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0">Editar Perfil - <?= $_SESSION['name'] ?></h1>
                    </div>
                </div>
            </div>
        </div><!-- /.page header -->
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
                                        <a class="nav-link active" id="tab-perfil" data-toggle="pill" href="#tab-perfil-tab" role="tab" aria-controls="tab-perfil-tab" aria-selected="true"><?= $menu_profile ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-certificado" data-toggle="pill" href="#tab-certificado-tab" role="tab" aria-controls="tab-certificado-tab" aria-selected="false"><?= $menu_certificate ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-oracao" data-toggle="pill" href="#tab-oracao-tab" role="tab" aria-controls="tab-oracao-tab" aria-selected="false"><?= $menu_prayer_requests ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-configuracao" data-toggle="pill" href="#tab-configuracao-tab" role="tab" aria-controls="tab-configuracao-tab" aria-selected="false"><?= $menu_configuration ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="tab-perfil-tab" role="tabpanel" aria-labelledby="tab-perfil">
                                        <div class="row">
                                            <div class="col-5 col-sm-3">
                                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="vert-tabs-informacao-tab" data-toggle="pill" href="#vert-tabs-informacao" role="tab" aria-controls="vert-tabs-informacao" aria-selected="true"><?= $menu_information ?></a>
                                                    <a class="nav-link" id="vert-tabs-documento-tab" data-toggle="pill" href="#vert-tabs-documento" role="tab" aria-controls="vert-tabs-documento" aria-selected="false"><?= $menu_documents ?></a>
                                                    <a class="nav-link" id="vert-tabs-endereco-tab" data-toggle="pill" href="#vert-tabs-endereco" role="tab" aria-controls="vert-tabs-endereco" aria-selected="false"><?= $menu_address ?></a>
                                                    <a class="nav-link bg-success" id="aba-salvar" type="button"><?= $button_confirm ?></a>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-9">
                                                <div class="tab-content" id="vert-tabs-tabContent">
                                                    <div class="tab-pane text-left fade show active" id="vert-tabs-informacao" role="tabpanel" aria-labelledby="vert-tabs-informacao-tab">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group col-sm-12">
                                                                    <label for="matricula" class="col-md-12 control-label"><?= $label_registration ?>:</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="matricula" name="matricula" value="1234" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="w-100"></div>
                                                                <div class="form-group col-sm-12">
                                                                    <label for="nome" class="col-md-12 control-label"><?= $label_name ?>:</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="nome" name="nome" value="" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-12">
                                                                    <label for="sobrenome" class="col-md-12 control-label"><?= $label_surname ?>:</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-none d-sm-block col-sm-6">
                                                                <div class="text-center">
                                                                    <img src="../../../dist/img/background/bg-box/boxed-bg.jpg" alt="foto" class="img-thumbnail rounded" style="max-width: 200px; height: 200px; margin-top:8%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="pai" class="col-sm-12 control-label"><?= $label_father_name ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="nome_pai" type="text" class="form-control" id="pai" value="" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="mae" class="col-sm-12 control-label"><?= $label_mother_name ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="nome_mae" class="form-control" id="mae" value="" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="sexo" class="col-sm-12 control-label"><?= $label_sex ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="sexo" class="form-control" id="sexo" value="" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cod_escolaridade" class="col-sm-12 control-label"><?= $label_schooling ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="cod_escolaridade" class="form-control" id="cod_escolaridade" value="" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cod_estado_civil" class="col-sm-12 control-label"><?= $label_marital_status ?>:</label>
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
                                                                <label for="telefone" class="col-sm-12 control-label"><?= $label_telephone ?> 1:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="telefone_1" type="text" class="form-control phone_with_ddd" id="telefone_1" placeholder="..." value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="telefone_2" class="col-sm-12 control-label"><?= $label_telephone ?> 2:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="telefone_2" type="text" class="form-control phone_with_ddd" id="telefone_2" placeholder="..." value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!--DIV para selecionar numero principal-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-12">
                                                                <label for="email" class="col-sm-12 control-label"><?= $label_email ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="email" type="email" class="form-control" id="email" placeholder="..." value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="vert-tabs-documento" role="tabpanel" aria-labelledby="vert-tabs-documento-tab">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="identidade" class="col-sm-12 control-label"><?= $label_Identity ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="rg" type="text" class="form-control" id="identidade" readonly value="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label for="orgao_expd" class="col- sm-12 control-label"><?= $label_shipping_department ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="orgao_expd" type="text" class="form-control" readonly id="orgao_expd" value="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label for="estado_expd" class="col-sm-12 control-label"><?= $label_dispatch_state ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="estado_expd" type="text" class="form-control" readonly id="estado_expd" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="data_expd" class="col-sm-12 control-label"><?= $label_shipping_date ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="rg_expedicao" type="text" class="form-control" id="data_expd" readonly value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cpf" class="col-md-4 control-label">CPF:</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="cpf" readonly name="cpf" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="nascimento" class="col-sm-12 control-label"><?= $label_date_of_birth ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="nascimento" type="text" class="form-control" id="nascimento" readonly value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="naturalidade" class="col-sm-12 control-label"><?= $label_naturalness ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="naturalidade" type="text" class="form-control" id="naturalidade" readonly value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="uf_nascimento" class="col-sm-12 control-label"><?= $label_state_of_birth ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="uf_nascimento" type="text" class="form-control" id="uf_nascimento" readonly value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="nacionalidade" class="col-sm-12 control-label"><?= $label_nationality ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="nacionalidade" type="text" class="form-control" id="nacionalidade" readonly value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="vert-tabs-endereco" role="tabpanel" aria-labelledby="vert-tabs-endereco-tab">
                                                        <div class="row">
                                                            <!--CEP-->
                                                            <div class="form-group col-md-4">
                                                                <label for="cep" class="col-md-12 control-label"><?= $label_zip_code ?>:</label>
                                                                <div class="col-md-12">
                                                                    <input name="cep" type="text" class="form-control cep" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="...">
                                                                </div>
                                                            </div>
                                                            <!--NUMERO-->
                                                            <div class="form-group col-md-4">
                                                                <label for="numero" class="col-md-12 control-label"><?= $label_number ?>:</label>
                                                                <div class="col-md-12">
                                                                    <input name="numero" type="text" class="form-control" placeholder="..." id="numero" value="">
                                                                </div>
                                                            </div>
                                                            <!--COMPLEMENTO-->
                                                            <div class="form-group col-md-4">
                                                                <label for="complemento" class="col-md-12 control-label"><?= $label_complement ?>:</label>
                                                                <div class="col-md-12">
                                                                    <input name="complemento" type="text" class="form-control" placeholder="..." id="complemento" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-12">
                                                                <label for="rua" class="col-md-6 control-label"><?= $label_street ?>:</label>
                                                                <div class="col-md-12">
                                                                    <input name="rua" type="text" class="form-control" id="rua" size="60" readonly value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-12">
                                                                <label for="bairro" class="col-md-6 control-label"><?= $label_neighborhood ?>:</label>
                                                                <div class="col-md-12">
                                                                    <input name="bairro" type="text" class="form-control" id="bairro" size="40" readonly value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="estado" class="col-sm-12 control-label"><?= $label_state ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="uf" type="text" id="uf" size="2" class="form-control" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <label for="cidade" class="col-sm-12 control-label"><?= $label_city ?>:</label>
                                                                <div class="col-sm-12">
                                                                    <input name="cidade" class="form-control" type="text" id="cidade" size="40" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-certificado-tab" role="tabpanel" aria-labelledby="tab-certificado">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <img src="../../../dist/img/certificado/certificado.jpg" alt="carteira-membro" class="img-fluid">
                                                    <div class="ribbon-wrapper ribbon-xl">
                                                        <div class="ribbon bg-success text-lg">
                                                            <!--variavel de concluido-->
                                                            CONCLUIDO
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <img src="../../../dist/img/certificado/certificado_2.jpg" alt="certificado" class="img-fluid">
                                                    <div class="ribbon-wrapper ribbon-xl">
                                                        <div class="ribbon bg-warning text-lg">
                                                            <!--variavel de cursando-->
                                                            CURSANDO
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-oracao-tab" role="tabpanel" aria-labelledby="tab-oracao">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label for="titulo-aviso" class="col-12 control-label"><?= $label_title ?>:</label>
                                                    <div class=" col-12">
                                                        <input name="titulo" type="text" class="form-control" id="titulo-aviso" placeholder="...">
                                                    </div>
                                                </div>
                                            </div>
                                            <textarea class="summernote" id="conteudo-oracao"></textarea>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <button type="button" class="btn btn-block btn-danger"><?= $button_clean ?></button>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <button type="button" class="btn btn-block btn-success "><?= $button_save ?></button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-3">
                                                    <div class="card card-warning shadow-lg" style="max-width: 20rem;">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Titulo</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card card-warning shadow-lg" style="max-width: 20rem;">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Titulo</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card card-warning shadow-lg" style="max-width: 20rem;">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Titulo</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card card-warning shadow-lg" style="max-width: 20rem;">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Titulo</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-configuracao-tab" role="tabpanel" aria-labelledby="tab-configuracao">
                                        <div class="card">
                                            <div class="card-body login-card-body">
                                                <p class="login-box-msg"><?=$info_password?></p>

                                                <form action="login.html" method="post">
                                                    <div class="input-group mb-3">
                                                        <input type="password" id="senha1" class="form-control" placeholder="Senha Atual">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i id="1" onclick="mudarType(this.id)" class="fa-solid fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="password" id="senha2" class="form-control" placeholder="Nova senha">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i id="2" onclick="mudarType(this.id)" class="fa-solid fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="password" id="senha3" class="form-control" placeholder="Confirmar nova senha">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-lock" id="3" onclick="mudarType(this.id)"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary btn-block"><?= $button_change_password ?></button>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body theme-card-body">
                                                <div id="theme">
                                                    <!--MOSTRA Tela Grande-->
                                                    <div class="section">
                                                        <p id="info"></p>
                                                        <div class="time-circle d-none d-lg-block">
                                                            <div class="sun"></div>
                                                            <div class="moon">
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                            </div>
                                                            <div class="stars">
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                                <div></div>
                                                            </div>
                                                            <div class="water"></div>
                                                        </div>
                                                        <div id="intro-text">
                                                            <h1 id="texto"></h1>
                                                        </div>
                                                        <div id="switch">
                                                            <div id="circle" onclick="mudar()"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="button" onclick='' class="btn btn-primary btn-block"><?=$button_save?></button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div> <!-- /.container-fluid -->
        </section>
    </div><!-- /.content -->

    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
    <!--JS Busca CEP-->
    <script src="../../../dist/js/pages/busca_cep.js"></script>
    <!--JS Mask-->
    <script src="../../../dist/js/pages/jquery.mask.min.js"></script>
    <script src="../../../dist/js/pages/mascara.js"></script>
    <!--JS Formulario-->
    <script src="../../../dist/js/pages/formulario.js"></script>
    <!--Add JS Change-Theme-->
    <script src='../../../dist/js/pages/change-theme.js'></script>

    <script>
        $(document).ready(function() {
            // Summernote
            $('.summernote').summernote({});
        });
    </script>
</body>

</html>