<?php
session_start();
if (!empty($_SESSION['login_user'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login :: E-Car </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" /> 

        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

        <link href="./css/font-awesome.min.css" rel="stylesheet" />
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />-->

        <link href="./css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet" />    

        <link href="./css/base-admin-2.css" rel="stylesheet" />
        <link href="./css/base-admin-2-responsive.css" rel="stylesheet" />

        <link href="./css/pages/signin.css" rel="stylesheet" type="text/css" />

        <link href="./css/custom.css" rel="stylesheet" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-cog"></i>
                    </a>

                    <a class="brand" href="./login.php">
                    <img src="img/android-icon-72x72.png" class="pull-left img-circle">
                        E-Car <br>
                        Antar Jemput Siswa
                        Raudhatul Jannah
                        <!--<sup>2.0</sup>-->				
                    </a>		
                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->

        <div class="account-container stacked">

            <div class="content clearfix" id="box">

                <form action="" method="post" name="login" id="validation-form">                    
                    <h1>Sign In</h1>		

                    <div class="login-fields">

                        <p id="error"></p>

                        <div class="field">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" required=""/>
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required=""/>
                        </div> <!-- /password -->

                    </div> <!-- /login-fields -->

                    <div class="login-actions">
                        <input type="submit" class="button btn btn-inverse btn-large" value="Login" id="login"/>
                    </div> 
                </form>
            </div> <!-- /content -->
        </div> <!-- /account-container -->


        <!-- Text Under Box -->
<!--        <div class="login-extra">
            Don't have an account? <a href="./signup.html">Sign Up</a><br />
            Remind <a href="#">Password</a>
        </div>  /login-extra -->


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./js/libs/jquery-1.8.3.min.js"></script>
        <script src="./js/libs/jquery-ui-1.10.0.custom.min.js"></script>
        <script src="./js/libs/bootstrap.min.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/jquery.ui.shake.js"></script>
        <script src="./js/Application.js"></script>
        <script src="./js/validation.js"></script>
        <script src="./js/plugins/validate/jquery.validate.js"></script>

        <script>
            $(document).ready(function()
            {
                $('#login').click(function()
                {
                    var username = $("#username").val();
                    var password = $("#password").val();
                    var dataString = 'username=' + username + '&password=' + password;
                    if ($.trim(username).length > 0 && $.trim(password).length > 0)
                    {
                        $.ajax({
                            type: "POST",
                            url: "process.php",
                            data: dataString,
                            cache: false,
                            beforeSend: function() {
                                $("#login").val('Connecting...');
                            },
                            success: function(data) {
                                if (data)
                                {
                                    $("body").load("index.php").hide().fadeIn(1500).delay(6000);
                                    //or
                                    window.location.href = "index.php";
                                }
                                else
                                {
                                    //Shake animation effect.
                                    $('#box').shake();
                                    $("#login").val('Login');
                                    $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
                                }
                            }
                        });

                    }
                    return false;
                });

            });
        </script>
    </body>
</html>
