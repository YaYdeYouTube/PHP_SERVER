
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connection - Le site officielle de YaYdeYouTube</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<h1>Bienvenue sur votre profil</h1>

	<div class="login">
	<h1>Login</h1>
	<form method="post">
		<input type="text" name="lpseudo" id="lpseudo" placeholder="Votre pseudo" required><br>
		<input type="email" name="lemail" id="lemail" placeholder="Votre E-mail" required><br>
		<input type="password" name="lpassword" id="lpassword" placeholder="Votre mot de passe" required><br>
		<input type="submit" name="formlogin" id="formlogin" value="Login"><br>
	</form>
	<?php include 'include/login.php'; 	?>
	</div>
	<p>Pas de compte ? <a href="psignin.php">Inscrivez-vous !</a></p>

</body>
</html>