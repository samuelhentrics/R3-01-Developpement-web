<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    header("Content-type: image/jpeg");
    $bdd = "roose";
    $host = "lakartxela.iutbayonne.univ-pau.fr";
    $user = "roose";
    $pass = "roose";

    $nomtable = "bourse";

    $link = mysqli_connect($host, $user, $pass, $bdd) or die("Impossible de se connecter à la BDD");

    $query = "SELECT ville, indice FROM $nomtable";

    $result = mysqli_query($link, $query);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
        exit();
    }

    $image = imagecreate(250, 500);
    $couleur = imagecolorallocate($image, 100, 100, 100);

    $yDeb = 0;
    while ($donnees = mysqli_fetch_assoc($result)) {
        $ville = $donnees["ville"];
        $indice = $donnees["indice"];

        $couleurR = rand(0, 255);
        $couleurV = rand(0, 255);
        $couleurB = rand(0, 255);

        imagefilledrectangle($image, 0, $yDeb, $indice * 4, $yDeb + 25, imagecolorallocate($image, $couleurR, $couleurV, $couleurB));


        $texte = $ville . "-" . $indice;

        $indice *= 4;
        $indice += 10;
        $yDeb += 5;

        imagestring($image, 5, $indice, $yDeb, $texte, imagecolorallocate($image, 0, 0, 0));

        $yDeb += 25;
    }

    $image = imagerotate($image, 90, 0);
    imagejpeg($image);
    imagedestroy($image);
} else {
    echo 'Vous n\'êtes pas connecté.';
    echo '<a href="./login.html">Page de connexion</a>';
}
