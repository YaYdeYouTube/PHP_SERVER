
<?php

	if (isset($_POST['formlogin']))
	{
		include 'database.php';
		global $db;
		
		extract($_POST);

		if(!empty($lpseudo) && !empty($lemail) && !empty($lpassword))
		{

			$q = $db->prepare("SELECT * from users WHERE email = :email");
			$s = $db->prepare("SELECT * from users WHERE pseudo = :pseudo");
			$q->execute(['email' => $lemail]);
			$s->execute(['pseudo' => $lpseudo]);
			$result = $q->fetch();
			$sresult = $s->fetch();

			if($result == true && $sresult == true)
			 {
			 	//Le compte existe bien
			 	if (password_verify($lpassword, $result["password"])) {

					if (isset($lpseudo)) {

							if(isset($lemail)){

								if(isset($lpassword)) {


									setcookie("pseudo", $lpseudo, time() + (360 * 24 * 3600));
									setcookie("email", $lemail, time() + (360 * 24 * 3600));
									setcookie("password", $lpassword, time() + (360 * 24 * 3600));
									//echo "Votre pseudo est : " . $_COOKIE['pseudo'] . "<br/>";
									//echo "Votre email est : " . $_COOKIE['email'] . "<br/>";
									$_SESSION['pseudo'] = $_COOKIE['pseudo'];
									$_SESSION['email'] = $_COOKIE['email'];
									$_SESSION['password'] = $_COOKIE['password'];
									header('location:main.php');
									exit();

								}

							}

				    }


					//$_SESSION['pseudo'] = $sresult['pseudo'];
					//$_SESSION['email'] = $result['email'];
					


			 	}
			 	else
			 	{
			 		echo "Le mot de passe n'est pas correcte !";
			 	}
			 }
			 else
			 {
			 	echo "Le compte n'existe pas";
			 }

		}
		else
		{
			echo "Veuillez completer l'ensemble des champs";
		}

	}

?>