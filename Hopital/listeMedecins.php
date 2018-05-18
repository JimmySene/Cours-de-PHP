<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Liste des médecins</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>
	<body>
        <h1>Liste des médecins</h1>
        <hr />
       <?php 
       $con = mysqli_connect('localhost', 'root', '', 'hopital');
       $req = "SELECT * FROM medecins";
       $resultat = mysqli_query($con, $req);

       ?>
        <table>
            <tr>
                <th>Nom</th><th>Prénom</th><th>Specialité</th>
                <?php while($donnees = mysqli_fetch_assoc($resultat)) { ?>
                    <tr>
                        <td><?=$donnees['nom']?></td>
                        <td><?=$donnees['prenom']?></td>
                        <td><?=$donnees['specialite']?></td>
                        <td><a href="modif.php?id=<?=$donnees['numed']?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="sup.php?id=<?=$donnees['numed']?>"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                <?php } ?>
            </tr>
        </table>
    </body>
</html>