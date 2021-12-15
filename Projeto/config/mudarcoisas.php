<?php 

session_start();

define('URL', 'http://localhost/projeto/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'projetokk');

$connect = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($connect, DB_NAME) or die(mysqli_error());
?>