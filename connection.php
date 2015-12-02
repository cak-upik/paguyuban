<?php

$host="localhost";
$user="root";
$psswd="root";
$db_name="paguyuban";

mysql_connect($host, $user, $psswd)or die("cannot connect to server");
mysql_select_db($db_name)or die("cannot select db"); 
?>