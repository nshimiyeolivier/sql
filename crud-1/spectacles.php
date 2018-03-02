<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<DOCTYPE html>
<html>
<head>
  <title> spectacles </title>
</head>
<body>
<h1> Afficher tous les types de spectacles possibles.</h1>


</body>
</html>
<?php
$reponse = $bdd->query('SELECT * FROM showTypes');
while ($donnees= $reponse->fetch()){
  echo '<p>'.$donnees['type'].'<p>';
}
?>
