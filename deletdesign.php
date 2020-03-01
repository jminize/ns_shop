<?php
session_start();

include "connect.php";

// sql to delete a record

$namedesign=$_GET["namedesign"];
$type=$_GET["type"];

echo $namedesign;
echo $type;

if($type=="mainback"){
	$sql = "DELETE FROM mainback WHERE name_nameback='$namedesign'";
	@unlink("image/par/background/$namedesign");
}else{
	$sql = "DELETE FROM design WHERE name_design='$namedesign'";
	@unlink("image/par/design/$namedesign");
}

if (mysqli_query($conn, $sql)) {
	echo "ลบข้อมูลเสร็จสิ้น";
	header("Location: design.php");
exit;
} else {
	echo "Error deleting record:".mysqli_error($conn);
}
mysqli_close($conn);
?>
