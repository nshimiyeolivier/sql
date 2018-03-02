<?php
//connexion à la base des donnees
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=BeCode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$login = $_POST['login'];
$password = $_POST['password'];

//request to find the user in database
$query = 'SELECT * FROM login';
$reponse = $bdd->query($query);

while ($donnees= $reponse->fetch()){

// on teste si nos variables sont définies
if(isset($login) && isset($password)){

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($donnees['login'] == $login && $donnees['password'] == $password) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: page_membre.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="1;URL=index.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
};
?>
