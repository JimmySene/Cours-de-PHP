<?php 

$login = $_POST['login'];
$pwd = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'hopital');
$req = "SELECT * FROM user WHERE login = '$login' AND mdp = '$pwd'";

$resultat = mysqli_query($con, $req);

if(mysqli_num_rows($resultat) > 0)
{
	echo 'CONNECTE !';
} else {
	header("location:login.php");
}
?>