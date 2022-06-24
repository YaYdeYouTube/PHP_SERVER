<?php session_start(); 

    include 'include/login.php';
    include 'include/signin.php';

    $pseudo = $_COOKIE['pseudo'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Le site officiellle de YaYdeYouTube</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header class="hp">
        <ul class="us">
            <li id="user"><?=$pseudo ?></li>
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
            <li><a href="#">Contact</a></li>
            <li><a href="vente.php">Vente</a></li>
        </ul>
    </header>
    <center>
        <div class="contact">
            <h4 class="sent-notification"></h4>
            <form id="form-msg" method="post">
                <label for="name">Votre nom</label><input type="text" name="name" id="name" placeholder="Votre prénom">
                <label for="email">Votre email</label><input type="email" name="email" id="email" placeholder="Votre E-mail">
                <label for="sbj">Sujet du mail</label><input type="text" name="sbj" id="sbj" placeholder="Sujet du Mail">
                <textarea id="body" rows="5" placeholder="Votre message"></textarea>
                <button type="button" onclick="sendEmail()" value="Envoyer le mail">submit</button>
            </form>
        </div>
    <center>

    <?php 

        if(isset($_POST['view-profil'])){
            header('Location:profil.php');
            exit;
        }

        if(isset($_POST['logout'])){
            header('Location:logout.php');
            exit;
        }



    ?>

    
</body>
</html>