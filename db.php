<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="ensafapplication";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) {
    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Succès" ;

 ?>


