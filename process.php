<?php

session_start();
include './connection.php';

//$username = mysql_real_escape_string($_POST['username']);
//$password = md5($_POST['password']);
//$today = date("j F Y , g:i a");

$query = mysql_query("SELECT * FROM user WHERE username= '$username' AND password ='$password'");
$data = mysql_fetch_array($query);

if (isset($_POST['username']) && isset($_POST['password'])) {
// username and password sent from Form
    $username = mysqli_real_escape_string($_POST['username']);
//Here converting passsword into MD5 encryption. 
    $password = md5(mysqli_real_escape_string($_POST['password']));

    $result = mysqli_query("SELECT id_user FROM user WHERE username='$username' and password='$password'");
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// If result matched $username and $password, table row  must be 1 row
    if ($count == 1) {
        $_SESSION['login_user'] = $row['id_user']; //Storing user session value.
        echo $row['id_user'];
    }
}