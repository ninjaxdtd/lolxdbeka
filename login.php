<?php




DEFINE('host','localhost');

DEFINE('user','root');

DEFINE('password',' ');

$conn =mysqli_connect(host,user,password);
$db = mysqli_select_db($conn, 'baza_pracownicy');

$kwerenda ="Select";


?>