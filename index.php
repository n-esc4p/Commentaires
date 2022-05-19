<!DOCTYPE html>
<html>
    <head lang="fr" dir="ltr">
        <meta charset="utf-8" />
        <title>Commentaires</title>
        <link rel="stylesheet" href="css/master.css" />
    </head>
    <body>
        
        <?php
        // $user = 'root';
        // $password = 'root';
        // $db = 'test';
        // $host = 'localhost';
        // $port = 3306;

        // $link = mysqli_init();
        // $success = mysqli_real_connect(
        // $link, 
        // $host, 
        // $user, 
        // $password, 
        // $db,
        // $port
        // );
        
        // if (!$success)
        // {echo"LA CONNEXION AU SERVEUR MYSQL A ECHOUE\n";exit;}
        // // $seldb = mysqli_select_db(BDD, $connection);
        
        // print "La base de données est ouverte";echo "<br/>";

        $db = new mysqli('localhost','root','root','test');
        $resource = $db->query('SELECT * FROM membres');
        while ( $rows = $resource->fetch_assoc() ) {
            print_r($rows);//echo "{$row['field']}";
        }
        $resource->free();
        $db->close();

        // while($row = $result->fetch_assoc()){
        //     echo $row['nom'];
        //     echo $row['prenom'];
        //     echo $row['annee'];
        // }

        // require("connect.php");
        // $connexion= mysql_connect(SERVEUR, LOGIN, MDP);
        // if (!$connexion)
        // {echo"LA CONNEXION AU SERVEUR MYSQLAECHOUE\n";exit;}
        // mysql_select_db(BDD);
        // print "La base de données est ouverte";echo "<br/>";
        // $reponse= mysql_query("SELECT * FROM membres");
        // while($ligne= mysql_fetch_array($reponse))
        // {
        // echo$ligne['nom'];echo"&nbsp;&nbsp;";
        // echo$ligne['prenom'];echo"&nbsp;&nbsp;";
        // echo$ligne['annee'];echo"&nbsp;&nbsp;";
        // echo"<br/>";
        // }
        // mysql_close();
        ?>
    </body>
</html>