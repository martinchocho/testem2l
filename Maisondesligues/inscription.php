<?php 
$title="Page d'inscription";
require_once 'top.php';
?> 
 <div id="tout"><div id="logo">
  <img src="img/logom2l.png"/>
  </div>
  <div id="main">
	 <h1>Page d'inscription</h1>
  <form action="traitementinscription.php" method="post">
 <div id="champtexte"><label for="email">Email :</label><input placeholder="Votre email" type="text" name="email" id="email" /></div>
 <br>
 <div id="champtexte"><label for="mdp">Nom :</label><input placeholder="Votre nom" type="text" name="nom" id="nom" /></div>
 <br>
 <div id="champtexte"><label for="mdp">Prenom :</label><input placeholder="Votre prenom" type="text" name="prenom" id="prenom" /></div>
 <br>
 <div id="champtexte"><label for="mdp">Mot de passe :</label><input placeholder="Votre mot de passe" type="password" name="mdp" id="mdp" /></div>
 <br>
 <p><input type="submit" value="inscription"></p>
</div>
</div>
</form>
 </body>
</html>