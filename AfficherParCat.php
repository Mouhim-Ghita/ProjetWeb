<?php
require_once('db.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
		$categorie=$_POST['categorie'];
		$sql="SELECT SUM(prixHt) AS totalsum  FROM `liste` WHERE `categorie` like '$categorie%' ";
		$resultat=mysqli_query($conn,$sql);
		
	if($tableau=mysqli_fetch_assoc($resultat))
	{
		echo '<script type="text/javascript"> alert("le cout total de '.$categorie.'est: '.$tableau['totalsum'].'Dhs")</script> ';
		
	}

		
		
}		
?>
<!doctype html>
<html>
<head>
<title>afficher par annee</title>
<meta charset="utf-8"  />
<link rel="stylesheet" type="text/css" href="miseEnPage.css">
</head>
<body class="affichecateg">
<form action="AfficherParCat.php" method="post">
<table cols="2">
	<tr><td class="acceuil" align="center">la categorie </td></tr>
				<tr><td><INPUT NAME="categorie"  TYPE="text" required />
				</td></tr>
	</table>
		<table>
		<tr><td><button name="rechercher" type="submit">calculer</button></table>
</form>



</body>
</html>