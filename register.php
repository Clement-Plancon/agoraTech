<?php include("piece_design/register_php_script.php"); ?>

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

  <!-- Début inscription -->
  <div class="container">

    <hr>

    <div class="row">

      <div class="col-lg-3">
      </div>

      <div class="col-lg-6">

        <form class="form-signin" method="post" action="">
          <h2 class="form-signin-heading">Inscription</h2>
          <div class="form-group">
            <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Pseudo" value="<?php if (isset($pseudo)) {echo $pseudo; } ?>" required autofocus>
          </div>
          <div class="form-group">
            <input type="email" name="mail" id="mail" class="form-control" placeholder="Adresse email" value="<?php if (isset($mail)) {echo $mail; } ?>" required autofocus>
          </div>
          <div class="form-group">
            <input type="email" name="mail2" id="mail2" class="form-control" placeholder="Confirmation de l'adresse email" value="<?php if (isset($mail2)) {echo $mail2; } ?>" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="mdp2" class="form-control" id="mdp2" placeholder="Confirmation du mot de passe" required autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="coogeo" class="form-control" id="pseudo" placeholder="Pseudo" required autofocus>
          </div>

          <input type="submit" name="forminscription" class="btn btn-lg btn-primary btn-block" value="S'inscrire">

        </form>

    <?php include("piece_design/error_succes.php"); ?>
        

      </div>
      <div class="col-lg-3">
      </div>
    </div>

    <!-- Fin inscription -->

    <?php include("piece_design/footer.php"); ?>
    <?php include("piece_design/bootstrap_end_script.php"); ?>

</body>

</html>