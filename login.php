<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta name="http-equiv" content="width=device-width;scale=1">
   <meta charset="utf-8">
   <title>EscolaWS Login</title>

   <link rel="stylesheet" href="css/fontawesome.min.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css" />


   <style>
      body {
         background-color: #a131f5;
      }
   </style>

   <script defer src="js/fontawesome.min.js"></script>
   <script defer src="js/bootstrap.min.js"></script>

</head>

<body>

   <div class="container" style="min-height: 100vh; padding-top: calc( 50% /4);">

      <div class="text-white text-shadow text-center"><span style="font-size: 1.8rem">Pauta eletrônica - EscolaWS</span></div>

      <div class="card" style="max-width: 550px; margin: 0 auto; text-center;">
         <form class="" name="form-login" id="form-login" action="./auth.php" method="POST">
            <div class="card-header">
               <div class="card-title">
                  <i class="fa fa-lock"></i> Autenticação requerida
               </div>
            </div>
            <div class="card-body">

               <div class="row">

                  <div class="col-md-4 col-sm-12  text-center ">
                     <img src="img/escola.jpg" width="150">
                  </div>
                  <div class="col-md-8 col-sm-12 col-12 gap-1">
                     <div class="form-group ">
                        <label for="email"> E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu email aqui" required>
                     </div>
                     <div class="form-group">
                        <label for="email"> Senha</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Sua senha aqui" required>
                     </div>
                  </div>

                  <!-- mostrará mensagem de erro, caso o login seja mal sucedido -->
                  <div class="alert text-center mx-auto my-2">
                     <?= $_REQUEST['message'] ?? '' ?>
                  </div>

               </div>

            </div>
            <div class="card-footer">
               <div class="btn-group gap-1">
                  <button id="btn-login" type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Entrar</button>
                  <button id="btn-reset" type="reset" class="btn btn-warning"><i class="fa fa-recycle"></i> Cancelar</button>
               </div>
            </div>
         </form>
      </div>

      <div class="text-white text-center text-small">v2023-06-28 <?= date('Y'); ?> Prof. Wanderlei Silva do Carmo</div>
   </div>

</body>

</html>