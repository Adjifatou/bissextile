<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Annees bisextile</title>
</head>
<body>
	<h1>Annees Bissextiles</h1>
	<form method="POST" action="index.php">
	<input type="number" name="annees" placeholder="saisir une annee">
	<input type="submit" name="valider">
	</form>


	<?php
	if (isset($_POST['valider'])) {
		
		$annee=$_POST['annees'];
	
		
		if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) 
		{
		echo '<p style="color:green";> annee bissextile</p>';
	}
		 else {
		echo '<p style="color:#ff0000";> nest pas bissextile</p>';
	}
	
	}


	?>


</body>
</html>