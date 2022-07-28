<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index.html" class="brand-link">
    <img src="../../dist/img/logo.png" alt="Church Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Church Admin</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/avatar/avatar_boy_128x128.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="nav-item">
        <a href="perfil/perfil.php" class="nav-link"><?= $_SESSION['name'] ?></a>
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

    <nav class="mt-2">
      <ul class="nav nav-legacy nav-child-indent nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-church"></i>
            <p>
              <?= $menu_institution ?>
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="institution/secretaria/home.php" id="secretariat" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_secretariat ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="institution/financeiro/home.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_financial ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="institution/coordenacao/home.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_coordination ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="institution/acao_social/home.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_social_action ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="institution/ensino/home.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_teaching ?></p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-earth-americas"></i>
            <p>
              <?= $menu_filiation ?>
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="affiliations/setor.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_sector ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="affiliations/congregacao.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_congregation ?></p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-table-cells-large"></i>
            <p>
              <?= $menu_department ?>
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="departments/setor/selecao_setores.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_sector ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="departments/grupo/selecao_grupos.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_groups ?></p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="calendar/calendario.php" class="nav-link">
            <i class="nav-icon fa-solid fa-calendar-days"></i>
            <p>
              <?= $menu_calendar ?>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="gallery/galeria.php" class="nav-link">
            <i class="nav-icon fa-solid fa-image"></i>
            <p>
              <?= $menu_gallery ?>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="cults/cultos.php" class="nav-link">
            <i class="nav-icon fa-solid fa-menorah"></i>
            <p>
              <?= $menu_educated ?>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="events/evento.php" class="nav-link">
            <i class="nav-icon fa-solid fa-icons"></i>
            <p>
              <?= $menu_event ?>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="birthdays/aniversariantes.php" class="nav-link">
            <i class="nav-icon fa-solid fa-cake-candles"></i>
            <p>
              <?= $menu_birthdays ?>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="report/relatorio_semanal.php" class="nav-link">
            <i class="nav-icon fa-solid fa-clipboard-list"></i>
            <p>
              <?= $menu_weekly_report ?>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-envelopes-bulk"></i>
            <p>
              <?= $menu_messages ?>
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="message/caixa_email/caixa_e-mail.php" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_email_box ?></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-regular fa-circle-right nav-icon"></i>
                <p><?= $menu_community ?></p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-address-book"></i>
            <p>
              <?= $menu_extensions ?>
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-square-phone"></i>
                <p>
                  <?= $menu_secretary_office ?>
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p><?= $menu_herdsman ?></p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p><?= $menu_secretary ?></p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <span class="nav-link">
                <i class="nav-icon fa-solid fa-square-phone"></i>
                <p><?= $menu_secretariat ?></p>
              </span>
            </li>
            <li class="nav-item">
              <span class="nav-link">
                <i class="nav-icon fa-solid fa-square-phone"></i>
                <p><?= $menu_treasury ?></p>
              </span>
            </li>
            <li class="nav-item">
              <span class="nav-link">
                <i class="nav-icon fa-solid fa-square-phone"></i>
                <p><?= $menu_kitchen ?></p>
              </span>
            </li>
            <li class="nav-item">
              <span class="nav-link">
                <i class="nav-icon fa-solid fa-square-phone"></i>
                <p><?= $menu_technical_area ?></p>
              </span>
            </li>
          </ul>
        </li>
        <li class="nav-header"><?= $label_options_users ?></li>

        <button type="button" data-toggle="modal" data-target="#modal-logoff" onclick="playCont()" class="btn btn-block bg-gradient-danger"><?= $button_logoff ?></button>

        <button type="button" class="btn btn-block bg-gradient-warning" onclick="block()"><?= $button_lock ?></button>

      </ul>
    </nav>

  </div>
  <!-- /.sidebar -->
</aside>

<!--modal LogOff-->
<div class="modal fade" id="modal-logoff" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?= $title_modal_logoff ?></h4>
      </div>
      <div class="modal-body">
        <p><?= $info_logoff ?><span id="time" class="danger">10</span><?= $info_second ?></p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" onclick="stopInterval()" class="btn btn-danger" data-dismiss="modal"><?= $no ?></button>
        <a type="button" class="btn btn-success" href="../../php/sair.php"><?= $yes ?></a>
      </div>
    </div>
  </div>
</div>

<script>  
  function playCont(){
    let time = 10;

    contTime = setInterval(() => {
      time--;

      if (time === 0) {
        window.location.assign('../../php/sair.php');  
      };
      
      document.querySelector('#time').innerHTML = time;
    }, 1000);
  }

  function stopInterval(){
    clearInterval(contTime)
    document.querySelector('#time').innerHTML = '10';
  }

  function block(){
    alert('Botão bloqueio não funciona ainda');
  }
</script>