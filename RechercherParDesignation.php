	<?php
	require_once('db.php');
	if(isset($_POST['rechercher'])){
	
		$designation=$_POST['designation'];
		echo'
			<table border>
			<tr><td>N_Ordre</td><td>Département</td>
			<td>Catégorie</td><td>Désignation</td>
			<td>fournisseur</td>
			<td>prixHt en Dh</td>
			<td>Date Acquisition</td></tr>
			
			';
		
		
		//$sql = "SELECT * FROM `liste` where `designation` = "$designation'";
		$sql=$conn -> query("SELECT * FROM `liste` where `designation` ='$designation' ");
		//$resultat=mysqli_query($conn,$sql);
		while(($tableau=$sql->fetch_assoc())!=NULL)
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
<title>chercher par designation</title>
</head>

<body class="recherchedesign">
<form action="RechercherParDesignation.php"   method="post" >
<table cols="2">
	<tr><td class="acceuil">la désignation</td></tr>
				<tr><td><INPUT NAME="designation"  TYPE="text" required />
				</td></tr>
	</table>
		<table>
		<tr><td><button name="rechercher" type="submit">Recherche</button></table>
</form>

</body>
</html>