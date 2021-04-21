<?php
require_once('db.php');
	if(isset($_GET['Numero_Ordre'])){
			$Numero_Ordre=$_GET['Numero_Ordre'];
			$sql="SELECT * FROM liste where `N_Ordre`='$Numero_Ordre'";
			$result=mysqli_query($conn, $sql);
			
		while( $tableau=mysqli_fetch_assoc($result))
  {
	  if($tableau['departement']=='GEI')
	  {  $ge="checked";
		$gi="";
			
	}
	elseif($tableau['departement']=='GI')
	  {  $ge="";
		$gi="checked";
			
	}
  
	  
	  echo'
	   <form action="ModifierMateriel.php"   method="POST">;
		<FIELDSET>
			<legend>Materiel</legend>
			<table cols="2">
			<tr><td class="acceuil">Numero_Ordre:</td></tr>
			<tr><td><INPUT NAME="Numero_Ordre" id ="numero" value='.$_GET['Numero_Ordre'].' disabled>
				</td></tr>
			<tr><td class="acceuil">Département:</td></tr>
			<tr><td><INPUT TYPE="RADIO" name="Département"'. $ge.' value="GEI">GEI</td></tr>
			<tr><td><INPUT TYPE="RADIO" name="Département" '.$gi.' value="GI">GI</td></tr>
			 <tr><td class="acceuil">Catégorie:</td></tr>
		<tr><td><INPUT NAME="Catégorie" id ="numero" value="'.$tableau['categorie'].'" TYPE="text">
		</td></tr>
		<tr><td class="acceuil">Désignation:</td></tr>
				<tr><td><INPUT NAME="Désignation" id ="numero" value="'.$tableau['designation'].'" TYPE="text">
				</td></tr>
				<tr><td class="acceuil">Fournisseur</td></tr>
				<tr><td><INPUT NAME="Fournisseur" id ="numero" value="'.$tableau['fournisseur'].'" TYPE="text">
				</td></tr>
				<tr><td class="acceuil">Prix HT:</td></tr>
				<tr><td><INPUT NAME="PrixHT" TYPE="number" id ="numero" value="'.$tableau['prixHt'].'">
				</td></tr>
				<tr><td class="acceuil">Date_acquisition:</td></tr>
				<tr><td><INPUT NAME="DateAcquisition" id ="numero" value="'.$tableau['dateAcquisition'].'" TYPE="Date">
				</td></tr>
   		</table>
			
		</FIELDSET>
		<table>
		<input type="hidden" name="Numero_Ordre" value='.$_GET['Numero_Ordre'].'>
		<tr><td><input type="submit" name="modifier" value="Modifier">
			</td></tr></table>
			</table>
	</form>';
  }
	}
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
 if (isset($_POST))
{
	$nombre_ordre=(int) $_POST['Numero_Ordre'];
	$departement=$_POST['Département'];
	//$departement='empty';
	$categorie=$_POST['Catégorie'];
	$designation=$_POST['Désignation'];
	$fournisseur=$_POST['Fournisseur'];
	$prix=$_POST['PrixHT'];
	$date=$_POST['DateAcquisition'];

		$sql2="UPDATE liste SET `departement`='$departement',`categorie`='$categorie',`designation`='$designation',`fournisseur`='$fournisseur',`prixHt`='$prix',`dateAcquisition`='$date' WHERE `N_Ordre`='$nombre_ordre';";

		$run=mysqli_query ($conn,$sql2);

		if($run)
		{
			echo '<script type="text/javascript"> alert("modified")</script> ';
		}
		else
		{	
			echo '<script type="text/javascript"> alert("not modified")</script> ';
		}
	 
}}
	  
 		
  

?>

<!doctype html>
 
<html>
<head><title>numorder</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="miseEnPage.css">
</head>
<body class="modifierimage">
<form action="ModifierMateriel.php"   method="GET" >
<table cols="2">
				<tr><td class="acceuil">Numero d'ordre:</td></tr>
				<tr><td><INPUT NAME="Numero_Ordre" PLACEHOLDER=" votre numero d'ordre" TYPE="number" required />
				</td></tr>
	</table>
		<table>
		<tr><td><button name="ajouter" type="submit">Modifier</button></table>
		</form>
		
</body>
</html>