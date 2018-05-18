<?php 
if(isset($_POST['nom']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $specialite = $_POST['specialite'];
    $service = $_POST['service'];

    $con = mysqli_connect('localhost', 'root', '', 'hopital');
    $req = "UPDATE medecins SET nom = '$nom', prenom = '$prenom', specialite = '$specialite', service = '$service' WHERE numed = $id";
    mysqli_query($con, $req);
}

if(isset($_GET['id']))
{
    $id = $_GET['id'];
} else 
{
   header('location:listeMedecins.php'); 
}?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Modifier un médecin</title>
	</head>
	<body>
        
     
       <?php 
       $con = mysqli_connect('localhost', 'root', '', 'hopital');
       $req = "SELECT * FROM medecins WHERE numed = '$id'";
       $resultat = mysqli_query($con, $req);
       $donnees = mysqli_fetch_assoc($resultat);

       ?>

      <form action="modif.php" method="post">
        <p><label for="nom">Nom : </label><input type="text" name="nom" id="nom" value="<?=$donnees['nom']?>" /></p>
        <p><label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom" value="<?=$donnees['prenom']?>" /></p>
        <p><label for="specialite">Specialité : </label><input type="text" name="specialite" id="specialite" value="<?=$donnees['specialite']?>" /></p>
        <p><label for="service">Service : </label><select name="service" id="service">
            <?php for($i = 1; $i<=5; $i++) { ?>
            <option value="<?=$i?>" <?php if($donnees['service'] == $i){ echo 'selected';}?>><?=$i?></option> 
            <?php } ?>
        </select></p>
        <input type="hidden" name="id" value="<?=$id?>" />
        <p><input type="submit" value="modifier" /></p>
      </form>
    </body>
</html>