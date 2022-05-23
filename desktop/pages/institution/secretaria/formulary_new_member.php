<?php
/*
session_start();

if (empty($_SESSION['id'])) {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location:../../../../login/home.php");
}

$lang = $_SESSION['lang'];
require_once '../../../../assets/lang/' . $lang . '.php';
*/
require_once '../../../../assets/lang/pt-br.php';

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

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../dist/css/adminlte.min.css">
    <!-- Checkboxes e Radio Inputs -->
    <link rel="stylesheet" href="../../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!--validation-form-->
    <link rel="stylesheet" href="../../../../plugins/validation-form/form-validation.css">
    <style>
        .btn-form {
            width: 15rem;
            padding: 10px 0px;
        }
    </style>
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
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <form enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="card-body">
                                <h2 class="mt-3 mb-3 text-center"><?= $menu_information ?></h2>
                                <div class="row align-items-center">
                                    <div class="d-none d-sm-block col-12 col-md-6 text-center">
                                        <img src="../../../../dist/img/background/bg-box/boxed-bg.jpg" alt="foto" class="img-thumbnail" style="max-width: 250px; height: 300px;">
                                        <input type="file" class="collapse" name="photo" id="photo" accept=".jpg,.jpeg,.png">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group col-12">
                                            <label for="matricula" class="col-12 control-label"><?= $label_registration ?>:</label>
                                            <div class="col-12">
                                                <?php
                                                    $pesquisa = "SELECT id FROM `members` ORDER BY id DESC LIMIT 1";
                                                    $result = $conn->query($pesquisa);
                                                    $row = $result->fetch_assoc();
                                                    $mat = isset($row['id']) ? $row['id']+1 : 1;
                                                ?>
                                                <input type="text" class="form-control" id="matricula" name="matricula" readonly>
                                            </div>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="form-group col-sm-12">
                                            <label for="nome" class="col-md-10 control-label"><?= $label_name ?>:</label>
                                            <div class="col-md-12">
                                                <input type="text" required class="form-control" id="nome" placeholder="..." name="nome" value="">
                                                <div class="invalid-feedback">
                                                    <?= $info_firstname_required ?>.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="sobrenome" class="col-md-10 control-label"><?= $label_surname ?>:</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="sobrenome" placeholder="..." name="sobrenome" value="" required>
                                                <div class="invalid-feedback">
                                                    <?= $info_secondname_required ?>.
                                                </div>
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
                                            <input type="text" name="nome_mae" class="form-control" id="mae" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_parent_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="cod_estado_civil" class="col-sm-12 control-label"><?= $label_marital_status ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="cod_estado_civil" onchange="casado()" class="form-select " id="cod_estado_civil" required>
                                                <option value="" selected>...</option>
                                                <option value="1"><?= $select_marital_single ?></option>
                                                <option value="2"><?= $select_marital_married ?></option>
                                                <option value="3"><?= $select_marital_widower ?></option>
                                                <option value="4"><?= $select_marital_legally_separated ?></option>
                                                <option value="5"><?= $select_marital_divorced ?></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_marital_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="conjuge" class="col-sm-4 control-label"><?= $label_spouse_name ?>:</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="conjuge" class="form-control" disabled id="conjuge" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_firstname_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="sexo" class="col-sm-12 control-label"><?= $label_sex ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="sexo" class="form-select" id="sexo" required>
                                                <option value="" selected>...</option>
                                                <option value="1">
                                                    <?= $select_sex_male ?>
                                                </option>
                                                <option value="2">
                                                    <?= $select_sex_female ?>
                                                </option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="escolaridade" class="col-sm-12 control-label"><?= $label_schooling ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="escolaridade" class="form-select" id="escolaridade" required>
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
                                            <div class="invalid-feedback">
                                                <?= $info_schooling_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="escolaridade_status" class="col-sm-12 control-label"><?= $label_done ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="escolaridade_status" class="form-select" id="escolaridade_status" required>
                                                <option value="" selected>...</option>
                                                <option value="<?= $select_awesome_complete ?>"><?= $select_awesome_complete ?></option>
                                                <option value="<?= $select_awesome_incomplete ?>"><?= $select_awesome_incomplete ?></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12 col-md-3">
                                        <label class="col-12 control-label"><?= $label_have_a_son ?>?:</label>
                                        <div class="col-12">
                                            <select name="filho" onchange="possuiFilho()" class="form-select" id="filho" required>
                                                <option value="0" selected><?= $no ?></option>
                                                <option value="1"><?= $yes ?></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-3">
                                        <label class="col-12 control-label"><?= $label_quantity ?>:</label>
                                        <div class="input-group">
                                            <input type="text" name="num_filho" id="num_filho" class="form-control numero" disabled placeholder="Max.6" required>
                                            <button type="button" id="botao_filho" class="btn btn-info" disabled onclick="addFilho()"><i class="fas fa-plus"></i></button>
                                            <div class="invalid-feedback"><?= $info_add_son_required ?>.</div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-6 text-center" id="nfilhos_vazio">
                                        <h2 class="mt-4"><?= $info_register_son_empty ?></h2>
                                    </div>
                                    <div class="form-group col-12 col-md-6 text-center" style="display: none;" id="nfilhos">
                                        <h2 class="mt-4"><?= $info_register_son ?> <input type="text" name="totalFilho" id="totalFilho" readonly> <?= $info_son ?></h2>
                                    </div>
                                </div>

                                <div id="dependentes" class="row" style="display: none;">
                                    <h2 class="mt-5 mb-5 text-center"><?= $label_dependents ?></h2>
                                    <div id="addDependente">
                                        <!--area para add dependentes-->
                                    </div>
                                </div>

                                <h2 class="mt-5 mb-5 text-center"><?= $menu_religious_data ?></h2>
                                <div class="row">
                                    <div class="form-group col-12 col-md-2">
                                        <label class="col-12 control-label"><?= $label_communing ?>?:</label>
                                        <div class="col-12">
                                            <select name="comunga" class="form-select" id="comunga" onchange="com(this.value)" required>
                                                <option value="" selected>...</option>
                                                <option value="0"><?= $no ?></option>
                                                <option value="1"><?= $yes ?></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-3">
                                        <label for="data_batismo" class="col-12 control-label"><?= $label_baptism_date ?>:</label>
                                        <div class="col-12">
                                            <input name="data_batismo" maxlength="10" type="date" class="form-control" id="data_batismo" disabled required>
                                            <div class="invalid-feedback">
                                                <?= $info_date_required ?>.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-4">
                                        <label class="col-12 control-label"><?= $label_admission_type ?>:</label>
                                        <div class="col-12">
                                            <select name="tipo_admissao" class="form-select" onchange="meioAdmissao()" id="tipo_admissao" required>
                                                <option value="" selected>...</option>
                                                <option value="1"><?= $select_conversion ?></option>
                                                <option value="2"><?= $select_baptism ?></option>
                                                <option value="3"><?= $select_transfer ?></option>
                                                <option value="4"><?= $select_ministry_exchange ?></option>
                                                <option value="5"><?= $select_reconciliation ?></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-3">
                                        <label class="col-12 control-label"><?= $label_function_ministry ?>:</label>
                                        <div class="col-12">
                                            <!--IMPROTANTE = CRIAR CAMPO PARA ALIMENTAR A TABELA-->
                                            <select name="funcao_ministerio" class="form-select" id="funcao_ministerio" required>
                                                <option value="" selected>...</option>

                                                <?php
                                                $ministerial = "SELECT * FROM `select_ministerial_function`";
                                                $valor_busca = mysqli_query($conn, $ministerial);
                                                while ($row_nivel = mysqli_fetch_assoc($valor_busca)) {
                                                    echo '<option value ="' . $row_nivel['id'] . '">' . $row_nivel['function'] . '</option>';
                                                }
                                                ?>

                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div id="addIgreja" class="form-group col-12 collapse">
                                        <label for="igreja_anterior" class="col-12 control-label"><?= $label_previous_church ?>:</label>
                                        <div class="col-12">
                                            <input name="igreja_anterior" type="text" disabled class="form-control" id="igreja_anterior" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_church_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="mt-4 mb-5 text-center"><?= $menu_documents ?></h2>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="rg" class="col-12 control-label"><?= $label_Identity ?>:</label>
                                        <div class="col-12">
                                            <input name="rg" type="text" maxlength="15" class="form-control numero" id="rg" placeholder="..." value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="orgao_expd" class="col-12 control-label"><?= $label_shipping_department ?>:</label>
                                        <div class="col-12">
                                            <input name="rg_orgao" type="text" class="form-control" id="orgao_expd" placeholder="..." value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="rg_estado" class="col-sm-12 control-label"><?= $label_dispatch_state ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="rg_estado" class="form-control" id="rg_estado">
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
                                            <input name="rg_expedicao" maxlength="10" type="date" class="form-control" id="data_expd" placeholder="..." value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="pais_nasc" class="col-sm-12 control-label"><?= $label_country_of_birth ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="pais_nasc" class="form-select" id="pais_nasc" required>
                                                <option value="">...</option>
                                                <?php
                                                $buscaPais = mysqli_query($conn, "SELECT `id`,`country` FROM `select_country`;");
                                                while ($pais = mysqli_fetch_object($buscaPais)) :
                                                    echo "<option value='$pais->id'>$pais->country</option>";
                                                endwhile;
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="estado_nasc" class="col-sm-12 control-label"><?= $label_state_of_birth ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="estado_nasc" class="form-select" id="estado_nasc" required>
                                                <option value="">...</option>
                                                <?php /*
                                                        $buscaEstado = mysqli_query($conn, "SELECT `id`,`state` FROM `select_state`;");
                                                        while ($estado = mysqli_fetch_object($buscaEstado)):
                                                            echo "<option value='$estado->id'>$estado->state</option>";
                                                        endwhile;
                                                    */ ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cidade_nasc" class="col-sm-12 control-label"><?= $label_naturalness ?>:</label>
                                        <div class="col-sm-12">
                                            <select name="cidade_nasc" class="form-control" id="cidade_nasc" required>
                                                <option value="">...</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $info_select_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="nascimento" class="col-sm-12 control-label"><?= $label_date_of_birth ?>:</label>
                                        <div class="col-sm-12">
                                            <input name="data_nascimento" maxlength="10" type="date" class="form-control" id="nascimento" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_date_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cpf" class="col-md-4 control-label">CPF:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control cpf" id="cpf" placeholder="..." name="cpf" value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_cpf_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="mt-4 mb-4 text-center"><?= $menu_address ?></h2>
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
                                            <input name="rua" type="text" class="form-control" id="rua" size="60" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_street_required ?>.
                                            </div>
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
                                    <div class="form-group col-md-3">
                                        <label for="complemento" class="col-12 control-label"><?= $label_complement ?>:</label>
                                        <div class="col-md-12">
                                            <input name="complemento" type="text" class="form-control" id="complemento" placeholder="..." value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="bairro" class="col-md-6 control-label"><?= $label_neighborhood ?>:</label>
                                        <div class="col-md-12">
                                            <input name="bairro" type="text" class="form-control" id="bairro" size="40" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_neighborhood_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label for="cidade" class="col-sm-12 control-label"><?= $label_city ?>:</label>
                                        <div class="col-sm-12">
                                            <input name="cidade" class="form-control" type="text" id="cidade" size="40" placeholder="..." required>
                                            <div class="invalid-feedback">
                                                <?= $info_city_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="uf_cep" class="col-sm-12 control-label"><?= $label_state ?>:</label>
                                        <div class="col-sm-12">
                                            <input name="uf_cep" type="text" id="uf_cep" size="2" class="form-control" placeholder="..." required>
                                            <div class="invalid-feedback">
                                                <?= $info_state_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="mt-4 mb-4 text-center"><?= $menu_contact ?></h2>
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
                                            <input name="celular" type="text" class="form-control celular_com_9" id="celular" placeholder="..." value="" required>
                                            <div class="invalid-feedback">
                                                <?= $info_cell_required ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email" class="col-sm-12 control-label"><?= $label_email ?>:</label>
                                        <div class="col-sm-12">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="..." value="">
                                            <div class="invalid-feedback">
                                                <?= $info_email_valid ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="emailc" class="col-sm-12 control-label"><?= $label_confirm_email ?>:</label>
                                        <div class="col-sm-12">
                                            <input name="emailc" onblur="verificaEmail(this.value)" type="email" class="form-control" id="emailc" placeholder="..." value="">
                                            <div class="invalid-feedback">
                                                <?= $info_email_valid ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center mt-4">
                                        <button type="reset" class="btn btn-form btn-warning"><?= $button_clean ?></button>
                                    </div>
                                    <div class="col-12 col-sm-6 text-center mt-4">
                                        <button id="btn-cad" type="submit" class="btn btn-form btn-success"><?= $button_register ?></button>
                                    </div>
                                </div>
                            </div><!-- /.card -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Conteudo -->

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
    <!-- SweetAlert2 -->
    <script src="../../../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../../dist/js/adminlte.min.js"></script>
    <!--JS Busca CEP-->
    <script src="../../../../dist/js/pages/busca_cep.js"></script>
    <!--JS Mask-->
    <script src="../../../../dist/js/pages/jquery.mask.min.js"></script>
    <script src="../../../../dist/js/pages/mascara.js"></script>
    <script src="../../../../dist/js/pages/formulario.js"></script>
    <script>
        $(document).keydown(function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });

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
            for (const file of this.files) {
                if (file.type === 'image/png' || file.type === 'image/jpeg') {
                    $('#btn-cad').removeAttr('disabled','true');
                    showThumbnail(this.files);
                }else if (file.size > 3145728) {
                    $('#btn-cad').attr('disabled','true');
                    $('.img-thumbnail').attr('src', '../../../../dist/img/background/bg-box/boxed-bg-alert.jpg');
                    alert('Tamanho MAX do Arquivo é de 3Mb')
                }else{
                    $('#btn-cad').attr('disabled', '');
                    $('.img-thumbnail').attr('src', '../../../../dist/img/background/bg-box/boxed-bg-alert.jpg');
                    alert('Tipo de Arquivo Invalido')
                }
                /*console.log("Filename: ", file.name);
                console.log("Type: ", file.type);
                console.log("Size: ", file.size, " bytes");*/
            }
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

        //prenche com zero o campo
        function pad(str) {
            const resto = 5 - String(str).length;
            document.querySelector('#matricula').value = '0'.repeat(resto > 0 ? resto : '0') + str
        }
        pad("<?= $mat ?>")

        //validando e salvando formulário
        const forms = $('.needs-validation')

        Array.from(forms).forEach((form) => {
            form.addEventListener("submit", e => {
                    e.preventDefault();
                    if (!form.checkValidity()) {
                        form.classList.add("was-validated");
                    } else {
                        const data = new FormData(e.target); // Valores do formulário
                        var xhr = new XMLHttpRequest();
                        xhr.withCredentials = true;
                        xhr.addEventListener("readystatechange", function() {
                            if (this.responseText == 1) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: '<?= $info_register_member_save ?>.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                setTimeout(() => {
                                    forms.removeClass('was-validated');
                                    $('.img-thumbnail').attr('src', '../../../../dist/img/background/bg-box/boxed-bg.jpg');
                                    document.querySelector('form').reset();
                                }, 1700);
                            } else if(this.responseText == 2){
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: '<?= $info_erro_register_member_exist ?>.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }else {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: '<?= $info_erro_register_member ?>.',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        });
                        xhr.open("POST", "../../../../php/reg_member.php");
                        xhr.send(data);
                    }
                },
                false
            );
        });

        // botão limpar campos
        $('[type=reset]').on('click', () => {
            forms.removeClass("was-validated");
        })

        //prevent sair page
        /*window.addEventListener('beforeunload', e => {
            e.preventDefault();
            e.returnValue = '';
        });*/
    </script>
</body>

</html>