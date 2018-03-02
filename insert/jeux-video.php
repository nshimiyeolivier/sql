
<?php
$bdd = new PDO('mysql:host=localhost;dbname=test1', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $reponse = $bdd->query('SELECT console,nom, prix FROM jeux_video WHERE console="PC" OR console="NES" ORDER BY prix DESC LIMIT 6');
// $reponse = $bdd->query('SELECT UPPER(nom) AS nom_majuscule FROM jeux_video');
$reponse = $bdd->query('SELECT date_ajout, DATE_ADD(date_ajout, INTERVAL 15 DAY) AS date_plus_tard FROM jeux_video WHERE ID=52');
while ($donnees= $reponse->fetch()){
  // echo '<p>'.$donnees['console'].'-'.$donnees['nom']. '-'. $donnees['prix'].' Euro' .'<p>';
  echo '<p>' . $donnees['date_plus_tard'] . '<p>';
}
?>





<!-- <DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> jeux-video </title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div class="container">

  </div>
</body>
</html> -->
