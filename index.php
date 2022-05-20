<!DOCTYPE html>
<html>
    <head lang="fr" dir="ltr">
        <meta charset="utf-8" />
        <title>Commentaires</title>
        <link rel="stylesheet" href="css/master.css" />
    </head>
    <body>
        
        <?php
        require("connect.php");
        $connexion= mysql_connect(SERVEUR, LOGIN, MDP);
        if (!$connexion)
        {echo"LA CONNEXION AU SERVEUR MYSQLAECHOUE\n";exit;}
        mysql_select_db(BDD);
        print "La base de données est ouverte";echo "<br/>";
        $reponse= mysql_query("SELECT * FROM membres");
        while($ligne= mysql_fetch_array($reponse))
        {
        echo$ligne['nom'];echo"&nbsp;&nbsp;";
        echo$ligne['prenom'];echo"&nbsp;&nbsp;";
        echo$ligne['annee'];echo"&nbsp;&nbsp;";
        echo"<br/>";
        }
        mysql_close();
        ?>
    </body>
</html>