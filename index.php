<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tela de Autenticação">
    <meta name="author" content="Hemerson">
    <link rel="icon" href="img/favicon.ico">

    <title>Sistema Gerenciador de Disciplinas</title>

    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/ie-emulation-modes-warning.js"></script>
    <link href="node_modules/bootstrap/dist/css/signin.css" rel="stylesheet">
  </head>

  <body>
    <?php
       session_start();
       unset($_SESSION['userID'], $_SESSION['userName'], $_SESSION['userEmail'],
             $_SESSION['userTypeUser'], $_SESSION['userPass'], $_SESSION['userDate'],
             $_SESSION['userInstitute'], $_SESSION['userCPF']
       );
     ?>

    <div class="container">

      <form class="form-signin" method="post" action="lib/backend/validacao.php">
        <!-- <img src="img/icon_ufla_192x192.png" class="right-block" width="250"> -->
        <h2 class="form-signin-heading text-center">SGD's UFLA</h2> <br/>
        <label for="inputEmail" class="sr-only" >Email </label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email" required autofocus> <br/>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Senha" required>
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="Lembrar"> Lembrar senha
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        <p class="text-center text-danger">
          <?php
            // session_start();
            if (isset($_SESSION['loginErro'])) {
              echo $_SESSION['loginErro'];
              unset($_SESSION['loginErro']);
            }
          ?>
        </p>
      </form>
      <div align="center">
        <a href="lib/frontend/registrar.php"> <u> Registrar-se </u>
      </div>
    </div> <!-- /container -->
    <script src="node_modules/bootstrap/dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
