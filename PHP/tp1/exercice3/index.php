<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?php
    // Ouverture du fichier
    $monFichier = fopen("restos.csv", "r");
    if (($monFichier)){
        while ($data = fgetcsv($monFichier, null, ";")) {
            print("Nom : $data[0] <br>");
            print("Prénom : $data[1] <br>");
            print("Restaurant : $data[2] <br>");
            print("<hr>");
        }
    fclose($monFichier);
    }
    ?>
</body>
</html>