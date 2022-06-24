<?php 

    session_start();
    include "include/login.php";
    include "include/signin.php";
    $pseudo = $_COOKIE['pseudo'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Vente - Le site oficiel de YaYdeYouTube</title>
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
            <li><a href="#">Actualitée</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">Vente</a></li>

        </ul>

    </header>


    <?php
        
        if(isset($_POST['logout']))
        {
            
            session_destroy();
            header('location:logout.php');
            exit;
            
            
        }

        if(isset($_POST['view-profil']))
        {

            $_SESSION['pseudo'] = $_COOKIE['pseudo'];
            $_SESSION['email'] = $_SESSION['email'];
            header('location:profil.php');
            exit;


        }
    
    ?>

</body>
</html>