<?php



function inscription()
{
	$email=(htmlspecialchars($_POST['email']));
	$mdp=md5((htmlspecialchars($_POST['mdp'])));
	$nom=(htmlspecialchars($_POST['nom']));
	$prenom=(htmlspecialchars($_POST['prenom']));
	require_once 'connexion.php';
	$reponse = $bdd->query("INSERT INTO users (mail,mdp,credit,nom,prenom) VALUES ('$email','$mdp','10','$nom','$prenom')");
	header('Location:index.php');
}
inscription();
