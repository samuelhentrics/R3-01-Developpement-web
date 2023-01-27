<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" min="15" max="99">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="valeur">Valeur en Euro du don</label>
        <input type="number" id="valeur" name="valeur" min="1">
    </div>
    <input type="submit" value="OK">
</form>
</body>
</html>