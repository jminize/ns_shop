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
		data: "action=start",
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_design').html(data);
		}
	});
  $.ajax({
		url: "back.php",
		data: "action=start",
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_back').html(data);
		}
	});

  })
function selectfont(piw){	
	$.ajax({
		url: "front.php",
		data: "action=font&selectfont="+piw,
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_design').html(data);
		}
	});
}
function selectdesign(design){	
	$.ajax({
		url: "front.php",
		data: "action=design&selectdesign="+design,
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_design').html(data);
		}
	});
}
function selectback(back){	
	$.ajax({
		url: "back.php",
		data: "action=back&selectback="+back,
		type: 'POST',
		dataType: 'html',
		success: function(data) {
			$('#div_back').html(data);
		}
	});
}
</script>
  <!--เปลี่ยนradioเป็นรูป-->
<style>
                /*
                ให้ element ที่มี class img-checker ถูกซ่อนไว้
                */
                .img-checker {
                    display: none;
                }
                /*
                ให้ <img> ที่ตามหลัง element ที่มี class img-checker แสดงผลแบบจาง
                และใช้ cursor รูปมือเมื่อผู้ใช้เอาเมาส์ไปชี้
                */
                .img-checker + img {
                    opacity: 0.5;
                    cursor: pointer;
                }
                /*
                ให้ <img> ที่ตามหลัง element ที่มี class img-checker กลับมาแสดงผลแบบปกติ
                เมื่อ element ที่มี class img-checker มีสถานะเป็น checked
                */
                .img-checker:checked + img {
                    opacity: 1.0;
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

    <div class="container-fluid"       >
        <!-- box header -->
        <header class="box-header" style="background-color:#F5F5F5" >
   \
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
    <?php 
  if(isset($_SESSION['user'])){
    ?>
<div class="container" style="background-color:#F5F5F5" >
  <div class="row" style="background-color:#F5F5F5">
    <div id="design" class="col-sm-12" >
        <div class="customtab">
            <div id="tabs" class="customtab-wrapper">
              <ul class='nav nav-tabs'>
                <li class="active"><a data-toggle="tab" href="#pilowB"><h2>สีพื้นหมอน</h2></a></li>
                <li><a data-toggle="tab" href="#designB"><h2>ลายหมอน</h2></a></li>
                <li><a data-toggle="tab" href="#pilowadd"><h2>เพิ่มสีพื้นหมอน</h2></a></li>
                <li><a data-toggle="tab" href="#designadd"><h2>เพิ่มลายหมอน</h2></a></li>
              </ul>
            </div>
            <div class="tab-content">
                    <div id="pilowB" class="col-sm-12 tab-pane tab-pane fade in active">
                      <br>
                        <table width="30%" border="1" cellspacing="1" cellpadding="1" align="center">
                            <tr>
                              <th bgcolor="999999" width="35%"><font color="white"><center> <h2>ลำดับที่<font></h2></center> </th>
                              <th bgcolor="999999"><font color="white"><center><h2>ภาพ<font></h2></center></th>
                              <th bgcolor="999999" width="20%"><font color="white"><center><h2>ลบ<font></h2></center></th>
                            </tr>
                <?php
                    $sql="SELECT * FROM mainback";
                    $result=mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td bgcolor="BBBBBB" ><font color="white"><center> <h2><?php echo $row['no_mainback'];?><font></h2></center></td>
                                <td bgcolor="EEEEEE"><center><img src="image\par\background\<?php echo $row['name_nameback'];?>" width="100px" height="100px" /></center></td>
                                <td bgcolor="EEEEEE" width="50px" align="center"><a href="deletdesign.php?namedesign=<?php echo $row['name_nameback'];?>&type=mainback" class="btn btn-danger "  onclick="return confirm('คุณต้องการลบหรือไม่')" >ลบ</a></td>
                            </tr>
                    <?php
                    }
                    ?>
                    </table>
                    </div>
                    <div id="designB" class="col-sm-12 tab-pane fade">
                    <br>
                   
                        <table width="30%" border="1" cellspacing="1" cellpadding="1" align="center">
                        
                            <tr>
                              <th bgcolor="999999"  width="35%"><font color="white"><center> <h2>ลำดับที่<font></h2></center></th>
                              <th bgcolor="999999"><font color="white"><center><h2>ภาพ<font></h2></center></th>
                              <th bgcolor="999999" width="20%"><font color="white"><center><h2>ลบ</font></center></h2></th>
                            </tr>
                        
                <?php
                    $sql="SELECT * FROM design";
                    $result=mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td bgcolor="BBBBBB" > <font color="white"><center> <h2> <?php echo $row['no_design'];?><font></h2></center></td>
                                <td  bgcolor="EEEEEE"><center><img src="image\par\design\<?php echo $row['name_design'];?>" width="100px" height="100px" /></center></td>
                                <td bgcolor="EEEEEE"><center><a href="deletdesign.php?namedesign=<?php echo $row['name_design'];?>&type=design"  onclick="return confirm('คุณต้องการลบหรือไม่')" class="btn btn-danger ">ลบ</a><center></td>
                            </tr>
                    <?php
                    }
                    ?>
                    </table>
                    
                    </div>
                    <div id="pilowadd" class="col-sm-12 tab-pane fade">
                    <br>
                    <form name="formsavepic" method="post" action="savepic.php" enctype="multipart/form-data">
                          <table width="40%" border="1" cellspacing="1" cellpadding="1" align="center">
                                    <tr>
                                        <td colspan="2" align="center" bgcolor="999999"  width="35%" ><font color="white"><center><h2>เพิ่มสีพื้นหมอน<font></h2></center></td>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="type" id="mainback" value="mainback" >
                                    <td bgcolor= white >  <center><input type="file" name="picpilow"></center></td>
                                    <td bgcolor= white width="1%" >
                                    <center><input type="submit"  name="save"  value="Save" class="btn btn-primary btn-lg"></center></td>

                                    </tr>
                          </table>
                          </form>
                    </div>
                      <div id="designadd" class="col-sm-12 tab-pane fade">
                      <br>
                          <form name="formsavepic" action="savepic.php" method="post" enctype="multipart/form-data">
                            <table width="40%" border="1"cellspacing="1" cellpadding="1" align="center">
                                      <tr>
                                          <td colspan="2" align="center"bgcolor="999999"  width="35%" ><font color="white"><center><h2>เพิ่มลายหมอน<font></h2></center></td>
                                      </tr>
                                      <tr>
                                          <input type="hidden" name="type" id="design" value="design">
                                          <td bgcolor= white ><center><input type="file" name="picpilow"/></center></td>
                                          <td bgcolor= white width="1%" >
                                    <center><input type="submit"  name="save"  value="Save" class="btn btn-primary btn-lg"  /> </center></td>

                                    </tr>
                                      </tr>
                            </table>
                            </form>
                      </div>
                  </div>
          </div>
    </div>
  </div>
</div>
    <?php
	}else{
    ?>
<div class="container" style="background-color:#F5F5F5">
  <div class="row">
    <div id="design" class="col-sm-12" >
      <div class="customtab">
        <div id="tabs" class="customtab-wrapper">
          <ul class='nav nav-tabs'>
            <li class="active"><a data-toggle="tab" href="#tabfont"><h3><font color="blue">ด้านหน้า</font></h3></a></li>
            <li><a data-toggle="tab" href="#tabback"><h3>ด้านหลัง</h3></a></li>
          </ul>
        </div>
        <div class="tab-content">
                <div id="tabfont" class="col-sm-12 tab-pane tab-pane fade in active">
                    <div class="col-sm-6">
                        <div id="div_design"></div>    
                    </div>
                    <div class="col-sm-6">
                 
                 
                    <font color="black"><h2>เลือกสีหมอน </h2></font>
                   
                    </br>
                          <form action="" method="get" name="frmMain" id="frmMain">
                              <?php
                              $sql="SELECT * FROM mainback";
                              $result=mysqli_query($conn,$sql);
                              while($row=mysqli_fetch_array($result)){
                              ?>
                              <label>
                                  <input type="radio" name="value" class="img-checker" value="<?php echo $row['name_nameback'];?>" onclick="selectfont(this.value)">
                                  <img src="image\par\background\<?php echo $row['name_nameback'];?>" width="50px" height="50px" />
                              </label>
                              <?php
                              }
                              ?>
                          </form>
                          
                          </br>
                          </br>
                          <font color="black"> <h2>เลือกลาย</h2></font>
                          </br>
                          <form action="" method="get" name="frmMain" id="frmMain">
                          <?php
                              $sql="SELECT * FROM design";
                              $result=mysqli_query($conn,$sql);
                              while($row=mysqli_fetch_array($result)){
                              ?>
                              <label>
                                  <input type="radio" name="value" class="img-checker" value="<?php echo $row['name_design'];?>" onclick="selectdesign(this.value)">
                                  <img src="image\par\design\<?php echo $row['name_design'];?>" width="50px" height="50px" />
                              </label>
                              <?php
                              }
                              ?>
                          </form>
                        </div>
                </div>
                <div id="tabback" class="col-sm-12 tab-pane fade">
                    <div class="col-sm-6">
                        <div id="div_back"></div>
                    </div>
                    <div class="col-sm-6">
                    <h2>เลือกสีหมอนด้านหลัง</h2>
                            <form action="" method="get" name="frmMain" id="frmMain">
                              <?php
                                $sql="SELECT * FROM mainback";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($result)){
                            ?>
                              <label>
                                <input type="radio" name="value" class="img-checker" value="<?php echo $row['name_nameback'];?>" onclick="selectback(this.value)">
                                <img src="image\par\background\<?php echo $row['name_nameback'];?>" width="50px" height="50px" />
                            </label>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
              </div>
      </div>
    </div>
  </div>
  <br>
  <center>
  <a href="confirm.php" onclick="return confirm('คุณต้องการบันทึกหรือไม่')"> <img src="img/next.png" width="200"></a>
          </center>
</div>
    <?php
	}
?>
</div>



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