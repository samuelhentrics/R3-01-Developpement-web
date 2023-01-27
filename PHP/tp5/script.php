<?php
    function creerHTML(){
        $config = parse_ini_file("config.ini", true);
        print_r($config);

        // DLC 13.0
        $nomFichierAGenerer = $config["NOMFIC"]["nomFichier"].".html";
        if (!file_exists($nomFichierAGenerer)){
            touch($nomFichierAGenerer);
        }

        // Variables
        
        $monFichierHTMLAGenerer = fopen($nomFichierAGenerer, "r+");

        // Traitements
        if (!($monFichierHTMLAGenerer)) {
            print("Impossible d'ouvrir le fichier \n");
            exit;
        }
        else {
            $commande = "<form action=\"".$config["NOMFIC"]["nomFichier"].".php\" method=\"post\">\n";

            for($i = 0; $i < $config["NB"]["nb"]; $i++){
                $commande = $commande."<p>".$config["NOMS"]["noms"][$i]." :</p><input id=\"".$config["NOMS"]["noms"][$i]."\" name=\"".$config["NOMS"]["noms"][$i]."\" ><br>\n";
            }

            $commande = $commande."<input type=\"submit\">\n";

            $commande = $commande."</form>";

            fputs($monFichierHTMLAGenerer, $commande);
        }

        fclose($monFichierHTMLAGenerer);
    }

    function creerPHP(){
        $config = parse_ini_file("config.ini", true);
        print_r($config);

        // Variables
        $nomFichierAGenerer = $config["NOMFIC"]["nomFichier"].".php";
        if (!file_exists($nomFichierAGenerer)){
            touch($nomFichierAGenerer);
        }

        $monFichierPHPAGenerer = fopen($nomFichierAGenerer, "r+");

        // Traitements
        if (!($monFichierPHPAGenerer)) {
            print("Impossible d'ouvrir le fichier \n");
            exit;
        }
        else {
            $commande = "";

            for($i = 0; $i < $config["NB"]["nb"]; $i++){
                $commande = $commande."<p>".$config["NOMS"]["noms"][$i]." : <?php echo \$_POST[\"".$config["NOMS"]["noms"][$i]."\"];  ?>  <br>\n";
            }

            fputs($monFichierPHPAGenerer, $commande);
        }

        fclose($monFichierPHPAGenerer);
    }
    
    creerHTML();
    creerPHP();

?>