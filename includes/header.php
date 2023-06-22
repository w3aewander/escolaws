<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= APP_TITLE ?></title>
  <link rel="stylesheet" href="<?= $dir ?>/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= $dir ?>/css/bootstrap.min.css">

  <link type="text/css" rel="stylesheet" href="<?= $dir ?>/css/style.css">


</head>

<body onload="relogio();">

  <div class="fixed-top mb-2">

    <div class="header">

      <div class="">
        <img src="<?= $dir ?>/img/escola.jpg" width="120">
      </div>
      <div class="px-5">
        <h2 class="text-header"><?= APP_TITLE ?></h2>
        <div class="text-small">Versão: <?= APP_VERSION ?></div>
      </div>
    </div>

    <?php
    //incluindo a barra de navegação
    include __DIR__ . "/navbar.php";
    ?>

  </div>


  </div>