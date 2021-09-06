<?php
	session_start();
	 
	$bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=espace_membre', 'root', '');
	 
	if(isset($_POST['formconnexion'])) {
	   $mailconnect = htmlspecialchars($_POST['mailconnect']);
	   $mdpconnect = sha1($_POST['mdpconnect']);
	   if(!empty($mailconnect) AND !empty($mdpconnect)) {
	      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
	      $requser->execute(array($mailconnect, $mdpconnect));
	      $userexist = $requser->rowCount();
	      if($userexist == 1) {
	         $userinfo = $requser->fetch();
	         $_SESSION['id'] = $userinfo['id'];
	         $_SESSION['pseudo'] = $userinfo['pseudo'];
	         $_SESSION['mail'] = $userinfo['mail'];
	         header("Location: profil.php?id=".$_SESSION['id']);
	      } else {
	         $error = "Mauvais mail ou mot de passe !";
	      }
	   } else {
	      $error = "Tous les champs doivent être complétés !";
	   }
	}