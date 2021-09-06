<?php
	session_start();
	 
	$bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=espace_membre', 'root', '');
	 
	if(isset($_GET['id']) AND $_GET['id'] > 0) {
	   $getid = intval($_GET['id']);
	   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	   $requser->execute(array($getid));
	   $userinfo = $requser->fetch();
	?>

<?php

function Luhn($numero, $longueur)
{


    if (strlen($numero) == $longueur) {


        for ($i = 0; $i < $longueur; $i++) {
            $tableauChiffresNumero[$i] = substr($numero, $i, 1);
        }

        $luhn = 0;
        for ($i = 0; $i < $longueur; $i++) {
            if ($i % 2 == 0) {
                if (($tableauChiffresNumero[$i] * 2) > 9) {

                    $tableauChiffresNumero[$i] = ($tableauChiffresNumero[$i] * 2) - 9;
                } else {
                    $tableauChiffresNumero[$i] =
                        $tableauChiffresNumero[$i] * 2;
                }
            }
            $luhn = $luhn + $tableauChiffresNumero[$i];
        }

        if ($luhn % 10 == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>

<html>
	   <head>
	   <?php include("piece_design/bootstrap_start_script.php"); ?>
	      <title>profil</title>
	      <meta charset="utf-8">
	   </head>
	   <body>
	   <?php

if (isset($_POST['mode'])) $mode = $_POST['mode'];
if (isset($_POST['numero'])) $numero = $_POST['numero'];
if (isset($_POST['longueur'])) $longueur = $_POST['longueur'];

if (isset($mode)  and $mode == "verifier") {
	if (Luhn($numero, $longueur)) {
		$insertmbr = $bdd->prepare("INSERT INTO membres(cb) VALUES(?)");
	    $insertmbr->execute(array($numero));
		echo "<div class=\"alert alert-success\" role=\"alert\">Le numero de carte est bon et vos coordonées ont bien été ajoutés</div>";
	} else {
		
		echo "<div class=\"alert alert-danger\" role=\"alert\">Le numero de la carte est invalide</div>";
	}
	echo "<form action=\"profil.php?id=1\" method=\"POST\">\n";
	echo "<input type=\"submit\" value=\"tester un autre nombre\">";
	echo "</form>";
} else {
?>
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
  
	      <div align="center">
		  <div class="alert alert-light" role="alert"><h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
	         <br /><br />
	         Votre pseudo est <?php echo $userinfo['pseudo']; ?>
	         <br />
	         Votre mail est <?php echo $userinfo['mail']; ?>
			 <br /> </div>


			 <div class="alert alert-info" role="alert"> <div align="center"> Ou residez-vous </div>
			Votre pays <input type="text" name="longueur" size="16"><br>
            Votre rue <input type="text" name="numero" size="16" maxlength="16"><br><br>  </div>
          


			<div class="alert alert-info" role="alert"> <div align="center"> Vos coordonnées bancaires</div><form action="" method="POST">
			 Longueur du numéro de la carte bleu <input type="text" name="longueur" size="3"><br>
            numero de la carte bleu <input type="text" name="numero" size="16" maxlength="16"><br><br>
			<input type="hidden" name="mode" value="verifier">
            <input type="submit" value="verifier">  </div>


        </form>

			
			
	         <?php
	         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
	         ?>
	         <br />
	         <div class="alert alert-warning" role="alert"><a href="deconnexion.php">Se déconnecter</a></div>
	         <?php
	         }
	         ?>
		  </div>

		  <?php include("piece_design/error_succes.php"); ?>
    <?php include("piece_design/footer.php"); ?>
    <?php include("piece_design/bootstrap_end_script.php"); ?>
	   </body>
	</html>
	<?php   
	}
	?>
		<?php   
	}
	?>