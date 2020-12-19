<?php


$pass = $_POST['user_pass'];

if ($pass=='Tumanofa5717') {
  header('Location: loadForm.php');
} else {
  echo 'НЕПРАВИЛЬНЫЙ ПАРОЛЬ';
}
?>



