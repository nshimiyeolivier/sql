<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Mini-Chat</title>
  </head>
    <style>
      /*form{
        text-align: center;
      }*/
    </style>
  <body>

    <form action="minichat_post.php" method="post">
      <label for="Pseudo"> Pseudo </label> : <input type="text" name="Pseudo" id="Pseudo" /> <br />
      <label for="Message"> Message </label> : <input type="text" name="Message" id="Message" /> <br />
      <input type="submit" value="Envoyer" />
    </form>

    <!-- <form action="minichat_post.php" method="post">

        <label for="Pseudo">Pseudo</label> : <input type="text" name="Pseudo" id="Pseudo" /><br />
        <label for="Message">Message</label> :  <input type="text" name="Message" id="Message" /><br />
        <input type="submit" value="Envoyer" />



    </form> -->
    <?php

    // Connexion à la base de données

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=BeCode;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT Pseudo, Message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['Pseudo']) . '</strong> : ' . ' '. htmlspecialchars($donnees['Message']) . '</p>';
    }
    $reponse->closeCursor();
    ?>
  </body>
</html>
