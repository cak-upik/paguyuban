<?php

session_start();
include './connection.php';


if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
//    $password = mysql_real_escape_string($_POST['password']);

    $result = mysql_query("SELECT * FROM user WHERE username='$username' and password='$password'");
    $count = mysql_num_rows($result);
    $row = mysql_fetch_array($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $row['id_user'];
        $_SESSION['user_agent'] = $row['username'];
        echo $row['id_user'];
//        echo $row['username'];
    }
}