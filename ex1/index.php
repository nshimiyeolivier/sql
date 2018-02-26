<?php

// Affiche toutes les données.
    $bdd = new PDO('mysql:host=localhost;dbname=BeCode;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM students');
    while ($donnees= $reponse->fetch()){
      echo '<p>'.$donnees['idStudent'].' - '.$donnees['nom']. ' - '. $donnees['prenom'].' - '.$donnees['datenaissance'].' - '.$donnees['genre'] .' - '.$donnees['school'].'<p>';
    }

// Affiche uniquement les prénoms.
    // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $reponse = $bdd->query('SELECT prenom FROM students ');
    // while ($donnees= $reponse->fetch()){
    //   echo '<p>'.$donnees['prenom'].'<p>';
    // }

// Affiche les prénoms, les dates de naissance et l’école de chacun.
    // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $reponse = $bdd->query('SELECT prenom, datenaissance, school FROM students ');
    // while ($donnees= $reponse->fetch()){
    //   echo '<p>'.$donnees['prenom'].' _ '.$donnees['datenaissance'].' _ '.$donnees['school'].'<p>';
    // }

// Affiche uniquement les élèves qui sont de sexe féminin.
    // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $reponse = $bdd->query('SELECT idStudent, nom, prenom, datenaissance, genre, school FROM students WHERE genre="F" ');
    // while ($donnees= $reponse->fetch()){
    //   echo '<p>'.$donnees['idStudent'].' - '.$donnees['nom']. ' - '. $donnees['prenom'].' - '.$donnees['datenaissance'].' - '.$donnees['genre'] .' - '.$donnees['school'].'<p>';
    // }

// Affiche uniquement les élèves qui font partie de l’école Andy.
      // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      // $reponse = $bdd->query('SELECT idStudent, nom, prenom, datenaissance, genre, school FROM students WHERE school="Andy" ');
      // while ($donnees= $reponse->fetch()){
      //   echo '<p>'.$donnees['idStudent'].' - '.$donnees['nom']. ' - '. $donnees['prenom'].' - '.$donnees['datenaissance'].' - '.$donnees['genre'] .' - '.$donnees['school'].'<p>';
      // }

// Affiche uniquement les prénoms des étudiants, par ordre inverse à l’alphabet (DESC). Ensuite, la même chose mais en limitant les résultats à 2.
      // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      // $reponse = $bdd->query('SELECT prenom FROM students ORDER BY prenom DESC LIMIT 6');
      // while ($donnees= $reponse->fetch()){
      //   echo '<p>'.$donnees['prenom'].'<p>';
      // }

// Ajoute Ginette Dalor, née le 01/01/1930 et affecte-la à Central, toujours en SQL.
      // $bdd = new PDO('mysql:host=localhost;dbname=BeCode;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      // $requete = $bdd->prepare('INSERT INTO students(nom, prenom, datenaissance, genre, school) VALUES (?, ?,?,?,?)');
      // // $requete->execute(array($_POST['']));
      // $requete->execute(array("Ginette", "Dalor", "1930-01-01","F",4));

// Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”.
      // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      // $reponse = $bdd->query('UPDATE students SET prenom="Omer", genre="M" WHERE idStudent=65');

//Supprimer la personne dont l’ID est 3.
      // $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      // $reponse = $bdd->query('DELETE FROM students WHERE idStudent=3');

// Modifier le contenu de la colonne School de sorte que "1" soit remplacé par "Central" et "2" soit remplacé par "Anderlecht". (attention au type de la colonne !)
      $bdd = new PDO('mysql:host=localhost;dbname=BeCode', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $reponse = $bdd->query('UPDATE students SET school = "Central" WHERE school=1');
      $reponse = $bdd->query('UPDATE students SET school = "Anderlecht" WHERE school=2');

?>




<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> students</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div class="container">

  </div>
</body>
</html>
