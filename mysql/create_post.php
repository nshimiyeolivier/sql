
<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=reunion_island;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES(?, ?, ?, ?, ?)');
    $req->execute(array($_POST['name'], $_POST['difficulty'], $_POST['distance'], $_POST['duration'], $_POST['height_difference']));

// Redirection du visiteur vers la page du minichat

    header('Location: read.php');

?>
