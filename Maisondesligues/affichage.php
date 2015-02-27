<?php 
$title="Liste des formations";
require_once 'top.php';
require_once 'BDD_users.php';
require_once 'connexion.php' ;
require_once 'BDD_formation.php';


function validmdp()
{
	$email=(htmlspecialchars($_POST['email']));
	$mdp=md5((htmlspecialchars($_POST['mdp'])));
	require 'connexion.php';
	$reponse = $bdd->query("Select mdp from users where mail='$email'");
	$donnees = $reponse->fetch();
	$reponse->closeCursor();
	if($mdp==$donnees['mdp'])
	{
		afficheFormation();
		afficheUnUser($email);
	}
	else
		header('Location:index.php');
}

validmdp();

?> 
</body>
</html>
