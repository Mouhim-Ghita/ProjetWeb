	<?php
	require_once('db.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
		$categorie=$_POST['categorie'];
		echo'
			<table border>
			<tr><td>N_Ordre</td><td>Département</td>
			<td>Catégorie</td><td>Désignation</td>
			<td>fournisseur</td>
			<td>prixHt en Dh</td>
			<td>Date Acquisition</td></tr>
			
			';
		
		
		$sql = "SELECT * FROM `liste` where `categorie` = '$categorie'";
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
		/*$cat=mysqli_query($conn,"SELECT * FROM `liste` where `categorie` = '$categorie'");
        while( $db=mysqli_fetch_assoc($cat))
            {
                echo '
                <tr>
                <td>'.$db['N_Ordre'].'</td>
                <td>'.$db['departement'].'</td>
                <td>'.$db['categorie'].'</td>
                <td>'.$db['designation'].'</td>
                <td>'.$db['fournisseur'].'</td>
                <td>'.$db['prixHt'].'</td>
                <td>'.$db['dateAcquisition'].'</td>
                 </tr>
                 
                ';
            }*/
	}
	
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"  />
<link rel="stylesheet" type="text/css" href="miseEnPage.css">
<title>chercher par date</title>
</head>

<body class="recherchecat">
<form action="RechercherParCategorie.php"   method="post" >
<table cols="2">
	<tr><td class="acceuil">la categorie</td></tr>
				<tr><td><INPUT NAME="categorie"  TYPE="text" required />
				</td></tr>
	</table>
		<table>
		<tr><td><button name="rechercher" type="submit">Rchercher</button></table>
</form>

</body>
</html>