<?php session_start();
if(!isset($_SESSION['login']))
{
	header('location:login.php');
} ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Page privée</title>
	</head>
	<body>
		<h1>Page privée</h1>
		<p>Bienvenue sur la page privée <?php echo $_SESSION['user']; ?></p>
		<?php if($_SESSION['lvl'] == 1) { ?>
		<a href="add_user.php">Ajouter un utilisateur</a>
<?php } ?>
		<p><a href="deconnexion.php">Se déconnecter</a></p>
		
	</body>
</html>