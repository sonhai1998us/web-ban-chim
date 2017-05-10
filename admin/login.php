<?php
@session_start();
$err="";
if(isset($_SESSION["error"]))
{
	$err=$_SESSION["error"];
	$_SESSION["error"]="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="public/layout/resources/login/img/favicon.png">

    <title>Login Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="public/layout/resources/login/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="public/layout/resources/login/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="public/layout/resources/login/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="public/layout/resources/login/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="public/layout/resources/login/css/style.css" rel="stylesheet">
    <link href="public/layout/resources/login/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="quantri.php" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="ten_dang_nhap" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="mat_khau" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" id="remember-password" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
            
        </div>
      </form>

    </div>


  </body>
</html>
