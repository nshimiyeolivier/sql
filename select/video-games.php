
<?php
if(isset($_GET['console']))
 {
    $bdd = new PDO('mysql:host=localhost;dbname=test1', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
    $requete->execute(array($_GET['console']));
    while ($donnees= $requete->fetch()){
      echo '<p>'.$donnees['console'].'-'.$donnees['nom']. '-'. $donnees['prix'].' Euro' .'<p>';
  }
}else{
  echo 'Rien a été demandé!';
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
