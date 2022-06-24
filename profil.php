<?php session_start(); 

    $pseudo = $_COOKIE['pseudo'];
    $email = $_COOKIE['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <title>Profil - Site officiellle de YaYdeYouTube</title>
</head>
<body>
    <header class="hp">

        <ul class="us">
            <li id="user"><?= $pseudo; ?></li>
        </ul>

        <ul class="dc">
            <form method="post">
                <input type="submit" name="view-profil" id="view-profil" value="profil">
                <input type="submit" name="logout" id="logout" value="Se déconnecter">
            </form>
        </ul>

        <ul class="rs">
            <li><a href="main.php">Acceuil</a></li>
            <li><a href="#">Actualité</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="vente.php">Vente</a></li>
        </ul>
    </header>

    <ul class="ps">

        <h1>Votre profil : </h1>
        <li>Votre pseudo : <?php echo $pseudo; ?></li>
        <li>Votre email : <?php echo $email; ?></li>
        
    </ul>

    <?php 

        if(isset($_POST['logout'])){
            header('Location:logout.php');
            exit;
        }

    ?>

</body>
</html>