<?php

$host = "localhost";
$user = "root";
$pswd = "root";
$db = "paguyuban";

mysql_connect($host, $pswd, $user) or die("Database Connect Failed, Check Configuration");
mysql_select_db($db) or die("No DB");
