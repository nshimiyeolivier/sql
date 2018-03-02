<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<DOCTYPE html>
<html>
<head>
  <title> Noms commencant par M </title>
</head>
<body>
<h1> Nom Clients commencant par la lettre "M".</h1>


</body>
</html>
<?php
$mnm = 'SELECT lastName, firstName FROM clients WHERE lastName LIKE "M%"';
$reponse = $bdd->query($mnm);
while ($donnees= $reponse->fetch()){
  echo '<p>'.'Nom:'.' '.$donnees['lastName']. '<br />'.'Prenom:'.' '.$donnees['firstName'].'<p>';
}
?>
