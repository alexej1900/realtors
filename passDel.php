<?php
$dbhost="localhost";
$dbname="db";
$username="alex";
$password="root";



$con= new mysqli ($dbhost, $username, $password, $dbname) or die($con->connection_error);

$pass = $_POST['user_pass'];
$id=$_POST['id'];
$table=$_POST['categ'];


if ($pass=='Tumanofa5717') {
	$sql = "DELETE FROM $table WHERE id='$id'";
 	if ($table=='form'){
 		header('Location: APARTMENT/catalogApartment.php');
 	}else{
 		header('Location: HOUSES/catalogHouse.php');
 	}
} else {
  	echo 'НЕПРАВИЛЬНЫЙ ПАРОЛЬ';
  	exit();
}

$con->query($sql);


?>