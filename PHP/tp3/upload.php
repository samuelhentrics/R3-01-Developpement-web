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
    $destination = "upload/";
        for($i=0;$i<$_POST['nbphotos'];$i++){
            $nomF = $_FILES['photo'.$i]['name'];
            move_uploaded_file($_FILES['photo'.$i]['tmp_name'],$destination.$nomF);
            print("$nomF a été téléchargé<br>");
        }


    ?>
</body>
</html>