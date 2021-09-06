<!-- On se connecte à la bdd (pensez à changer le port en fonctiion de votre environnement), on active le debug mode PDO pour detailler les erreurs php.
On verifie si les variables existent, on securise tout ca avec "htmlspecialchars" puis on chiffre le mdp avec "password_hash".
On fait des suites d'instructions pour vérifier si les emails, mdp, longueur de pseudo sont correcte ou sinon on renvoie une erreur
"echo '</br> <div class="alert alert-danger" role="alert">' . $error . '</div>';" avec la variable $error. -->

<?php
	$bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=espace_membre', 'root', '');
	 
	if(isset($_POST['forminscription'])) {
	   $pseudo = htmlspecialchars($_POST['pseudo']);
	   $mail = htmlspecialchars($_POST['mail']);
	   $mail2 = htmlspecialchars($_POST['mail2']);
	   $mdp = sha1($_POST['mdp']);
	   $mdp2 = sha1($_POST['mdp2']);
	   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
	      $pseudolength = strlen($pseudo);
	      if($pseudolength <= 255) {
	         if($mail == $mail2) {
	            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
	               $reqmail->execute(array($mail));
	               $mailexist = $reqmail->rowCount();
	               if($mailexist == 0) {
	                  if($mdp == $mdp2) {
	                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
	                     $insertmbr->execute(array($pseudo, $mail, $mdp));
	                     $succes = "Votre compte a bien été créé ! <a href=\"login.php\">Me connecter</a>";
	                  } else {
	                     $error = "Vos mots de passes ne correspondent pas !";
	                  }
	               } else {
					$error = "Adresse mail déjà utilisée !";
	               }
	            } else {
					$error = "Votre adresse mail n'est pas valide !";
	            }
	         } else {
	            $error = "Vos adresses mail ne correspondent pas !";
	         }
	      } else {
			$error = "Votre pseudo ne doit pas dépasser 255 caractères !";
	      }
	   } else {
	      $error = "Tous les champs doivent être complétés !";
	   }
	}
	?>
