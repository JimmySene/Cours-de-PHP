<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'hopital');
    $req = "DELETE FROM medecins WHERE numed = '$id'";
    mysqli_query($con, $req);
    header('location:listeMedecins.php');
} else {
    header('location:listeMedecins.php');
}
?>