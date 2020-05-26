<?php
$baza = new mysqli("localhost", "root", "", "db_zd");
if (mysqli_connect_errno()) die("Błąd:".mysqli_connect_errno());
$baza->set_charset("UTF-8");

?>
