<script>
    function GetXmlHttpObject() {
        var objXMLHttp = null;
        if (window.XMLHttpRequest) { // pour non-IE
            objXMLHttp = new XMLHttpRequest();
        } else {
            if (window.ActiveXObject) {
                try { // pour IE
                    objXMLHttp =
                        new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try { // pour une autre version de IE
                        objXMLHttp =
                            new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        window.alert("Votre navigateur ne prend pas en charge l'objet XMLHTTPRequest.");
                    }
                }
            }
        }
        return objXMLHttp;
    }
</script>


<?php




$xml = simplexml_load_file('fichier.xml');


foreach ($xml as $nomContinent => $listePays) {
    if ($nomContinent == "europe") {
        print("<h1>Continent $nomContinent</h1>");
        foreach ($listePays as $nomPays) {
            print("<ul>$nomPays</ul>");
        }
    }
}

// Fermer un fichier xml loadé




?>