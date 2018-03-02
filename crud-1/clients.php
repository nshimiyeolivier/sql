<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<DOCTYPE html>
<html>
<head>
  <title> clients </title>
</head>
<body>
<h1> Afficher tous les types de spectacles possibles.</h1>


</body>
</html>
<?php
$reponse = $bdd->query('SELECT * FROM clients');
while ($donnees= $reponse->fetch()){
  echo '<p>'.$donnees['lastName'].'-'.$donnees['firstName']. '-'.$donnees['birthDate']. '-'. $donnees['card']. '-'. $donnees['cardNumber'] .'<p>';
}
?>
