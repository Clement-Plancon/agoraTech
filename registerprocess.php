<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" charset="utf-8" />
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

        <form class="form-signin" method="POST" action="registerprocess.php">
          <h2 class="form-signin-heading">Inscription</h2>
          <div class="form-group">
            <input type="text" name="nomuser" class="form-control" placeholder="Nom" required autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="prenomuser" class="form-control" placeholder="Prénom" required autofocus>
          </div>
          <div class="form-group">
            <input type="email" name="emailuser" class="form-control" placeholder="Adresse email" required autofocus>
          </div>
          <div class="form-group">

            <input type="password" name="pass1" class="form-control" placeholder="Mot de passe" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="pass2" class="form-control" placeholder="Confirmation du mot de passe" required autofocus>
          </div>

          <input type="submit" class="btn btn-lg btn-primary btn-block" value="S'inscrire">

        </form>

      </div>
      <div class="col-lg-3">
      </div>
    </div>

    <!-- Fin inscription -->

    <?php include("piece_design/footer.php"); ?>
    <?php include("piece_design/bootstrap_end_script.php"); ?>

</body>

</html>