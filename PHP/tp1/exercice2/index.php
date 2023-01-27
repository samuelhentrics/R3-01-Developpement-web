<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php

        $ip = $_SERVER["REMOTE_ADDR"];
        $classeNum=explode(".",$ip)[0];

        if ( $classeNum < 128 ){
            $classe = "A";
        }
        elseif( $classeNum > 127 and $classeNum < 193){
            $classe = "B";
        }
        elseif( $classeNum > 192 ){
            $classe = "C";
        }
        else{
            $classe = "Inconnue";
        }

        print("IP : $ip (Classe $classe)");
    ?>
</body>
</html>