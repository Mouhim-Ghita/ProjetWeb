<?php
require_once('db.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
		$dateA=$_POST['dateR'];
		$sql="SELECT SUM(prixHt) AS totalsum  FROM `liste` WHERE `dateAcquisition` like '$dateA-%' ";
		$resultat=mysqli_query($conn,$sql);
		
	if($tableau=mysqli_fetch_assoc($resultat))
	{
		echo '<script type="text/javascript"> alert("le cout total de '.$dateA.' est: '.$tableau['totalsum'].'DHs")</script> ';
		
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
<body class="afficheanne">
<form action="AfficherParAnnee.php" method="post">
<table cols="2">
	<tr><td class="acceuil" align="center">l'année rechercher</td></tr>
				<tr><td><INPUT NAME="dateR"  TYPE="number" required />
				</td></tr>
	</table>
		<table>
		<tr><td><button name="rechercher" type="submit">calculer</button></table>
</form>



</body>
</html>