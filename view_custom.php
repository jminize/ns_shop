<!DOCTYPE html>
<html>
<?php
    include_once "connect.php";
    $font=$_GET["font"];
    $design=$_GET["design"];
    $back=$_GET["back"];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ดูรายละเอียดหมอน</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <script>
    var font='<?=$font?>';
    var design='<?=$design?>';
    $(document).ready(function(){
    $.ajax({
		url: "front.php",
		data: "action=showpic&font="+font+"&design="+design,
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_design').html(data);
		}
	});
  })
    </script>
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
        <header class="box-header">
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
        <div class="top-bar">
          <img src="img/logo.png" width="500" >
        </div>
       
        <!-- end box-intro -->
    </div>

    
<div class="container">
  <div class="row">
    <div id="design" class="col-sm-12" >
      <div class="customtab">
      <center>
          
      <table width=90% border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td>
            <div class="col-sm-12">
          <div class="col-sm-6" align="center">
          <h2>ด้านหน้า</h2>
          <center>
        <div>
        <div id="div_design"></div>
        </div>
        </center>
            <br>
          </div>
          <div class="col-sm-6" align="center">
          <h2>ด้านหลัง</h2>
          <div>
            <div style="position: relative; z-index: 99;"><img src="image\par\background\<?php echo $back;?>" width="300px" height="300px"/></div>
          </div>
              <br>
          </div>
        </div>
            </td>
        </tr>
    </table>
    </center>
      </div>
    </div>
  </div>
</div>



    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">© Box Portfolio 2016</p>
        </div>
    </footer>
    <!-- end footer -->

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