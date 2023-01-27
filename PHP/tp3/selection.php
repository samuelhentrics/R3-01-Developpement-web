<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <?php
            $nb = $_POST['nbPhotos'];
            print("<input type=hidden name='nbphotos' value=$nb>");
            for ($i=0; $i <= $_POST['nbPhotos']-1; $i++){
                print("<input type=file name='photo$i'><br>");
            }
            
        ?>
        <input type=submit value="Télécharger Photos">
        </form>
    <?php 
    
    ?>
</body>
</html>