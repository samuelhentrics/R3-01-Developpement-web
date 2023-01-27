<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <?php
    // Variables
    $nomFichier = "compteur.txt";
    $monFichier = fopen($nomFichier, "r+");

    // Traitements
    if (!($monFichier)) {
        print("Impossible d'ouvrir le fichier \n");
        exit;
    } else {
        // On récupére le compteur dans le fichier
        $compteur = fgets($monFichier); 

        // Cas où le fichier est vide
        if ($compteur == "") {
            $compteur=1;
            fputs($monFichier, $compteur);
        }

        // Affichage à l'écran du compteur
        print("Vous êtes le visiteur n°$compteur");

        // Mise à jour du compteur dans le fichier
        $compteur++;
        fseek($monFichier, 0);
        fputs($monFichier, $compteur);
    }


    fclose($monFichier);

    ?>
</body>

</html>