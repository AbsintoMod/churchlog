<?php
session_start();

if (empty($_SESSION['id'])) {
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location:../../../../login/home.php");
}


$lang = $_SESSION['lang'];
require_once '../../../../assets/lang/' . $lang . '.php';
require_once '../../../../php/const_conn.php';
//require_once '../../../../assets/lang/pt-br.php';
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../../dist/css/adminlte.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../../dist/css/pages/main.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../../plugins/summernote/summernote-bs4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <style>
    td a {
      color: #FFFFFF;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Content -->
  <div class="content">
    <!-- Page header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1 class="m-0"><?= $menu_secretariat ?></h1>
          </div>
        </div>
      </div>
    </div><!-- /.page header -->
    <!-- conteudo -->

    <!-- container-fluid -->
    <div class="container-fluid">
      <!-- row -->
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="tab-membro" data-toggle="pill" href="#tab-membro-tab" role="tab" aria-controls="tab-membro-tab" aria-selected="true"><?= $menu_members ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-departamento" data-toggle="pill" href="#tab-departamento-tab" role="tab" aria-controls="tab-departamento-tab" aria-selected="false"><?= $menu_department ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-carteira-e-impresso" data-toggle="pill" href="#tab-carteira-e-impresso-tab" role="tab" aria-controls="tab-carteira-e-impresso-tab" aria-selected="false"><?= $menu_membership_card_printed ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-evento" data-toggle="pill" href="#tab-evento-tab" role="tab" aria-controls="tab-evento-tab" aria-selected="false"><?= $menu_event ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-patrimonio" data-toggle="pill" href="#tab-patrimonio-tab" role="tab" aria-controls="tab-patrimonio-tab" aria-selected="false"><?= $menu_patrimony ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-protocolo" data-toggle="pill" href="#tab-protocolo-tab" role="tab" aria-controls="tab-protocolo-tab" aria-selected="false"><?= $menu_protocol ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-documento" data-toggle="pill" href="#tab-documento-tab" role="tab" aria-controls="tab-documento-tab" aria-selected="false"><?= $menu_document ?></a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="tab-membro-tab" role="tabpanel" aria-labelledby="tab-membro">
                  <!-- Line Box -->
                  <div class="row">
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-info">
                        <div class="inner">
                          <?php
                          $sql = "SELECT COUNT(*) FROM `members`;";
                          $count = mysqli_query($conn, $sql);
                          $counter = mysqli_fetch_array($count);
                          $counter = $counter[0]
                          ?>
                          <h3><?= $counter ?></h3>

                          <p><?= $info_member_total ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-person"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>53<sup style="font-size: 20px">%</sup></h3>

                          <p><?= $info_frequency_member ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>44</h3>

                          <p><?= $info_new_converts ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-person"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>65</h3>

                          <p><?= $info_visitor ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div><!-- ./line box -->
                  <div class="row">
                    <div class="col-12 col-md-3">
                      <a href="./formulary_new_member.php" class="btn bg-info btn-lg btn-block"><?= $button_register ?></a>
                      <a href="#" class="btn bg-info btn-lg btn-block"><?= $button_update ?></a>
                      <a href="#" class="btn bg-info btn-lg btn-block"><?= $button_exonerate ?></a>
                      <a href="#" class="btn bg-info btn-lg btn-block"><?= $button_functionary ?></a>
                    </div>
                    <div class="col-12 col-md-9">
                      <p>BANNER COM ANIVERSARIO E EVENTOS</p>
                    </div>
                  </div>
                  <div class="card-header">
                    <h2 class="mt-3 mb-3 text-center"><?= $info_member_list ?></h2>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><?= $label_registration ?></th>
                        <th><?= $label_name ?></th>
                        <th><?= $label_function_ministry ?></th>
                        <th><?= $label_date_register ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT id,CONCAT(first_name, ' ', second_name) AS name, `id_select_ministerial_function`, `date_register` FROM members WHERE `status` = 1";
                      $resultado = mysqli_query($conn, $sql);
                      $i = 1;
                      while ($dados = mysqli_fetch_array($resultado)) {
                        $id = $dados['id'];
                        $name = $dados['name'];

                        //busca função ministerial
                        $sql = "SELECT `function` FROM `select_ministerial_function` WHERE `id` = " . $dados['id_select_ministerial_function'] . "";
                        $result = mysqli_query($conn, $sql);
                        $func_minister = mysqli_fetch_array($result);

                        //date formater
                        $register = explode(' ', $dados['date_register']);
                        $register = explode('-', $register[0]);
                        $register = $register[2] . '/' . $register[1] . '/' . $register[0];
                      ?>
                        <tr>
                          <td><?= $id ?></td>
                          <td><a href="./formulary_update_member.php?id=<?= $id ?>"><?= $name ?></a></td>
                          <td><?= $func_minister['function'] ?></td>
                          <td><?= $register ?></td>
                        </tr>
                      <?php
                        $i++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="tab-departamento-tab" role="tabpanel" aria-labelledby="tab-departamento">
                  <!-- Line Box -->
                  <div class="row">
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>150</h3>

                          <p><?= $menu_department ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>5</h3>

                          <p><?= $info_sectors ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>44</h3>

                          <p><?= $menu_groups ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>65</h3>

                          <p><?= $info_member_total ?></p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer"><?= $info_more_info ?> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div><!-- ./line box -->
                  <!--Register New-->
                  <h2 class="title-form"><?= $label_new_register ?></h2>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="nome_cadastro" class="col-12 control-label"><?= $label_name ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="nome_cadastro" placeholder="..." name="nome_cadastro" value="">
                      </div>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="nome_responsavel" class="col-12 control-label"><?= $label_accountable ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="nome_responsavel" placeholder="..." name="nome_responsavel" value="">
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="tipo_dep" class="col-12 control-label"><?= $label_type ?>:</label>
                      <div class="col-sm-12">
                        <select name="tipo_dep" class="form-control" id="tipo_dep">
                          <option value="" selected>...</option>
                          <option value="1">Setor</option>
                          <option value="2">Departamento</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3 mt-4">
                      <button type="button" class="btn bg-info btn-lg btn-block"><?= $button_register ?></button>
                    </div>
                  </div>
                  <!--./Register New-->
                  <!--Search-->
                  <h2 class="title-form"><?= $label_search ?></h2>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="pesquisa_departamento" class="col-12 control-label"><?= $label_search ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="pesquisa_departamento" placeholder="..." name="pesquisa_departamento" value="">
                      </div>
                    </div>
                  </div>
                  <!--./ Search-->
                </div>
                <div class="tab-pane fade" id="tab-carteira-e-impresso-tab" role="tabpanel" aria-labelledby="tab-carteira-e-impresso">
                  <p>aba carteira-e-impresso</p>
                </div>
                <div class="tab-pane fade" id="tab-evento-tab" role="tabpanel" aria-labelledby="tab-evento">
                  <p>aba evento</p>
                </div>
                <div class="tab-pane fade" id="tab-patrimonio-tab" role="tabpanel" aria-labelledby="tab-patrimonio">
                  <p>aba patrimonio</p>
                </div>
                <div class="tab-pane fade" id="tab-protocolo-tab" role="tabpanel" aria-labelledby="tab-protocolo">

                  <div class="row my-3">
                    <div class="form-group col-12 text-center">
                      <h2 class="col-12 "><?= $label_protocol ?></h2>
                      <h3><?php echo  date("d/m/Y") . ' - ' . date("h:i a"); ?></h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12 col-sm-6">
                      <h2 class="col-12 text-center"><?= $label_number ?></h2>

                    </div>
                    <div class="form-group col-12 col-sm-6">
                      <h2 class="col-12 text-center"><?= $label_code ?></h2>

                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12 col-sm-6">
                      <label for="solicitante" class="col-12 control-label"><?= $label_applicant ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="solicitante" placeholder="..." name="solicitante" value="">
                      </div>
                    </div>
                    <div class="form-group col-12 col-sm-6">
                      <label for="destinatario" class="col-12 control-label"><?= $label_target_sector ?>:</label>
                      <div class="col-12">
                        <select class="form-control" id="destinatario" name="destinatario">
                          <option value="">Selecionar o Setor</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row align-items-end">
                    <div class="form-group col-12 col-lg-1">
                      <label for="numero_item1" class="col-12 control-label"><?= $label_item ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="numero_item1" placeholder="..." name="numero_item1" readonly value="1">
                      </div>
                    </div>
                    <div class="form-group col-12 col-lg-4">
                      <label for="item1" class="col-12 control-label"><?= $label_name ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="item1" placeholder="..." name="item1" value="">
                      </div>
                    </div>
                    <div class="form-group col-12 col-lg-2">
                      <label for="quantidade1" class="col-12 control-label"><?= $label_quantity ?>:</label>
                      <div class="col-12">
                        <input type="number" class="form-control" id="quantidade1" placeholder="..." name="quantidade1" value="">
                      </div>
                    </div>
                    <div class="form-group col-12 col-lg-5">
                      <label for="detalhe1" class="col-12 control-label"><?= $label_detail ?>:</label>
                      <div class="col-12">
                        <input type="text" class="form-control" id="detalhe1" placeholder="..." name="detalhe1" value="">
                      </div>
                    </div>
                  </div>

                  <div id="novoItem">
                    <!--criar novo item do protocolo-->
                  </div>

                  <div class="row justify-content-center">
                    <div class="form-group text-center col-12 col-sm-3">
                      <button onclick="addNewItem()" class="btn bg-info btn-block btn-lg"><?= $button_new ?></button>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group text-center col-12 col-sm-3">
                      <button class="btn bg-warning btn-block btn-lg"><?= $button_cancel ?></button>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group text-center col-12 col-sm-3">
                      <button class="btn bg-success btn-block btn-lg"><?= $button_save ?></button>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="tab-documento-tab" role="tabpanel" aria-labelledby="tab-documento">
                  <p>aba documento</p>
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <!-- Modal search leader-->
        <div class="modal fade" id="modal-leader">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><?= $label_search_leader ?></h5>
              </div>
              <div class="modal-body">
                <select id="select_leader" style="width: 100%"></select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?= $button_close ?></button>
                <button type="button" onclick="addNomeLider()" class="btn btn-primary"><?= $button_confirm ?></button>
              </div>
            </div>
          </div>
        </div><!-- /Modal -->

        <!-- /.conteudo -->
      </div><!-- /.content -->

      <!-- jQuery -->
      <script src="../../../../plugins/jquery/jquery.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../../../dist/js/adminlte.min.js"></script>
      <!-- Summernote -->
      <script src="../../../../plugins/summernote/summernote-bs4.min.js"></script>
      <!-- Select2 -->
      <script src="../../../../plugins/select2/js/select2.full.min.js"></script>
      <!-- DataTables  & Plugins -->
      <script src="../../../../plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="../../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="../../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="../../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="../../../../plugins/jszip/jszip.min.js"></script>
      <script src="../../../../plugins/pdfmake/pdfmake.min.js"></script>
      <script src="../../../../plugins/pdfmake/vfs_fonts.js"></script>
      <script src="../../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="../../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="../../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

      <script>
        $(document).ready(function() {
          // Summernote
          $('.summernote').summernote({});

          //Show Modal register leader member
          $('#nome_responsavel').focus(() => {
            $('#modal-leader').modal('show');
          });
          //Search leader in select modal
          $('#modal-leader').on('show.bs.modal', () => {
            $('#select_leader').select2({
              theme: 'bootstrap4',
              ajax: {
                url: 'https://api.github.com/search/code',
                dataType: 'json'
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
              }
            });
          });
        });

        $(function() {
          $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function addNomeLider() {
          let valor = $('#select_leader').val()
          console.log(valor);
          $('#nome_responsavel').val = valor;
        }

        //item = variavel que identifica a div e os inputs
        var item = 2;

        function addNewItem() {

          var div = document.querySelector('#novoItem');

          var element = document.createElement('div');
          element.classList = "row align-items-end";
          element.id = 'div' + item;
          element.innerHTML = `
                        <div class="form-group col-12 col-lg-1">
                            <label for="numero_item${item}" class="col-12 control-label"><?= $label_item ?>:</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="numero_item${item}" placeholder="..." name="numero_item${item}" readonly value="${item}">
                            </div>
                        </div>
                        <div class="form-group col-12 col-lg-4">
                            <label for="item${item}" class="col-12 control-label"><?= $label_name ?>:</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="item${item}" placeholder="..." name="item${item}" value="">
                            </div>
                        </div>
                        <div class="form-group col-12 col-lg-2">
                            <label for="quantidade${item}" class="col-12 control-label"><?= $label_quantity ?>:</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="quantidade${item}" placeholder="..." name="quantidade${item}" value="">
                            </div>
                        </div>
                        <div class="form-group col-12 col-lg-4">
                            <label for="detalhe${item}" class="col-12 control-label"><?= $label_detail ?>:</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="detalhe${item}" placeholder="..." name="detalhe${item}" value="">
                            </div>
                        </div>
                        <div class="form-group col-12 col-lg-1">
                            <button onclick="removeNewItem(${item})" class="btn bg-danger btn-block"><?= $button_exclude ?> <?= $label_item ?></button>
                        </div>
                    `;
          ++item
          div.appendChild(element);
        }

        function removeNewItem(item) {
          var elem = document.getElementById('div' + item);
          elem.parentNode.removeChild(elem);
        }
      </script>
</body>

</html>