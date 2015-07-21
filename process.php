<?php

session_start();
include './connection.php';

$username = mysql_real_escape_string($_POST['username']);
$password = md5($_POST['password']);
$today = date("j F Y , g:i a");
//$today = date("F j, Y, g:i a");  

$query = mysql_query("SELECT * FROM user WHERE username= '$username' AND password ='$password'");
$data = mysql_fetch_array($query);
//$row = mysql_num_rows($query);
//echo $query;
if (mysql_num_rows($query) == 1) {

    $_SESSION['username'] = htmlspecialchars($data['username']);
    $_SESSION['password'] = $data['password'];
//    $_SESSION['role'] = $data['role'];
    $_SESSION['id_user'] = $data['id_user'];

//    if ($data['role'] == '1' && $data['level'] == 'Superadmin' && $data['status'] == 'Active') {
//        $insert_lastlogin = "UPDATE user SET last_login = '$today' WHERE username = '$username'";
//        mysql_query($insert_lastlogin);
//        echo "<script>alert('Welcome $username')</script>";
//        echo "<script>javascript:window.location='../admin/index.php'</script>";
//    } elseif ($data['role'] == '2' && $data['level'] == 'Administrator' && $data['status'] == 'Active') {
//        $insert_lastlogin = "UPDATE user SET last_login = '$today' WHERE username = '$username'";
//        mysql_query($insert_lastlogin);
//        echo "<script>alert('Welcome $username')</script>";
//        echo "<script>javascript:window.location='../admin/index.php'</script>";
//    } elseif ($data['role'] === '3' && $data['level'] === 'User' && $data['status'] === 'Active') {
//        $insert_lastlogin = "UPDATE user SET last_login = '$today' WHERE username = '$username'";
//        mysql_query($insert_lastlogin);
        echo "<script>alert('Welcome $username')</script>";
        echo "<script>javascript:window.location='index.php'</script>";
//    } elseif ($data['status'] == 'Deactive') {
//        echo "<script>alert('Your username may be not active. Please check your email to verify your account.')</script>";
//        echo "<script>javascript:history.go(-1);</script>";
//    }
} else if ($password != $data['password']) {
    echo "<script>alert('Sorry, your username or password incorect')</script>";
    echo "<script>javascript:history.go(-1);</script>";
}