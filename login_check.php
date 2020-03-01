<?php
session_start();
include "connect.php";

$user=mysqli_real_escape_string($conn,($_POST['user']));
$pass=mysqli_real_escape_string($conn,md5(md5(md5($_POST['pass']))));

$sql = "SELECT * FROM nsadmin WHERE username='$user'AND pass='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)!=0){
	$_SESSION['user'] = $user;
	echo "<script type='text/javascript'>alert('ยินดีต้อนรับ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=design.php'>";
    }
else{
    echo "<script type='text/javascript'>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=login.php'>";
            
    }



mysqli_close($conn);
?>