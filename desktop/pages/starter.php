<?php
require_once '../../assets/lang/pt-br.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    //Google Font: Source Sans Pro
        require_once '../../assets/head/font_google.php';
    
    // Font Awesome Icons 
        require_once '../../assets/head/font_awesome.php';
    ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="content">
    <!-- Page header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1 class="m-0">Name Page</h1>
          </div>
        </div>
      </div>
    </div><!-- /.content-header -->
    <!-- Conteudo -->
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="d-none d-sm-block col-12 col-sm-6">
          <img src="../../dist/img/boxed-bg.jpg" alt="foto" class="img-thumbnail" style="max-width: 250px; height: 300px;">
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group col-sm-6">
            <label for="matricula" class="col-md-4 control-label">*Matricula:</label>
            <div class="col-md-12">
              <input type="text" class="form-control" id="matricula" name="matricula" readonly>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="form-group col-sm-12">
            <label for="nome" class="col-md-10 control-label">*Nome:</label>
            <div class="col-md-12">
              <input type="text" class="form-control" id="nome" placeholder="..." name="nome" autofocus value="">
            </div>
          </div>
          <div class="form-group col-sm-12">
            <label for="sobrenome" class="col-md-10 control-label">*Sobrenome:</label>
            <div class="col-md-12">
              <input type="text" class="form-control" id="sobrenome" placeholder="..." name="sobrenome" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="pai" class="col-sm-4 control-label">*Nome do Pai:</label>
          <div class="col-sm-12">
            <input name="nome_pai" type="text" class="form-control" id="pai" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="mae" class="col-sm-4 control-label">*Nome da Mãe:</label>
          <div class="col-sm-12">
            <input type="text" name="nome_mae" class="form-control" id="mae" placeholder="..." value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="sexo" class="col-sm-12 control-label">*Sexo:</label>
          <div class="col-sm-12">
            <select name="sexo" class="form-control" id="sexo">
              <option value="">...</option>
              <option value="1">Masculino</option>
              <option value="2">Feminino</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="cod_escolaridade" class="col-sm-12 control-label">*Escolaridade:</label>
          <div class="col-sm-12">
            <select name="cod_escolaridade" class="form-control" id="cod_escolaridade">
              <option value="">...</option>
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
          <label for="cod_estado_civil" class="col-sm-12 control-label">*Estado Civil:</label>
          <div class="col-sm-12">
            <select name="cod_estado_civil" class="form-control" id="cod_estado_civil">
              <option value="">...</option>
              <option value="1">Solteiro (a)</option>
              <option value="2">Casado (a)</option>
              <option value="3">Viúvo (a)</option>
              <option value="4">Separado (a) Judicialmente</option>
              <option value="5">Divorciado (a)</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-12 col-md-6">
          <div class="col-sm-12 btn-group">
            <button class="btn  btn-primary col active"><span>Tem filho(s)?</span></button>
            <button class="btn  btn-outline-primary col mostra"><span>Sim</span></button>
            <button class="btn  btn-outline-primary col esconde"><span>Não</span></button>
          </div>
        </div>

        <div class="form-group col-12 col-md-3 campo-de-efeito">
          <div class="col-sm-12 input-group">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary">Qtde:</span>
            </div>
            <input type="text" id="filho" placeholder="Max 6" class="form-control numero">
            <div class="input-group-append">
              <a type="button" class="input-group-text bg-success adicionar">Add</a>
            </div>
          </div>
        </div>

        <div id="area-criacao" class="form-group col-12 col-md-3">
          <!--Area de criação dos INPUT do filho-->
        </div>
      </div>
      <h2 class="title-form">Documentação</h2>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="identidade" class="col-sm-2 control-label">*Identidade:</label>
          <div class="col-sm-12">
            <input name="rg" type="text" class="form-control numero" id="identidade" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="orgao_expd" class="col- sm-12 control-label">*Órgão Expedidor:</label>
          <div class="col-sm-12">
            <input name="rg_orgao" type="text" class="form-control" id="orgao_expd" placeholder="..." value="">
          </div>

        </div>

        <div class="form-group col-md-4">
          <label for="estado_expd" class="col-sm-12 control-label">*Estado Expedidor:</label>
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
          <label for="data_expd" class="col-sm-12 control-label">*Data Expedição:</label>
          <div class="col-sm-12">
            <input name="rg_expedicao" type="date" class="form-control" id="data_expd" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="nacionalidade" class="col-sm-12 control-label">*Nacionalidade:</label>
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
          <label for="uf_nascimento" class="col-sm-12 control-label">*UF Nascimento:</label>
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
          <label for="naturalidade" class="col-sm-12 control-label">*Naturalidade:</label>
          <div class="col-sm-12">
            <!-- Adicionar um select que traz os dados de acordo com o código do estado -->
            <select name="naturalidade" class="form-control" id="naturalidade">
              <option value="">...</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="nascimento" class="col-sm-12 control-label">*Data Nascimento:</label>
          <div class="col-sm-12">
            <input name="data_nascimento" type="date" class="form-control" id="nascimento" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="cpf" class="col-md-4 control-label">*CPF:</label>
          <div class="col-md-12">
            <input type="text" class="form-control cpf" id="cpf" placeholder="..." name="cpf" value="">
          </div>
        </div>
      </div>

      <h2 class="title-form">Endereço</h2>
      <div class="row">
        <div class="form-group col-md-3">
          <label for="cep" class="col-md-2 control-label">*CEP:</label>
          <div class="col-md-12">
            <input name="cep" type="text" class="form-control cep" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="...">
          </div>
        </div>
        <div class="form-group col-md-9">
          <label for="rua" class="col-md-6 control-label">*Rua:</label>
          <div class="col-md-12">
            <input name="rua" type="text" class="form-control" id="rua" size="60" placeholder="..." value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
          <label for="numero" class="col-md-2 control-label">*Número:</label>
          <div class="col-md-12">
            <input name="numero" type="text" class="form-control" id="numero" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-9">
          <label for="bairro" class="col-md-6 control-label">*Bairro:</label>
          <div class="col-md-12">
            <input name="bairro" type="text" class="form-control" id="bairro" size="40" placeholder="..." value="">
          </div>
        </div>

        <div class="form-group col-md-12">
          <label for="complemento" class="col-md-6 control-label">Complemento:</label>
          <div class="col-md-12">
            <input name="complemento" type="text" class="form-control" id="complemento" placeholder="..." value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="estado" class="col-sm-12 control-label">*Estado:</label>
          <div class="col-sm-12">
            <input name="uf" type="text" id="uf" size="2" class="form-control" placeholder="...">
          </div>
        </div>
        <div class="form-group col-md-8">
          <label for="cidade" class="col-sm-12 control-label">*Cidade:</label>
          <div class="col-sm-12">
            <input name="cidade" class="form-control" type="text" id="cidade" size="40" placeholder="...">
          </div>
        </div>
      </div>
      <h2 class="title-form">Contato</h2>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="telefone" class="col-sm-12 control-label">Telefone:</label>
          <div class="col-sm-12">
            <input name="telefone" type="text" class="form-control phone_with_ddd" id="telefone" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="celular" class="col-sm-12 control-label">*Celular:</label>
          <div class="col-sm-12">
            <input name="celular" type="text" class="form-control celular_com_9" id="celular" placeholder="..." value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="email" class="col-sm-12 control-label">*Email:</label>
          <div class="col-sm-12">
            <input name="email" type="email" class="form-control" id="email" placeholder="..." value="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="emailc" class="col-sm-12 control-label">*Confirmação email:</label>
          <div class="col-sm-12">
            <input name="emailc" type="email" class="form-control" id="emailc" placeholder="..." value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <div class="col-md-12">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" id="confirma_dados" name="confirma_dados">
              <label for="confirma_dados" class="custom-control-label">
                Confirmo que todos os dados apresentados estão preenchidos corretamente.</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <button style="margin-top: 10px;" onclick="enviaform" type="button" class="btn btn-block btn-success btn_form_continue">Cadastrar
        </button>
      </div>
      </form>
    </div>
    <!-- /.Conteudo -->
  </div><!-- /.content -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>