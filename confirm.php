<!DOCTYPE html>
<html>
<?php
    include_once "connect.php";
    session_start();
    if(isset($_SESSION['back'])&&isset($_SESSION['font'])&&isset($_SESSION['design'])){
        $font=$_SESSION['font'];
        $design=$_SESSION['design'];
        $back=$_SESSION['back'];
       
    }else{
        echo "<script type='text/javascript'>alert('ขออภัย!! คุณยังไม่ได้เลือกรูปแบบหมอน โปรดกลับไปเลือกอีกครั้ง')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=design.php'>";
        exit;
    }
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">
    

    <!-- modernizr -->
    <script src="js/modernizr.js"></script>
   <style>
       body{
            font-family: 'Kanit', sans-serif;
         
       }
   </style>

   <script>
  $(document).ready(function(){      
    $.ajax({
		url: "front.php",
		data: "action=confirm",
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_design').html(data);
		}
	});
  $.ajax({
		url: "back.php",
		data: "action=confirm",
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_back').html(data);
		}
	});
  })
</script>
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
        <div class="top-bar">
          <img src="img/logo.png" width="500" >
        </div>
       
        <!-- end box-intro -->
    </div>

    <form id="form1" name="form1" method="post" action="phpSend.php">
<div class="container">
  <div class="row">
    <div id="design" class="col-sm-12" >
      <div class="customtab">
      <center>
      <table width=90% border="0" cellspacing="1" cellpadding="1">
        <tr>
            <td>
            <div class="col-sm-12">
          <div class="col-sm-6" align="center" style="background-color:#F5F5F5">
          <h2>ด้านหน้า</h2>
            <div id="div_design"></div>
          </div>
          <div class="col-sm-6" align="center" style="background-color:#F5F5F5">
          <h2>ด้านหลัง</h2>
              <div id="div_back"></div>
          </div>
        </div>
            </td>
        </tr>
    </table>
    </center>


        <div class="col-sm-12">
        <input name="font" type="hidden" value="<?php echo $font;?>">
        <input name="design" type="hidden" value="<?php echo $design;?>">
        <input name="back" type="hidden" value="<?php echo $back;?>">
        <br>
        <center>
                <table width="75%" border="1" cellspacing="1" cellpadding="1">
                    <tr>
                        <td colspan="2" align="center" bgcolor="999999" ><font color="white"> <h2>ข้อมูลติดต่อ<font></h2></td>
                    </tr>
                    <tr>
                        <td border="1" width="139" height="43" bgcolor="BBBBBB"  ><center><h3>ชื่อ-นามสกุล</h3></center></td>
                        <td width="366" bgcolor="CCCCCC" >&nbsp; &nbsp;&nbsp; &nbsp;<input name="name_user" border="0" type="text" size=50 required></td>
                    </tr>
                    <tr>
                    <td width="139" height="43" bgcolor="BBBBBB"><center><h3>ชื่อเฟสบุ๊ค</h3></center></td>
                        <td bgcolor="EEEEEE">&nbsp; &nbsp;&nbsp; &nbsp;<input name="name_facebok"  size=50 type="text" required></td>
                    </tr>
                    <tr>
                    <td width="139" height="43" bgcolor="BBBBBB"><center><h3>เบอร์โทรศัพท์</h3></center></td>
                        <td  bgcolor="CCCCCC">&nbsp; &nbsp;&nbsp; &nbsp;<input name="phone_number"  size=50 type="text" id="subject" required></td>
                    </tr>
                    <tr>
                    <td width="139" height="43" bgcolor="BBBBBB"><center><h3>กรอก Email</h3></center></td>
                        <td bgcolor="EEEEEE">&nbsp; &nbsp;&nbsp; &nbsp;<input name="email"  size=50 type="text" id="subject"></td>
                    </tr>
                </table>
            
            </center>
        </div>
      </div>
    </div>
  </div></br><center>
  <input type="submit" name="Submit" value="ตกลง" class="btn btn-primary btn-lg" onclick="return confirm('คุณต้องการบันทึกหรือไม่')"/>
          </center>
          </br>
          </br>
          </br>
</div>
</form>



    <!-- footer -->
    
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