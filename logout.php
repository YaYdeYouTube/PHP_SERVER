<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnection Reussie - Le site officielle de YaYdeYouTube</title>
    <link rel="stylesheet" href="css/dc.css">
</head>
<body>
    <h1>Déconnection reussi !</h1>
    <form method="post">
        <input type="submit" name="ct" id="ct" value="Continuer">
    </form>
    <?php
    
        if (isset($_POST['ct'])) {
            header('location:index.php');
        }
    
    ?>
    
</body>
</html>