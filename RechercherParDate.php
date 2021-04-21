	<?php
	require_once('db.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		$dateA=$_POST['dateR'];
		echo'
			<table border>
			<tr><td>N_Ordre</td><td>Département</td>
			<td>Catégorie</td><td>Désignation</td>
			<td>fournisseur</td>
			<td>prixHt en Dh</td>
			<td>Date Acquisition</td></tr>
			
			';
		
		
		$sql = "SELECT * FROM `liste` where `dateAcquisition` like '$dateA-%'";
		$resultat=mysqli_query($conn,$sql);
		while($tableau=mysqli_fetch_assoc($resultat))
		{echo'
			<tr>
			<td>'.$tableau['N_Ordre'].'</td>
			<td>'.$tableau['departement'].'</td>
			<td>'.$tableau['categorie'].'</td>
			<td>'.$tableau['designation'].'</td>
			<td>'.$tableau['fournisseur'].'</td>
			<td>'.$tableau['prixHt'].'</td>
			<td>'.$tableau['dateAcquisition'].'</td>
			</tr>';
			
		}
		echo'</table>';
	}
	
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"  />
<link rel="stylesheet" type="text/css" href="miseEnPage.css">
<title>chercher par date</title>
</head>

<body class="recherchedat">
<form action="RechercherParDate.php"   method="post" >
<table cols="2">
	<tr><td class="acceuil" align="center">la date rechercher</td></tr>
				<tr><td><INPUT NAME="dateR"  TYPE="number" required />
				</td></tr>
	</table>
		<table>
		<tr><td><button name="rechercher" type="submit">Rchercher</button></table>
</form>

</body>
</html>