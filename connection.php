<?php

$host="localhost";
$user="root";
$psswd="Password1";
$db_name="ci_db";


mysql_connect("$host", "$user", "$psswd")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db"); 