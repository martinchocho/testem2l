<?php

function afficheUsers()
{
	echo '<div id="tout">';
	echo '<table border="1" align="center">
			<tr><th>nom</th><th>prenom</th><th>email</th><th>credit</th></tr>';
	require_once 'connexion.php' ;
	$info=$bdd->query("Select * from USERS");
	while($result=$info->fetch())
	{
		echo '<tr><td>'.$result['nom'].'</td>';
		echo '<td>'.$result['prenom'].'</td>';
		echo '<td>'.$result['mail'].'</td>';
		echo '<td>'.$result['credit'].'</td></tr>';
	}
	$info->closeCursor();
	echo '</table>';
	echo '</div>';
}	

function afficheUnUser($email)
{
	echo '<div id="tout">';
	echo '<table border="1" align="center">
			<tr><th>nom</th><th>prenom</th><th>email</th><th>credit</th></tr>';
	require 'connexion.php' ;
	$info=$bdd->query("Select * from USERS where mail='$email'");
	while($result=$info->fetch())
	{
		echo '<tr><td>'.$result['nom'].'</td>';
		echo '<td>'.$result['prenom'].'</td>';
		echo '<td>'.$result['mail'].'</td>';
		echo '<td>'.$result['credit'].'</td></tr>';
	}
	$info->closeCursor();
	echo '</table>';
	echo '</div>';
}

