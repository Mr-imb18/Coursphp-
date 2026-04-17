<?php

    if(isset($_POST['Envoyer'])){
        echo"Hello";
        $nom = $_POST['nom'];
        echo $nom;
    }

?>

‹!DOCTYPE html>
‹html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    ‹meta name="viewport" content="width=device-width, initíal-scale=1.0"›
</head>
‹body>
    ‹form action="index.php" method="POST">
    ‹input type="text" name="nom" placeholder="votre nom"›
    ‹input type="text" name="pseudo" placeholder="votre pseudo">
    </form>
    ‹input type="submit" name="Envoyer" value="Envoyer">
</body>
</html>