<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Calculatrice</title>
	</head>
	<body>
	
		<form action="page2.php" method="post">
			<p>
				<input type="number" name="valeur1" />
				<select name="operateur">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
				</select>
				<input type="number" name="valeur2" />
			</p>
			<p><input type="submit" value="Calculer" /></p>
		</form>
		
	</body>
</html>