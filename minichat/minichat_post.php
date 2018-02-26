<?php
    // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $requete = $bdd->prepare('INSERT INTO mini-chat(pseudo, message) VALUES(?, ?)');
    // $requete->execute(array($_GET['']));
    //
    // header('Location: index.php');


// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=BeCode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO minichat (Pseudo, Message) VALUES(?, ?)');
    $req->execute(array($_POST['Pseudo'], $_POST['Message']));

// Redirection du visiteur vers la page du minichat

    header('Location: index.php');
    
?>
