<?php
$mysql_server = "localhost:3307"; //mendeklarasikan IP Server yg diakses
$mysql_user = "root"; //usernama mysql
$mysql_password = ""; //password xampp default kosong
$mysql_db = "perpustkaan";   //nama database yang dipilih
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s \n", $mysqli->connect_error); //notif error
    exit();
}
$mysqli->set_charset("utf8"); //setting karakter menggunakan encode UTF 8
date_default_timezone_set('Asia/Jakarta');



?>
