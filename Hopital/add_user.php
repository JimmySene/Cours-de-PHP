<?php session_start();

if(!isset($_SESSION['login']) || $_SESSION['lvl'] == 0)
{
	header('location:login.php');
} 

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Add User</title>
	</head>
	<body>
		<h1>Ajouter un utilisateur</h1>
		<form action="add_user.php" method="post">
			<p><label for="login">Nom de l'utilisateur : </label> <input type="text" name="login" id="login" /></p>
			<p><label for="password">Mot de passe : </label> <input type="password" name="password" id="password" /></p>
			<p><label for="verif_password">Mot de passe : </label> <input type="password" name="verif_password" id="verif_password" /></p>
			<p><label for="level">Level : </label><select name="level">
				<option value="0">Utilisateur</option>
				<option value="1">Administrateur</option>
			</select></p>
			<p><input type="submit" value="Créer l'utilisateur" /></p>
		</form>

		<?php if(isset($_POST['login']))
		{
			$login = $_POST['login'];
			$mdp = $_POST['password'];
			$verif_mdp = $_POST['verif_password'];
			$level = $_POST['level'];

			if($mdp == $verif_mdp)
			{
				$con = mysqli_connect('localhost', 'root', '', 'hopital');
				$req = "INSERT INTO user VALUES('$login', '$mdp', '$level')";
				mysqli_query($con, $req);
				echo "L'utilisateur a été créé.";
			}
			else
			{
				echo "Les mots de passes ne sont pas identiques !";
			}
		}
		?>
		
	</body>
</html>