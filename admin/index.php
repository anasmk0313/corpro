 <?php
 session_start();
    if(isset($_SESSION["username"]))
     {
    ?>
    <script type="text/javascript">
    window.location="dash.php";
    </script>
    <?php
    }
    require "./connection.php" ;
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                   
                </div>
                <div class="login-form">
                    <form action="" name="form1" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                              
                                <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                               <!--  -->
                              <div class="alert alert-danger" id="failure" style="margin-top:10px;display:none;">
                             <strong>Invalid!</strong>Invalid Username or Password
                            </div>.
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit1']))
    {
        $count=0;
        $username=mysqli_real_escape_string($con,$_POST["username"]);
        $password=mysqli_real_escape_string($con,$_POST["password"]);
        $res=mysqli_query($con,"select * from admin_login where username='$username' AND password='$password'");
        $count=mysqli_num_rows($res);
        if($count==0)
        {
        ?>
        <script type="text/javascript">
            document.getElementById("failure").style.display="block";
           </script>
        <?php
        }
       else{
             $_SESSION["username"]=$username;
        ?>
        <script type="text/javascript">
            window.location ="dash.php";
        </script>
    <?php

    }


}
?>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
