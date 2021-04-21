<!DOCTYPE html>
<?php

require_once('db.php');

?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="miseEnPage.css">
	
	
</head>
<body class="deletimage" >
	<form action="" method="post" >
		<fieldset>
			<legend >supprimer Matériel</legend>
	<table>
			<tr><td class="acceuil">Numero d'ordre:</td></tr>
			<tr><td><INPUT NAME="Numero_Ordre" PLACEHOLDER=" votre numero d'ordre" TYPE="number" required /></td></tr>
		<tr><td><input type="submit" value="Supprimer" name="supprimer"><input type="reset" value="Annuler"></td></tr>
	</table>
		</fieldset>
		
	</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$nombre=$_POST['Numero_Ordre'];
	if (isset($_POST['supprimer']) )
{
	
	$sql="DELETE FROM liste WHERE `N_Ordre`='$nombre'";
	$run=mysqli_query ($conn,$sql);
	mysqli_close($conn);
	 

if($run)
{
	echo '<script type="text/javascript"> alert("deleted")</script> ';
}

else
{
	echo '<script type="text/javascript"> alert("number does not exist")</script> ';
}
}
	}

	
?>
	
	
	

</body>
</html>