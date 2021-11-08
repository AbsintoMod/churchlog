<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Imagem tamanho(16x16) exteção(.ico)-->
  <link rel="shortcut icon" type="image/x-icon" href="../dist/img/logo.png">
  <title>Church Admin</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode" data-panel-auto-height-mode="height">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Procurar" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!--<li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>-->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="home-dark.php" class="brand-link">
        <img src="../dist/img/logo.png" alt="Church Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Church Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="perfil/perfil.php" class="d-block">Usuario</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-legacy nav-child-indent nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-church"></i>
                <p>
                  Instituição
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="admin/secretaria/home.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Secretaria</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin/financeiro/home.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Financeiro</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin/coordenacao/home.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Coordenação</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin/acao_social/home.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Ação Social</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin/ensino/home.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Ensino</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-earth-americas"></i>
                <p>
                  Filiações
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="filiacao/setor.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Setor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="filiacao/congregacao.php" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Congregação</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="calendario.php" class="nav-link">
                <i class="nav-icon fa-solid fa-calendar-days"></i>
                <p>
                  Calendário
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="galeria.php" class="nav-link">
                <i class="nav-icon fa-solid fa-image"></i>
                <p>
                  Galeria
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="cultos.php" class="nav-link">
                <i class="nav-icon fa-solid fa-menorah"></i>
                <p>
                  Cultos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="evento.php" class="nav-link">
                <i class="nav-icon fa-solid fa-icons"></i>
                <p>
                  Eventos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="aniversariantes.php" class="nav-link">
                <i class="nav-icon fa-solid fa-cake-candles"></i>
                <p>
                  Aniversariantes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="relatorio_semanal.php" class="nav-link">
                <i class="nav-icon fa-solid fa-clipboard-list"></i>
                <p>
                  Relatório Semanal
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-envelopes-bulk"></i>
                <p>
                  Mensagens
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="mensagem/caixa_email/mailbox.html" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Caixa de E-Mail</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa-regular fa-circle-right nav-icon"></i>
                    <p>Comunidade</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-address-book"></i>
                <p>
                  Ramais
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-square-phone"></i>
                    <p>
                      Gabinete
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Pastor</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Secretária</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <span class="nav-link">
                    <i class="nav-icon fa-solid fa-square-phone"></i>
                    <p>Secretaria</p>
                  </span>
                </li>
                <li class="nav-item">
                  <span class="nav-link">
                    <i class="nav-icon fa-solid fa-square-phone"></i>
                    <p>Tesouraria</p>
                  </span>
                </li>
                <li class="nav-item">
                  <span class="nav-link">
                    <i class="nav-icon fa-solid fa-square-phone"></i>
                    <p>Cozinha</p>
                  </span>
                </li>
                <li class="nav-item">
                  <span class="nav-link">
                    <i class="nav-icon fa-solid fa-square-phone"></i>
                    <p>Tecnica</p>
                  </span>
                </li>
              </ul>
            </li>
            <li class="nav-header">Informativos</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Importante</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="erro/404/index.html" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Setor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Avisos Gerais</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode bg-dark" data-widget="iframe" data-auto-dark-mode="true" data-loading-screen="750">

      <div class="nav navbar navbar-expand navbar-dark border-bottom border-dark p-0">

        <a class="nav-link bg-danger" href="#" data-widget="iframe-close">Fechar</a>

        <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-dark" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <a class="nav-link bg-dark" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
      </div>
      <div class="tab-content">
      <div class="tab-empty">
          <h2><span id="mostra_data" class="badge bg-dark"></span></h2>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer dark-mode">
      <strong>Copyright &copy; 2019-2021 <a href="https://www.instagram.com/driko_heavy">Driko Corp</a>.</strong>
      Todos os Direitos Reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
    <!-- Mostra Saudação -->
    <script src='../dist/js/pages/data.js'></script>
</body>

</html>