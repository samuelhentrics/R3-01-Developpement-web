<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $bdd = "roose";
        $host = "lakartxela.iutbayonne.univ-pau.fr";
        $user = "roose";
        $pass = "roose";

        $nomtable = "bourse";

        print("Tentative de connexion sur sitedb <br>");

        $link = mysqli_connect($host,$user,$pass,$bdd) or die ( "Impossible de se connecter à la BDD");
    
        $query = "SELECT ville, indice FROM $nomtable";

        $result = mysqli_query($link, $query);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL:".mysqli_connect_error();
            exit();
        }

        print("<br><strong>Données de la base<br>");
        while ($donnees = mysqli_fetch_assoc($result)){
            $ch1= $donnees["ville"];
            $ch2= $donnees["indice"];

            print("$ch1 - $ch2<br>");
        }

    ?>
    <IMG src="ficbourse.php">Un commentaire éventuel</img>
</body>
</html>