<?php
require_once '../../../../assets/lang/pt-br.php';
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
      <h2 class="title-form"><?= $menu_information ?></h2>
      <div class="row align-items-center">
        <div class="d-none d-sm-block col-12 col-md-6 text-center">
          <img src="../../../../dist/img/background/bg-box/boxed-bg.jpg" alt="foto" class="img-thumbnail" style="max-width: 250px; height: 300px;">
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
              <input type="text" class="form-control" id="nome" placeholder="..." name="nome" autofocus value="">
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
              <option value="1">Solteiro (a)</option>
              <option value="2">Casado (a)</option>
              <option value="3">Viúvo (a)</option>
              <option value="4">Separado (a) Judicialmente</option>
              <option value="5">Divorciado (a)</option>
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
              <option value="1">Masculino</option>
              <option value="2">Feminino</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="cod_escolaridade" class="col-sm-12 control-label"><?= $label_schooling ?>:</label>
          <div class="col-sm-12">
            <select name="cod_escolaridade" class="form-control" id="cod_escolaridade">
              <option value="" selected>...</option>
              <option value="1">Alfabetizado</option>
              <option value="2">4ª Série do Ensino Fundamental</option>
              <option value="3">Ensino Fundamental</option>
              <option value="4">Ensino Médio</option>
              <option value="5">Ensino Técnico</option>
              <option value="6">Ensino Superior</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="escolaridade_status" class="col-sm-12 control-label"><?= $label_done ?>:</label>
          <div class="col-sm-12">
            <select name="escolaridade_status" class="form-control" id="escolaridade_status">
              <option value="" selected>...</option>
              <option value="1">Completo</option>
              <option value="2">Incompleto</option>
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
          <h2 class="mt-4"><?=$info_register_son?></h2>
        </div>
      </div>

      <h2 class="title-form mt-2"><?= $menu_religious_data ?></h2>
      
      <div class="row">
        <div class="form-group col-12 col-md-2">
          <label class="col-12 control-label"><?=$label_communing?>?:</label>
          <div class="col-12">
            <select name="comunga" onchange="comunga()" class="form-control" id="comunga">
              <option value="" selected>...</option>
              <option value="0"><?= $no ?></option>
              <option value="1"><?= $yes ?></option>
            </select>
          </div>
        </div>

        <div class="form-group col-12 col-md-3">
          <label for="data_batismo" class="col-12 control-label"><?=$label_baptism_date?>:</label>
          <div class="col-12">
            <input name="data_batismo" type="date" class="form-control" id="data_batismo" disabled>
          </div>
        </div>

        <div class="form-group col-12 col-md-4">
          <label class="col-12 control-label"><?=$label_admission_type?>:</label>
          <div class="col-12">
            <select name="tipo_admissao" class="form-control" onchange="meioAdmissao()" id="tipo_admissao">
              <option value="" selected>...</option>
              <option value="1">Conversão e Batismo</option>
              <option value="2">Batismo</option>
              <option value="3">Transferência</option>
              <option value="4">Troca de Ministério</option>
              <option value="5">Reconciliação</option>
            </select>
          </div>
        </div>

        <div class="form-group col-12 col-md-3">
          <label class="col-12 control-label"><?=$label_function_ministry?>:</label>
          <div class="col-12">
            <select name="funcao_ministerio" class="form-control" id="funcao_ministerio">
              <option value="" selected>...</option>
              <option value="1">Membro</option>
              <option value="2">Auxiliar</option>
              <option value="3">Diácono (iza)</option>
              <option value="4">Presbítero</option>
              <option value="5">Evangelista</option>
              <option value="6">Pastor</option>
              <option value="7">Missionário (a)</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="addIgreja" class="form-group col-12 collapse">
          <label for="igreja_anterior" class="col-12 control-label"><?=$label_previous_church?>:</label>
          <div class="col-12">
            <input name="igreja_anterior" type="text" class="form-control" id="igreja_anterior" placeholder="..." value="">
          </div>  
        </div>
      </div>
      <h2 class="title-form"><?= $menu_documents ?></h2>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="identidade" class="col-12 control-label"><?= $label_Identity ?>:</label>
          <div class="col-12">
            <input name="rg" type="text" class="form-control numero" id="identidade" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="orgao_expd" class="col-12 control-label"><?= $label_shipping_department ?>:</label>
          <div class="col-12">
            <input name="rg_orgao" type="text" class="form-control" id="orgao_expd" placeholder="..." value="">
          </div>
        </div>

        <div class="form-group col-md-4">
          <label for="estado_expd" class="col-sm-12 control-label"><?= $label_dispatch_state ?>:</label>
          <div class="col-sm-12">
            <select name="rg_estado" class="form-control" id="estado_expd">
              <option value="">...</option>
              <option value="1">AC</option>
              <option value="2">AL</option>
              <option value="3">AM</option>
              <option value="4">AP</option>
              <option value="5">BA</option>
              <option value="6">CE</option>
              <option value="7">DF</option>
              <option value="8">ES</option>
              <option value="9">GO</option>
              <option value="10">MA</option>
              <option value="11">MG</option>
              <option value="12">MS</option>
              <option value="13">MT</option>
              <option value="14">PA</option>
              <option value="15">PB</option>
              <option value="16">PE</option>
              <option value="17">PI</option>
              <option value="18">PR</option>
              <option value="19">RJ</option>
              <option value="20">RN</option>
              <option value="21">RO</option>
              <option value="22">RR</option>
              <option value="23">RS</option>
              <option value="24">SC</option>
              <option value="25">SE</option>
              <option value="26">SP</option>
              <option value="27">TO</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="data_expd" class="col-sm-12 control-label"><?= $label_shipping_date ?>:</label>
          <div class="col-sm-12">
            <input name="rg_expedicao" type="date" class="form-control" id="data_expd" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="nacionalidade" class="col-sm-12 control-label"><?= $label_nationality ?>:</label>
          <div class="col-sm-12">
            <select name="nacionalidade" class="form-control" id="nacionalidade" onchange="verificaNacionalidade(this.value)">
              <option value="">...</option>
              <option value="1">
                Brasileira
              </option>
              <option value="2">
                Estrangeira
              </option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="uf_nascimento" class="col-sm-12 control-label"><?= $label_state_of_birth ?>:</label>
          <div class="col-sm-12">
            <!-- Adicionar um select que traz os dados de acordo com o código do estado -->
            <select name="uf_nascimento" class="form-control" id="uf_nascimento" onchange="buscaCidades(this.value, 'naturalidade')">
              <option value="">...</option>
              <option value="1">ACRE</option>
              <option value="2">ALAGOAS</option>
              <option value="3">AMAZONAS</option>
              <option value="4">AMAPA</option>
              <option value="5">BAHIA</option>
              <option value="6">CEARA</option>
              <option value="7">DISTRITO FEDERAL</option>
              <option value="8">ESPIRITO SANTO</option>
              <option value="9">GOIAS</option>
              <option value="10">MARANHAO</option>
              <option value="11">MINAS GERAIS</option>
              <option value="12">MATO GROSSO DO SUL</option>
              <option value="13">MATO GROSSO</option>
              <option value="14">PARA</option>
              <option value="15">PARAIBA</option>
              <option value="16">PERNAMBUCO</option>
              <option value="17">PIAUI</option>
              <option value="18">PARANA</option>
              <option value="19">RIO DE JANEIRO</option>
              <option value="20">RIO GRANDE DO NORTE</option>
              <option value="21">RONDONIA</option>
              <option value="22">RORAIMA</option>
              <option value="23">RIO GRANDE DO SUL</option>
              <option value="24">SANTA CATARINA</option>
              <option value="25">SERGIPE</option>
              <option value="26">SAO PAULO</option>
              <option value="27">TOCANTINS</option>

            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="naturalidade" class="col-sm-12 control-label"><?= $label_naturalness ?>:</label>
          <div class="col-sm-12">
            <!-- Adicionar um select que traz os dados de acordo com o código do estado -->
            <select name="naturalidade" class="form-control" id="naturalidade">
              <option value="">...</option>
            </select>
          </div>
        </div>
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

      <h2 class="title-form"><?= $menu_address ?></h2>
      <div class="row">
        <div class="form-group col-md-3">
          <label for="cep" class="col-md-2 control-label"><?= $label_zip_code ?>:</label>
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
          <label for="numero" class="col-md-2 control-label"><?= $label_number ?>:</label>
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
      <h2 class="title-form"><?= $menu_contact ?></h2>
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
            <input name="emailc" type="email" class="form-control" id="emailc" placeholder="..." value="">
          </div>
        </div>
      </div>
      <div class="row">
        <button style="margin-top: 10px;" onclick="enviaform()" type="button" class="btn btn-block btn-success btn_form_continue"><?= $button_register ?></button>
      </div>
      </form>
    </div>
    <!-- /.Conteudo -->

    <!-- Modal default-->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?=$label_add_son?></h5>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><?=$button_close?></button>
            <button type="button" onclick='addCampo()' class="btn btn-primary"><?=$button_confirm?></button>
          </div>
        </div>
      </div>
    </div><!-- /Modal -->

    <!--Modal Error-->
    <div class="modal fade" id="modal-error">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?=$label_add_son?></h5>
          </div>
          <div class="modal-body">
            <h3><?=$info_null_son?></h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><?=$button_close?></button>
          </div>
        </div>
      </div>
    </div><!-- /Modal Error-->

    <!--Modal Danger-->
    <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?=$label_add_son?></h5>
          </div>
          <div class="modal-body">
            <h3><?=$info_number_son?></h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><?=$button_close?></button>
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
</body>

</html>