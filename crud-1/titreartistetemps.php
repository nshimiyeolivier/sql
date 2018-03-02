<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<DOCTYPE html>
<html>
<head>
  <title> Noms commencant par M </title>
</head>
<body>
<h1> Le titre de tous les spectacles ainsi que l'artiste, la date et l'heure</h1>

</body>
</html>
<?php
$mnm = 'SELECT title, performer, date FROM shows ORDER BY title';
$reponse = $bdd->query($mnm);
while ($donnees= $reponse->fetch()){
  echo '<p>'.'Spectacle'.' '.$donnees['title'].'par '.$donnees['performer'].'Le'.' '.$donnees['date'].'<p>';
}
?>
