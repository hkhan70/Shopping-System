<?php
session_start();
require_once "register.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

form  { display: table;      }
p     { display: table-row;  }
label { display: table-cell; }
input { display: table-cell; }
     .myButton {
    -moz-box-shadow: 0px 10px 14px -7px #276873;
    -webkit-box-shadow: 0px 10px 14px -7px #276873;
    box-shadow: 0px 10px 14px -7px #276873;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
    background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
    background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
    background-color:#599bb3;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;
    border-radius:15px;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:17px;
    font-weight:bold;
    padding:4px 7px;
    text-decoration:none;
    text-shadow:0px 1px 0px #3d768a;
}

</style>
</head>
<body>
  
    <?php 
require_once 'header.php' ;
 ?>

<div style="margin-left: 45%;">
  
<div style="margin-top:100px;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
                                <div>
                                  <h3 style="color:orange;">Sign Up</h3>

                                  <label for="email"><b>Username</b></label>
                                  <input type="text" placeholder="Enter Username" name="email"  required>
                                  <span style="color: red"><?php echo $username_err; ?></span></br>

                                  <label for="psw"><b>Password</b></label>
                                  <input type="password" placeholder="Enter Password" name="psw"  required>
                                  <span style="color: red"><?php echo $password_err; ?></span></br>


                                  <label for="psw-repeat"><b>Confirm</b></label>
                                  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                                  <span style="color: red"><?php echo $confirm_password_err; ?></span></br> 

                                   <label for="cell"><b>CellNo</b></label>
                                   <input type="tel" placeholder="Enter Cell" name="cell" required>
                                  </br></br>                                  

                                  <p style="color: blue;">By creating an account you agree to our <a href="#" style="color:blue;">Terms & Privacy</a>.</p>

                                  <div class="clearfix">
                                    <button type="submit" class="myButton" style="margin-left: 0%;">Sign Up</button>
                                  </div>
                                </div>
                          </form>
</div>
<hr>
<div style="margin-top:50px;">
                            <form action="login.php?op=in"  method="POST">
                                <div >
                                  <h3 style="color:orange;">Login</h3>

                                  <label for="email"><b>Username</b></label>
                                  <input type="text" placeholder="Enter Username" name="email" required>
                                  </br>
                                  <label for="psw"><b>Password</b></label>
                                  <input type="password" placeholder="Enter Password" name="psw" required>                                
                              
                                 </br></br>
                                  <div class="clearfix">                                    
                                    <button type="submit" class="myButton" style="margin-left: 0%;">Login</button>                                   
                                  </div>

                                </div>
                          </form>
                   </div>  
</div>
                   <br><br>
<?php 
require_once 'footer.php' ;
 ?>  
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
