<?php
    if(isset($_POST["envoyer"])){
        $nom = $_POST['nom'];
        echo "Freedom pour " . $nom;
        if(empty($_POST['nom"]) || empty($_POST[' pseudo"])) {
             echo "Veuillez remplir tous les champs.";
        } else {
            $pseudo = $_POST['pseudo'];
            echo "Bienvenue, " . $pseudo. "!";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset-"UTF-8">
    <title>Document</title>
</head> 
<body>
    <form action="index.php" method="POST">
        <Label>Nom : </label><br>
        <input type="text" name="nom"><br>
        
        <Label>Pseudo :</label><br>
        <input type="text" name="pseudo"><br>
        
        <input type="submit" name="envoyer" value="Envoyer">
    
    </form>


</body>
</html>