<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
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

    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT name, difficulty, distance, duration, height_difference FROM hiking');
    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch())
    {
    		echo '<p><strong>' . htmlspecialchars($donnees['name']) . '</strong> :' .' '. htmlspecialchars($donnees['difficulty']) .' - '. htmlspecialchars($donnees['distance']).' - '. htmlspecialchars($donnees['duration']).' - '. htmlspecialchars($donnees['height_difference']) . '</p>';
    }
    $reponse->closeCursor();
    ?>
    </table>
  </body>
</html>
