<?php
session_start();

if (empty($_SESSION['id'])) {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location:../../../../login/home.php");
}

$lang = $_SESSION['lang'];
require_once '../../../../assets/lang/' . $lang . '.php';

require_once '../../../../php/const_conn.php';
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

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
    <link rel="stylesheet" href="../../../../dist/css/adminlte.min.css">
    <!-- Checkboxes e Radio Inputs -->
    <link rel="stylesheet" href="../../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="content">
        <!-- Page header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0"><?= $info_register_member ?></h1>
                    </div>
                </div>
            </div>
        </div><!-- /.content-header -->
        <!-- Conteudo -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-tabs">

                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-membro" data-toggle="pill" href="#tab-membro-tab" role="tab" aria-controls="tab-membro-tab" aria-selected="true"><?= $menu_information ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-departamento" data-toggle="pill" href="#tab-departamento-tab" role="tab" aria-controls="tab-departamento-tab" aria-selected="false"><?= $menu_religious_data ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-carteira-e-impresso" data-toggle="pill" href="#tab-carteira-e-impresso-tab" role="tab" aria-controls="tab-carteira-e-impresso-tab" aria-selected="false"><?= $menu_documents ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-evento" data-toggle="pill" href="#tab-evento-tab" role="tab" aria-controls="tab-evento-tab" aria-selected="false"><?= $menu_address ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-patrimonio" data-toggle="pill" href="#tab-patrimonio-tab" role="tab" aria-controls="tab-patrimonio-tab" aria-selected="false"><?= $menu_contact ?></a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                        <form method="POST" action="../../../../php/reg_member.php">    
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                
                                <div class="tab-pane fade show active" id="tab-membro-tab" role="tabpanel" aria-labelledby="tab-membro">
                                    <div class="row align-items-center">
                                        <div class="d-none d-sm-block col-12 col-md-6 text-center">
                                            <img src="../../../../dist/img/background/bg-box/boxed-bg.jpg" alt="foto" class="img-thumbnail" style="max-width: 250px; height: 300px;">
                                            <input type="file" name="photo" style="display: none;" id="photo">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group col-12">
                                                <label for="matricula" class="col-12 control-label"><?= $label_registration ?>:</label>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="matricula" name="matricula" readonly>
                                                </div>
                                            </div>
                                            <div class="w-100"></div>
                                            <div class="form-group col-sm-12">
                                                <label for="nome" class="col-md-10 control-label"><?= $label_name ?>:</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="nome" placeholder="..." name="nome" value="">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="sobrenome" class="col-md-10 control-label"><?= $label_surname ?>:</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="sobrenome" placeholder="..." name="sobrenome" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pai" class="col-sm-4 control-label"><?= $label_father_name ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="nome_pai" type="text" class="form-control" id="pai" placeholder="..." value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mae" class="col-sm-4 control-label"><?= $label_mother_name ?>:</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="nome_mae" class="form-control" id="mae" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="cod_estado_civil" class="col-sm-12 control-label"><?= $label_marital_status ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="cod_estado_civil" onchange="casado()" class="form-control" id="cod_estado_civil">
                                                    <option value="" selected>...</option>
                                                    <option value="1"><?= $_select_marital_single ?></option>
                                                    <option value="2"><?= $_select_marital_married ?></option>
                                                    <option value="3"><?= $_select_marital_widower ?></option>
                                                    <option value="4"><?= $_select_marital_legally_separated ?></option>
                                                    <option value="5"><?= $_select_marital_divorced ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="conjuge" class="col-sm-4 control-label"><?= $label_spouse_name ?>:</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="conjuge" class="form-control" disabled id="conjuge" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="sexo" class="col-sm-12 control-label"><?= $label_sex ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="sexo" class="form-control" id="sexo">
                                                    <option value="" selected>...</option>
                                                    <option value="<?= $select_sex_male ?>">
                                                        <?= $select_sex_male ?>
                                                    </option>
                                                    <option value="<?= $select_sex_female ?>">
                                                        <?= $select_sex_female ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="cod_escolaridade" class="col-sm-12 control-label"><?= $label_schooling ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="cod_escolaridade" class="form-control" id="cod_escolaridade">
                                                    <option value="" selected>...</option>
                                                    <option value="<?= $select_schooling_literate ?>">
                                                        <?= $select_schooling_literate ?>
                                                    </option>
                                                    <option value="<?= $select_schooling_elementary_school_series ?>">
                                                        <?= $select_schooling_elementary_school_series ?>
                                                    </option>
                                                    <option value="<?= $select_schooling_elementary_school ?>">
                                                        <?= $select_schooling_elementary_school ?>
                                                    </option>
                                                    <option value="<?= $select_schooling_middle_school ?>">
                                                        <?= $select_schooling_middle_school ?>
                                                    </option>
                                                    <option value="<?= $select_schooling_technical_education ?>">
                                                        <?= $select_schooling_technical_education ?>
                                                    </option>
                                                    <option value="<?= $select_schooling_higher_education ?>">
                                                        <?= $select_schooling_higher_education ?>
                                                    </option>
                                                    <option value="<?= $select_schooling_doctorate ?>">
                                                        <?= $select_schooling_doctorate ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="escolaridade_status" class="col-sm-12 control-label"><?= $label_done ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="escolaridade_status" class="form-control" id="escolaridade_status">
                                                    <option value="" selected>...</option>
                                                    <option value="<?= $select_awesome_complete ?>"><?= $select_awesome_complete ?></option>
                                                    <option value="<?= $select_awesome_incomplete ?>"><?= $select_awesome_incomplete ?></option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12 col-md-3">
                                            <label class="col-12 control-label"><?= $label_have_a_son ?>?:</label>
                                            <div class="col-12">
                                                <select name="filho" onchange="possuiFilho()" class="form-control" id="filho">
                                                    <option value="0" selected><?= $no ?></option>
                                                    <option value="1"><?= $yes ?></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-12 col-md-3">
                                            <label class="col-12 control-label"><?= $label_quantity ?>:</label>
                                            <div class="input-group">
                                                <input type="text" name="num_filho" id="num_filho" class="form-control rounded-0 numero" disabled placeholder="Max.6">
                                                <span class="input-group-append">
                                                    <button type="button" id="botao_filho" class="btn btn-info btn-flat" disabled onclick="addFilho()">Adic.</button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group col-12 col-md-6 text-center" style="display: none;">
                                            <h2 class="mt-4"><?= $info_register_son ?></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-departamento-tab" role="tabpanel" aria-labelledby="tab-departamento">
                                    <div class="row">
                                        <div class="form-group col-12 col-md-2">
                                            <label class="col-12 control-label"><?= $label_communing ?>?:</label>
                                            <div class="col-12">
                                                <select name="comunga" onchange="comunga()" class="form-control" id="comunga">
                                                    <option value="" selected>...</option>
                                                    <option value="0"><?= $no ?></option>
                                                    <option value="1"><?= $yes ?></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-12 col-md-3">
                                            <label for="data_batismo" class="col-12 control-label"><?= $label_baptism_date ?>:</label>
                                            <div class="col-12">
                                                <input name="data_batismo" type="date" class="form-control" id="data_batismo" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group col-12 col-md-4">
                                            <label class="col-12 control-label"><?= $label_admission_type ?>:</label>
                                            <div class="col-12">
                                                <select name="tipo_admissao" class="form-control" onchange="meioAdmissao()" id="tipo_admissao">
                                                    <option value="" selected>...</option>
                                                    <option value="1"><?= $select_conversion ?></option>
                                                    <option value="2"><?= $select_baptism ?></option>
                                                    <option value="3"><?= $select_transfer ?></option>
                                                    <option value="4"><?= $select_ministry_exchange ?></option>
                                                    <option value="5"><?= $select_reconciliation ?></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-12 col-md-3">
                                            <label class="col-12 control-label"><?= $label_function_ministry ?>:</label>
                                            <div class="col-12">
                                                <!--IMPROTANTE = CRIAR CAMPO PARA ALIMENTAR A TABELA-->
                                                <select name="funcao_ministerio" class="form-control" id="funcao_ministerio">
                                                    <option value="" selected>...</option>

                                                    <?php
                                                    $ministerial = "SELECT * FROM `select_ministerial_function`";
                                                    $valor_busca = mysqli_query($conn, $ministerial);
                                                    while ($row_nivel = mysqli_fetch_assoc($valor_busca)) {
                                                        echo '<option value ="' . $row_nivel['id'] . '">' . $row_nivel['function'] . '</option>';
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="addIgreja" class="form-group col-12 collapse">
                                            <label for="igreja_anterior" class="col-12 control-label"><?= $label_previous_church ?>:</label>
                                            <div class="col-12">
                                                <input name="igreja_anterior" type="text" class="form-control" id="igreja_anterior" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-carteira-e-impresso-tab" role="tabpanel" aria-labelledby="tab-carteira-e-impresso">

                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="identidade" class="col-12 control-label"><?= $label_Identity ?>:</label>
                                            <div class="col-12">
                                                <input name="rg" type="text" class="form-control numero" id="identidade" placeholder="..." value="">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="orgao_expd" class="col-12 control-label"><?= $label_shipping_department ?>:</label>
                                            <div class="col-12">
                                                <input name="rg_orgao" type="text" class="form-control" id="orgao_expd" placeholder="..." value="">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="estado_expd" class="col-sm-12 control-label"><?= $label_dispatch_state ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="rg_estado" class="form-control" id="estado_expd">
                                                    <option value="">...</option>
                                                    <?php
                                                    $state = "SELECT * FROM `select_state`";
                                                    $valor_busca = mysqli_query($conn, $state);
                                                    while ($row_state = mysqli_fetch_assoc($valor_busca)) {
                                                        echo '<option value ="' . $row_state['uf'] . '">' . $row_state['state'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="data_expd" class="col-sm-12 control-label"><?= $label_shipping_date ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="rg_expedicao" type="date" class="form-control" id="data_expd" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="pais_nasc" class="col-sm-12 control-label"><?= $label_country_of_birth ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="pais_nasc" class="form-control" id="pais_nasc">
                                                    <option value="">...</option>
                                                    <?php
                                                    $buscaPais = mysqli_query($conn, "SELECT `id`,`country` FROM `select_country`;");
                                                    while ($pais = mysqli_fetch_object($buscaPais)) :
                                                        echo "<option value='$pais->id'>$pais->country</option>";
                                                    endwhile;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="estado_nasc" class="col-sm-12 control-label"><?= $label_state_of_birth ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="estado_nasc" class="form-control" id="estado_nasc">
                                                    <option value="">...</option>
                                                    <?php /*
                                                        $buscaEstado = mysqli_query($conn, "SELECT `id`,`state` FROM `select_state`;");
                                                        while ($estado = mysqli_fetch_object($buscaEstado)):
                                                            echo "<option value='$estado->id'>$estado->state</option>";
                                                        endwhile;
                                                    */ ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="cidade_nasc" class="col-sm-12 control-label"><?= $label_naturalness ?>:</label>
                                            <div class="col-sm-12">
                                                <select name="cidade_nasc" class="form-control" id="cidade_nasc">
                                                    <option value="">...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="nascimento" class="col-sm-12 control-label"><?= $label_date_of_birth ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="data_nascimento" type="date" class="form-control" id="nascimento" placeholder="..." value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="cpf" class="col-md-4 control-label">CPF:</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control cpf" id="cpf" placeholder="..." name="cpf" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-evento-tab" role="tabpanel" aria-labelledby="tab-evento">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="cep" class="col-md-12 control-label"><?= $label_zip_code ?>:</label>
                                            <div class="col-md-12">
                                                <input name="cep" type="text" class="form-control cep" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="rua" class="col-md-6 control-label"><?= $label_street ?>:</label>
                                            <div class="col-md-12">
                                                <input name="rua" type="text" class="form-control" id="rua" size="60" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="numero" class="col-md-12 control-label"><?= $label_number ?>:</label>
                                            <div class="col-md-12">
                                                <input name="numero" type="text" class="form-control" id="numero" placeholder="..." value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="bairro" class="col-md-6 control-label"><?= $label_neighborhood ?>:</label>
                                            <div class="col-md-12">
                                                <input name="bairro" type="text" class="form-control" id="bairro" size="40" placeholder="..." value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="complemento" class="col-md-6 control-label"><?= $label_complement ?>:</label>
                                            <div class="col-md-12">
                                                <input name="complemento" type="text" class="form-control" id="complemento" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="estado" class="col-sm-12 control-label"><?= $label_state ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="uf" type="text" id="uf" size="2" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="cidade" class="col-sm-12 control-label"><?= $label_city ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="cidade" class="form-control" type="text" id="cidade" size="40" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-patrimonio-tab" role="tabpanel" aria-labelledby="tab-patrimonio">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="telefone" class="col-sm-12 control-label"><?= $label_telephone ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="telefone" type="text" class="form-control phone_with_ddd" id="telefone" placeholder="..." value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="celular" class="col-sm-12 control-label"><?= $label_cell_phone ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="celular" type="text" class="form-control celular_com_9" id="celular" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email" class="col-sm-12 control-label"><?= $label_email ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="email" type="email" class="form-control" id="email" placeholder="..." value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="emailc" class="col-sm-12 control-label"><?= $label_confirm_email ?>:</label>
                                            <div class="col-sm-12">
                                                <input name="emailc" onblur="verificaEmail(this.value)" type="email" class="form-control" id="emailc" placeholder="..." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button id="btn-cad" style="margin-top: 10px;" type="submit" class="btn btn-block btn-success btn_form_continue"><?= $button_register ?></button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.Conteudo -->

        <!-- Modal default-->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= $label_add_son ?></h5>
                    </div>
                    <div class="modal-body" id="nomes_filhos">
                        <!--preenchida de acordo com a quantidade de filhos-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="closead" data-dismiss="modal"><?= $button_close ?></button>
                        <button type="button" onclick='addCampo()' class="btn btn-primary"><?= $button_confirm ?></button>
                    </div>
                </div>
            </div>
        </div><!-- /Modal -->

        <!--Modal Error-->
        <div class="modal fade" id="modal-error">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= $label_add_son ?></h5>
                    </div>
                    <div class="modal-body">
                        <h3><?= $info_null_son ?></h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><?= $button_close ?></button>
                    </div>
                </div>
            </div>
        </div><!-- /Modal Error-->

        <!--Modal Danger-->
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= $label_add_son ?></h5>
                    </div>
                    <div class="modal-body">
                        <h3><?= $info_number_son ?></h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><?= $button_close ?></button>
                    </div>
                </div>
            </div>
        </div><!-- /Modal Danger-->
    </div><!-- /.content -->

    <!-- jQuery -->
    <script src="../../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../../dist/js/adminlte.min.js"></script>
    <!--JS Busca CEP-->
    <script src="../../../../dist/js/pages/busca_cep.js"></script>
    <!--JS Mask-->
    <script src="../../../../dist/js/pages/jquery.mask.min.js"></script>
    <script src="../../../../dist/js/pages/mascara.js"></script>
    <script src="../../../../dist/js/pages/formulario.js"></script>
    <script>
        //quando seleciona um option
        $("#estado_nasc").change(function() {
            //pega o valor do value do option
            let id = $(this).val();

            //faz a requisião ajax no arquivo php
            $.ajax({
                url: "../../../../php/popularSelectCity.php",
                method: "POST",
                dataType: "HTML",
                data: {
                    "id": id
                }

            }).done(function(data) {
                if (data == '') {
                    $("#cidade_nasc").html(data);
                    alert('Não ha Cidades para este Estado. Contactar Suporte');
                } else {
                    $('#cidade_nasc').html(data);
                }
            });

        });


        $("#pais_nasc").change(function() {
            let id = $(this).val();
            $.ajax({
                url: "../../../../php/popularSelectState.php",
                method: "POST",
                dataType: "HTML",
                data: {
                    "id": id
                }

            }).done(function(data) {
                if (data == '') {
                    $("#estado_nasc").html(data);
                    alert('Não ha Estados para este Pais. Contactar Suporte');
                } else {
                    $("#estado_nasc").html(data);
                }
            });
        });

        //capturar verificação de email
        function verificaEmail(value) {
            let email = document.querySelector('#email').value;


            if (email != value) {
                alert('Email não confere. Por favor verifique!!!');
            }
        }

        //atribui função de click no input photo
        $('.img-thumbnail').on('click', () => {
            $('#photo').click();
        })

        //atribui valor do input para Imagem
        $('#photo').on("change", function(e) {
            showThumbnail(this.files);
        });

        function showThumbnail(files) {
            if (files && files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-thumbnail').attr('src', e.target.result);
                }

                reader.readAsDataURL(files[0]);
            }
        }
    </script>
</body>

</html>