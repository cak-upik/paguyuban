<?php

$host="localhost";
$user="fitriyan_paguyub";
$psswd="paguyuban123";
$db_name="fitriyan_paguyuban";

mysql_connect($host, $user, $psswd)or die("cannot connect to server");
mysql_select_db($db_name)or die("cannot select db"); 
?>