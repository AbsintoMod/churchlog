<?php
session_start();

if (empty($_SESSION['id'])) {
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location:../../../../login/home.php");
}


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
    <link rel="stylesheet" href="../../../../dist/css/adminlte.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../dist/css/pages/main.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../../plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
                                                    <h3>150</h3>

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
                                    <p>lista de membros ou outra coisa</p>
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
                                    <h2 class="title-form"><?=$label_new_register?></h2>
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
                                            <button type="button" class="btn bg-info btn-lg btn-block"><?=$button_register?></button>
                                        </div>
                                    </div><!--./Register New-->
                                    <!--Search-->
                                    <h2 class="title-form"><?=$label_search?></h2>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="pesquisa_departamento" class="col-12 control-label"><?= $label_search ?>:</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="pesquisa_departamento" placeholder="..." name="pesquisa_departamento" value="">
                                            </div>
                                        </div>
                                    </div><!--./ Search-->
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
                                    <p>aba protocolo</p>
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
                                <h5 class="modal-title"><?=$label_search_leader?></h5>
                            </div>
                            <div class="modal-body">
                                <select id="select_leader" style="width: 100%"></select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><?=$button_close?></button>
                                <button type="button" onclick="addNomeLider()" class="btn btn-primary"><?=$button_confirm?></button>
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
            <script>
                $(document).ready(function() {
                    // Summernote
                    $('.summernote').summernote({});
                    
                    //Show Modal register leader member
                    $('#nome_responsavel').focus(()=>{
                        $('#modal-leader').modal('show');
                    });
                    //Search leader in select modal
                    $('#modal-leader').on('show.bs.modal',()=>{
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

                function addNomeLider(){
                        let valor = $('#select_leader').val()
                        console.log(valor);
                        $('#nome_responsavel').val = valor;
                    }
            </script>
</body>

</html>