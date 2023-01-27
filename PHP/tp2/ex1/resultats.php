<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mail envoyé</h1>
    <?php 
        //              Affichage du don


        $nomFichier = "resultats.txt";
        $monFichier = fopen($nomFichier, "r");

        // Traitements
        if (!($monFichier)) {
            print("Impossible d'ouvrir le fichier \n");
            exit;
        }
        else {
            $tab[][];
            $donTotal = 0;
            while ($data = fgetcsv($monFichier, null, ",")) {
                $donTotal += $data[3];

            }
        }
    


        //mail($data[2],"RECAP DE L'ANNEE", "Merci d'avoir participé à notre superbe cagnotte $data[0], nous avons récolté $donTotal !");
        fclose($monFichier);

    
    
    ?>
</body>
</html>