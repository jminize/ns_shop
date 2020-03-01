<!DOCTYPE html>
<html lang="en">
<?php
include "connect.php";
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>กลุ่มวิสาหกิจชุมชนผ้าทอนาหมื่นศรี</title>
    <link rel="icon" href="img/na.png" type="img/na.png">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/resize.css" rel="stylesheet">

    <!-- modernizr -->
    <script src="js/modernizr.js"></script>
   <style>
       body{
            font-family: 'Kanit', sans-serif;
         
       }
   </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header" style="background-color:#F5F5F5">
            <div class="box-logo">
                <a href="index.php"><img src="img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <!--<li class="box-label"><a href="index.php">หน้าแรก</a><i class="ion-ios-circle-filled color"></i></li>-->
                <?php echo $_SESSION['user'];?>
        <?php
        if(isset($_SESSION['user'])){
          ?>
          <li><a href="logout.php">logout</a></li>
          <?php
        }else{
          ?>
          <li><a href="login.php">Admin Login</a></li>
          <?php
        }
        ?>
                <li class="box-label">Follow me</li>
                <li class="box-social"><a href="https://www.facebook.com/trangnameunsri/"><i class="ion-social-facebook"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->

        <!-- box-intro -->
        <section class="box-intro">
            <div class="table-cell">
            <img src="img/logo.png" width="500px">
                <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">ออกแบบลายหมอน.</b>
                        <b>&nbsp;ในรูปแบบของคุณ </b>
                    </span>
		        </h1>
                <h5>everything you need to build your personal portfolio</h5>
            </div>

            <div class="mouse">
                <div class="scroll"></div>
            </div>
        </section>
        <!-- end box-intro -->
    </div>
<!--<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif"  alt="#"/></div>-->

  <center>
 <a href="design.php" ><center><img src="img/button.png" width="320"></center></a>
          </center>
          </br>
          </br>
</div>
    <!-- footer -->
    

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>