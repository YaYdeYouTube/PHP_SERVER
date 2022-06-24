
<?php

	include 'database.php';
	global $db;

	if(isset($_POST['formsend'])){

		extract($_POST);

		if (!empty($password) && !empty($cpassword) && !empty($email) && !empty($pseudo)){

			if ($password == $cpassword) {

					
				$options = [
    				'cost' => 12,
				];

				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

				$c = $db->prepare("SELECT email from users WHERE email = :email");
				$c->execute(['email' => $email]);
				$s = $db->prepare("SELECT pseudo from users WHERE pseudo = :pseudo");
				$s->execute(['pseudo' => $pseudo]);
				$result = $c->rowCount();
				$sresult = $s->rowCount();

				if($result == 0 && $sresult == 0){
					$q = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(:pseudo,:email,:password)");
					$q->execute([
						'pseudo' => $pseudo,
						'email' => $email,
						'password' => $hashpass
					]);
					setcookie("pseudo", $pseudo, time() + (360 * 24 * 3600 ));
					setcookie("email", $email, time() + (360 * 24 * 3600));
					echo "Le compte a été créée, connection en cour...";
					$_SESSION['spseudo'] = $_COOKIE['pseudo'];
					$_SESSION['semail'] = $_COOKIE['email'];
					header('location:main.php ');
					exit;

				}else {
					echo "Un email ou un pseudo existe déja !";
				}

					
				}else {
					echo "La confirmation du mot de passe n'est pas juste !";
				}


				//if(password_verify($password, $hashpass)) {
				// 	echo "le mot de passe est correte";
				// } else {
				// 	echo "Le mot de passe n'est pas correct";
				// }

			// }else {
			// 	echo "Les chen ne sont pas replies ";
			// }

		};

	};
		
	?>