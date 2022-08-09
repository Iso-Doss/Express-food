
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Express Food | Connexion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

<div class="login-box">

<?php include("entete-page-connexion.php"); ?>
  
<!-- /.login-logo -->
    <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

      <?php 
      
        $erreurs = [];

        if(isset($_GET["erreurs"]) && !empty($_GET["erreurs"])){
          $erreurs = json_decode($_GET["erreurs"], true);
        }

        $success = [];

        if(isset($_GET["success"]) && !empty($_GET["success"])){
          $success = json_decode($_GET["success"], true);
        }
      
      ?>
      <form action="connexion-traitement.php" method="post" novalidate>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="addresse-email" placeholder="Votre adresse mail" value="dossou.israel48@gmail.com" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        <?php
          if(isset($erreurs["addresse-email"]) && !empty($erreurs["addresse-email"])){
            echo "<p class='text-danger'>" . $erreurs['addresse-email'] . "</p>";
          }
        ?>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="mot-de-passe" placeholder="Votre mot de passe" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        <?php
          if(isset($erreurs["mot-de-passe"]) && !empty($erreurs["mot-de-passe"])){
            echo "<p class='text-danger'>" . $erreurs['mot-de-passe'] . "</p>";
          }
        ?>
        </div>
        <div class="row">
          <div class="col-6"></div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="mot-de-passe-oublier.php">Mot de passe oublié</a>
      </p>
      <p class="mb-0">
        <a href="inscription.php" class="text-center">Inscription</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/js/adminlte.min.js"></script>
</body>
</html>
