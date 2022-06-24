<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Le site officielle de YaYdeYouTube</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="signin">
		<h1>Signin</h1>
		<form method="post">
			<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required><br>
			<input type="email" name="email" id="email" placeholder="Votre E-mail" required><br>
			<input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br>
			<input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de pass" required><br>
			<input type="submit" name="formsend" id="formsend" value="Signin"><br>
		</form>
		<?php include 'include/signin.php';?>
	</div>
    <p>Déja un compte ? <a href="index.php">Connectez-vous !</a></p>
</body>
</html>