<?php include("piece_design/login_php_script.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <?php include("piece_design/bootstrap_start_script.php"); ?>
  <title> AgoraTech </title>
</head>

<body>

  <!-- Début navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="images/Logo site web2.svg" width="40" height="40" class="d-inline-block align-top" alt="Page d'accueil">
      AgoraTech
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="phone.php">Téléphonie</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Autre
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="accessory.php">Accessoire</a>
            <a class="dropdown-item" href="login.php">Connexion</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Qui somme nous</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
      </form>
    </div>
  </nav>
  <!-- Fin navbar-->

  <!-- Début login form -->
  <div class="container">

    <hr>

    <div class="row">

      <div class="col-lg-3">
      </div>

      <div class="col-lg-6">

        <div class="card">
          <article class="card-body">
            <a href="register.php" class="float-right btn btn-outline-primary">S'inscrire</a>
            <h4 class="card-title mb-4 mt-1">Se connecter</h4>
            <form method="POST" action="">
              <div class="form-group">
                <label>Votre email</label>
                <input name="mailconnect" class="form-control" placeholder="Email" type="email" required autofocus>
              </div> <!-- form-group// -->
              <div class="form-group">
                <a class="float-right" href="#">Mot de passe oublié ?</a>
                <label>Votre mot de passe</label>
                <input name="mdpconnect" class="form-control" placeholder="******" type="password" required autofocus>
              </div> <!-- form-group// -->
              <div class="form-group">
                <div class="checkbox">
                  <label> <input type="checkbox"> Sauvegarde votre mot de passe </label>
                </div> <!-- checkbox .// -->
              </div> <!-- form-group// -->
              <div class="form-group">
                <button type="submit" name="formconnexion" class="btn btn-primary btn-block"> Connexion </button>
              </div> <!-- form-group// -->
            </form>
          </article>
        </div> <!-- card.// -->

        </aside> <!-- col.// -->

      </div>
      <div class="col-lg-3">
      </div>
    </div>

    <!-- Fin login form -->


    <?php include("piece_design/error_succes.php"); ?>
    <?php include("piece_design/footer.php"); ?>
    <?php include("piece_design/bootstrap_end_script.php"); ?>
</body>

</html>