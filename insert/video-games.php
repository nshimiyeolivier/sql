
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=test1', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(?, ?)');
    $requete->execute(array($_GET['console']));
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
