<?php 

session_start();
    $pseudo = $_COOKIE['pseudo'];
    $email = $_COOKIE['email'];

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le site officielle de YaYdeYouTube - Acceuil</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <header class="hp">

            <ul class="us">

                <li id="user"><?php echo $pseudo; ?></li>

            </ul>

            <ul class="dc">

                <form method="post">

                    <input type="submit" name="view-profil" id="view-profil" value="profil">
                    <input type="submit" name="logout" id="logout" value="Se déconnecter">

                </form>

            </ul>

            <ul class="rs">

                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Actualitée</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="vente.php">Vente</a></li>

            </ul>

        </header>
        <h1>Bienvenue sur le site officielle de YaYdeYouTube, <?php echo $pseudo; ?> !</h1>
        <div class="content">

            <div class="leftbox">

                <h1>My playing : </h1>
                <p><!--En cours...-->Quiz Pokémon : En cours...</p>
                <p><!--En cours...-->The adventure of the Hero : En cours...</p>

            </div>

            <div class="centerbox">

                <h1>Réseau sociaux : </h1>
                <p>YouTube : https://www.youtube.com/channel/UCdbL9WxKGyRmwj08yqbaH0g</p>
                <p>Discord : https://discord.gg/hupGBvg8Pn</p>
                <p>Twitch : https://www.twitch.tv/yaydeyoutube</p>
                <p>Le lien du site :) : </p>

            </div>

            <div class="rightbox">

                <h1>Ma dernière vidéo :</h1>
                <p>Acune vidéo publier</p>

            </div>

        </div>

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
