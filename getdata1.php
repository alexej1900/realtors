<?php
$dbhost="localhost";
$dbname="db";
$username="alex";
$password="root";



$con= new mysqli ($dbhost, $username, $password, $dbname) or die($con->connection_error);


if ($_POST['category']=='apartment'){
	$table = 'form';
	$cat = 'APARTMENT/img/';
}elseif ($_POST['category']=='house') {
	$table = 'house';
	$cat = 'HOUSES/img/';
}


$foto1 = $_FILES['foto1']['name'];
$foto1_tmp = $_FILES ['foto1']['tmp_name'];
$foto2 = $_FILES['foto2']['name'];
$foto2_tmp = $_FILES ['foto2']['tmp_name'];
$foto3 = $_FILES['foto3']['name'];
$foto3_tmp = $_FILES ['foto3']['tmp_name'];
$foto4 = $_FILES['foto4']['name'];
$foto4_tmp = $_FILES ['foto4']['tmp_name'];

$sity = $_POST['sity'];
$address = $_POST['address'];
$district = $_POST['district'];
$metro = $_POST['metro'];
$rooms = $_POST['rooms'];
$level = $_POST['level'];
$area = $_POST['area'];
$height = $_POST['height'];
$year = $_POST['year'];
$toilet = $_POST['toilet'];
$small_descript = $_POST['small_descript'];
$descript = $_POST['descript'];
$price = $_POST['price'];

if ($sity=='Киев') {$city_id=1;}
if ($sity=='Ирпень') {$city_id=2;}
if ($sity=='Буча') {$city_id=3;}
if ($sity=='Гостомель') {$city_id=4;}
if ($sity=='Софиевская Борщаговка') {$city_id=5;}


$img1_url='img/'.$foto1;
$img2_url='img/'.$foto2;
$img3_url='img/'.$foto3;
$img4_url='img/'.$foto4;

move_uploaded_file($foto1_tmp, $cat.$foto1);
move_uploaded_file($foto2_tmp, $cat.$foto2);
move_uploaded_file($foto3_tmp, $cat.$foto3);
move_uploaded_file($foto4_tmp, $cat.$foto4);

$sql = "INSERT IGNORE INTO $table (`description`, `small descript`, `city_id`, `rooms`, `foto1`, `foto2`, `foto3`, `foto4`, `address`, `distrikt`, `metro`, `level`, `area`, `heigt`, `toilet`, `year`, `price`) VALUES ('$descript','$small_descript', '$city_id', '$rooms', '$img1_url','$img2_url', '$img3_url','$img4_url', '$address', '$district', '$metro', '$level', '$area', '$height', '$toilet', '$year', '$price')";



$con->query($sql);
if ($table=='form'){
 		header('Location: APARTMENT/catalogApartment.php');
 	}else{
 		header('Location: HOUSES/catalogHouse.php');
 	}
mysql_close($con);

?>