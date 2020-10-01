<?php
	// préparation du contenu du mail
	$mail = "Message";
	

	$mail = $mail ." ".$_POST["nom"] . ". ". $_POST["message"];
	$mail = $mail . $_POST["mail"];
	
	// modifier l'adresse ci-dessous avec la votre !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	$email = "dhaupas@gmail.com";
	
	// envoi du mail : destinataire, objet, message, émetteur
	Outils::envoyerMail ($email, $nom, $mail, $_POST["mail"] ) ;
	
>