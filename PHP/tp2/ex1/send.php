<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Merci pour votre don !</h1>
    <?php
    //                     Récupérer les valeurs

    $nom = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['mail'];
    $valeur = $_POST['valeur'];

    //              STOCKAGE DANS LE FICHIER RESULTATS

    // Variables
    $nomFichier = "resultats.txt";
    $monFichier = fopen($nomFichier, "a+");

    // Traitements
    if (!($monFichier)) {
        print("Impossible d'ouvrir le fichier \n");
        exit;
    }
    else {
        $phrase = "$nom, $age, $email, $valeur\n";
        fputs($monFichier, $phrase);

        
    }

    fclose($monFichier);

    print("Merci $nom ($age, $email) pour votre don de $valeur euro(s) !");
    
    //                  ENVOIE D UN MAIL


    ?>
</form>
</body>
</html>