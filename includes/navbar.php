<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $dir ?>"> <i class="fa fa-home fa-fw"></i> Inicio</a>
        </li>

        <!-- menu para os módulos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-puzzle-piece"></i> Módulos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/turmas"><i class="icon-academico"></i> Turmas</a></li>
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/cursos"><i class="icon-curso"></i> Cursos</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/alunos"><span class="icon-aluno"></span> Alunos</a></li>
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/professores"><span class="icon-professor"></span> Professores</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/disciplinas"><span class="icon-disciplina"></span> Disciplinas</a></li>
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/pautas"><span class="icon-pauta"></span> Pautas</a></li>
            <li><a class="dropdown-item" href="<?= $dir ?>modulos/boletins"><span class="fa fa-bag"></span> Boletins</a></li>

          </ul>
        </li>

        </li>

      </ul>
      <!-- botão para sair do sistema: efetuar logout se existir uma sessão aberta. -->
      <?php if ($_SESSION['usuario'] && $_SESSION['AUTHENTICATED']) { ?>
        <form action='<?="{$dir}logout.php"?>' method='POST'>
          <button class="btn btn-danger btn-sm" id="btn-logout" name="btn-logout" type="submit"> <i class="fa fa-door-open"></i> Sair</button>
        </form>
      <?php } ?>

      <div>

      </div>

    </div>
  </div>
</nav>