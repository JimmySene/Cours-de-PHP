<?php session_start();

$login = $_POST['login'];
$pwd = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'hopital');
$req = "SELECT * FROM user WHERE login = '$login' AND mdp = '$pwd'";

$resultat = mysqli_query($con, $req);

if(mysqli_num_rows($resultat) > 0)
{
	$_SESSION['login'] = true;
	$_SESSION['user'] = $login;
	$_SESSION['lvl'] = mysqli_fetch_assoc($resultat)['lvl'];
	header('location:page_privee.php');
} else {
	header("location:login.php?erreur");
}
?>