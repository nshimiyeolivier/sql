
<?php
$bdd = new PDO('mysql:host=localhost;dbname=test1', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console,nom, prix FROM jeux_video WHERE console="PC" OR console="NES" ORDER BY prix DESC LIMIT 6');
while ($donnees= $reponse->fetch()){
  echo '<p>'.$donnees['console'].'-'.$donnees['nom']. '-'. $donnees['prix'].' Euro' .'<p>';
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
