<!DOCTYPE html>
<html>
	<head>
		<title>Page réception</title>
	</head>
	<body>
	
		<p><?php
		$valeur1 = $_POST['valeur1'];
		$valeur2 = $_POST['valeur2'];
		$operateur = $_POST['operateur'];
		$resultat = 0;
		
		switch($operateur) {
			case "+":
				$resultat = $valeur1 + $valeur2;
				break;
			case "-":
				$resultat = $valeur1 - $valeur2;
				break;
			case "*":
				$resultat = $valeur1 * $valeur2;
				break;
			case "/":
				if($valeur2 == 0)
					$resultat = "Division par 0";
				else
					$resultat = $valeur1 / $valeur2;
				break;
		}
		
		echo "$valeur1 $operateur $valeur2 = $resultat";
		?></p>
		
	</body>
</html>