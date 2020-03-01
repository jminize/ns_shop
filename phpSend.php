<?php
	require_once('class.phpmailer.php');
	$name_user=$_POST['name_user'];
	$name_facebok=$_POST["name_facebok"];
	$phone_number=$_POST["phone_number"];
	$email=$_POST["email"];
	$font=$_POST["font"];
	$design=$_POST["design"];
	$back=$_POST["back"];
	date_default_timezone_set("Asia/Bangkok");
	$today = date("d-m-Y");
	$hour= date("H:i");
	session_start();
	session_destroy();

	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "jakkrit.nuanin@gmail.com"; // GMAIL username
	$mail->Password = "jame1412"; // GMAIL password
	$mail->From = "jakkrit.nuanin@gmail.com"; // "name@yourdomain.com";
	$mail->CharSet = 'UTF-8';
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = $name_user;  // set from Name
	$mail->Subject = "สั่งสินค้า คุณ $name_user"; 
	$mail->Body = "ชื่อ-นามสกุล : $name_user <br> 
					email address : $email <br>
					เฟสบุ๊ค : $name_facebok <br>
					เบอร์โทรศัพ : $phone_number <br>
					วันที่สั่ง $today เวลา $hour น.<br>
					รายละเอียดหมอนที่ลูกค้าออกแบบ <a href='http://std.csit.sci.tsu.ac.th/592021161/shop3/view_custom.php?font=$font&design=$design&back=$back'>คลิก</a>";
	$mail->AddAddress("nuaninjakkrit@gmail.com", "นาหมื่นศรี"); // to Address

	//$mail->AddAttachment("thaicreate/myfile.zip");
	//$mail->AddAttachment("thaicreate/myfile2.zip");

	//$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	$mail->Send();

	if ($mail->Send()){
		echo "<script type='text/javascript'>alert('ส่งข้อมูลเสร็จสิ้น รอทางร้านติดต่อกลับอีกครั้ง ขอบคุณที่ใช้บริการ')</script>";
		echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
		exit;
	}else{
		echo "การส่งไม่สำเร็จ";
		}
?>