<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<DOCTYPE html>
<html>
<head>
  <title> clients avec carte de fidelite </title>
</head>
<body>
<h1> Les clients possédant une carte de fidélité. </h1>


</body>
</html>
<?php
$reponse = $bdd->query('SELECT * FROM clients WHERE card = 1');
while ($donnees= $reponse->fetch()){
  echo '<p>'.$donnees['lastName'].'-'.$donnees['firstName']. '-'.$donnees['birthDate']. '-'. $donnees['card']. '-'. $donnees['cardNumber'] .'<p>';
}
?>
