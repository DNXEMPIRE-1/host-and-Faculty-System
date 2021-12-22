<?php

session_start();

include("conn/db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="data:image/png;base64,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">
    <meta name="csrf-token" content="x1ZDz3mvfdo17z6Leyn4i2XuMECMow1vCUWlNtm0">

    <title>HOST SUPERVISOR</title>
    <link href="include/datatable.css" rel="stylesheet">
    <link href="include/select1.css" rel="stylesheet">
    <link href="include/fonts.css" rel="stylesheet">
    <link href="include/icons.css" rel="stylesheet">
    <link href="include/style.css" rel="stylesheet">
    <link href="include/date.css" rel="stylesheet">
    <link href="include/custom.css" rel="stylesheet" >
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden"><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br><br><br><br><br><br><br><br><br><br>
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Host Supervisor</h1>
                        <p class="text-muted">Please Login to the Portal</p>
                        <form method="POST" action="">
                            <input type="hidden" name="_token" value="x1ZDz3mvfdo17z6Leyn4i2XuMECMow1vCUWlNtm0">
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input type="email" id="email" name="host_email" class="form-control" value=""
                                    placeholder="Youremail@domain.com" autofocus required >
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="password" id="password" name="host_pass" class="form-control"
                                    placeholder="password" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block" name="host_login">Login</button>
                                </div>
                                <div class="col text-right">
                                    <a href="resetpassword.php" class="btn btn-link px-0">Reset Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary card p-4">
                    <div class="card-body text-center">
                        <div>
                            <h2>Faculty Supervisor & Attachment
                                coordinator & Students</h2>
                            <br>
                            <p>You will need your domain email and password to login.</p>
                            <p><a href="/*co-shared*/" class="btn btn-primary btn-block active mt-3"> Login </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php

if(isset($_POST['host_login'])){

$host_email = mysqli_real_escape_string($con,$_POST['host_email']);

$host_pass = mysqli_real_escape_string($con,$_POST['host_pass']);

$get_host = "select * from hosts where host_email='$host_email' AND host_pass='$host_pass'";

$run_host = mysqli_query($con,$get_host);

$count = mysqli_num_rows($run_host);

if($count==1){

$_SESSION['host_email']=$host_email;

echo "<script>alert('You are Logged in into host panel')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>