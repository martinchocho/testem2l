<?php

function afficheFormation()
{
	echo '<div id="tout">';
	echo '<table border="1" align="center">
			<tr><th>nom</th><th>places</th><th>credit</th></tr>';
	require 'connexion.php';
	$info=$bdd->query($affiche);
	while($result=$info->fetch())
	{
		echo '<tr><td>'.$result['nom'].'</td>';
		echo '<td>'.$result['places'].'</td>';
		echo '<td>'.$result['credit'].'</td></tr>';
	}
	$info->closeCursor();
	echo '</table>';
	echo '</div>';
}