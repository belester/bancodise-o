
<?php
$host ='localhost';
$db = 'banco';
$user = 'root';
$pw = '';

$mysqli =  new mysqli($host, $user, $pw, $db);
if ($mysqli->connect_error){
	mysql_falta_error();
	die($mysqli->connect_error);
}
$mysqli -> set_charset('utf8')
?>