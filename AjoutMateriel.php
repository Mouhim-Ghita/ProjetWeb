<?php

	require_once('db.php');

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
			$Numero_Ordre=$_POST['Numero_Ordre'];
			$Departement=$_POST['Departement'];
			$Categorie=$_POST['Categorie'];
			$Designation=$_POST['Designation'];
			$Fournisseur=$_POST['Fournisseur'];
			$PrixHT=$_POST['PrixHT'];
			$DateAcquisition=$_POST['DateAcquisition'];
/*echo $Numero_Ordre;
echo $Departement;
echo $Categorie;
echo $Designation;
echo $Fournisseur;
echo $PrixHT;
echo $DateAcquisition;
	*/		
			
			$sql="INSERT INTO liste (`N_Ordre`, `departement`, `categorie`, `designation`, `fournisseur`, `prixHt`, `dateAcquisition`) VALUES ($Numero_Ordre,'$Departement','$Categorie','$Designation','$Fournisseur',$PrixHT,'$DateAcquisition')";
				$run=mysqli_query ($conn,$sql);

		if($run)
		{
			echo '<script type="text/javascript"> alert("bien ajouter")</script> ';
		}
		else
		{	
			echo '<script type="text/javascript"> alert("mal ajouter")</script> ';
		}
			
			
	}

	
?>
<!doctype html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>ajouter</title> 
<link rel="stylesheet" type="text/css" href="miseEnPage.css">
</head>
<body class="ajouterimage">
<div>
	<form action="AjoutMateriel.php" method="post">
		<FIELDSET>
			<legend>Nouveau Materiel</legend>
			<table cols="2">
				<tr><td class="acceuil">Numero d'ordre:</td></tr>
				<tr><td><INPUT NAME="Numero_Ordre" PLACEHOLDER=" votre numero d'ordre" TYPE="number" required />
				</td></tr>
				<tr><td class="acceuil">D&eacute;partement:</td></tr>
				<tr><td><INPUT TYPE="RADIO" name="Departement" value="GEI" required >GEI</td></tr>
				<tr><td><INPUT TYPE="RADIO" name="Departement" value="GI" required>GI</td></tr>
				<tr><td class="acceuil">Cat&eacute;gorie:</td></tr>
				<tr><td><INPUT NAME="Categorie" PLACEHOLDER="la cat&eacute;gorie" TYPE="text" required />
				</td></tr>
				<tr><td class="acceuil">D&eacute;signation:</td></tr>
				<tr><td><INPUT NAME="Designation" PLACEHOLDER=" votre d&eacute;signation" TYPE="text" required />
				</td></tr>
				<tr><td class="acceuil">Fournisseur</td></tr>
				<tr><td><INPUT NAME="Fournisseur"  TYPE="text" required />
				</td></tr>
				<tr><td class="acceuil">Prix HT:</td></tr>
				<tr><td><INPUT NAME="PrixHT" TYPE="number" required />
				</td></tr>
				<tr><td class="acceuil">Date d'acquisition:</td></tr>
				<tr><td><INPUT NAME="DateAcquisition" TYPE="Date" required />
				</td></tr>
			</table>
		</FIELDSET>
			<table>
		<tr><td><button>Ajouter</button>
			<button type="reset">Annuler</button></td></tr></table>
	</form>
</div>

</body>
</html>