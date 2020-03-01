<?php
include "connect.php";
$type=$_POST['type'];

$filetype=$_FILES["fileUpload"]["type"];
	if(($filetype!="image/png"))
	{
    echo "<script>alert('กรุณาอัพโหลดเฉพาะไฟล์ .png');</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=design.php'>";
	exit();
	}
	else
	{		
        if($_POST){
            if(isset($_FILES['picpilow'])){
                $name_file =  $_FILES['picpilow']['name'];
                $sql = "SELECT * FROM design WHERE name_design='$name_file'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result)!=0){
                    echo "<script type='text/javascript'>alert('ซื้อไฟล์ซ้ำ')</script>";
                    echo "<meta http-equiv ='refresh'content='0;URL=design.php'>";
                    }
                else{
                    $tmp_name =  $_FILES['picpilow']['tmp_name'];
                    if($type=="mainback"){
                        $sql = "INSERT INTO mainback (name_nameback)
                        VALUES ('$name_file')";
                        $locate_img ="image/par/background/";
                    }
                    else{
                        $sql = "INSERT INTO design (name_design)
                        VALUES ('$name_file')";
                        $locate_img ="image/par/design/";
                    }
                    move_uploaded_file($tmp_name,$locate_img.$name_file);
                    if (mysqli_query($conn,$sql)) {
                        echo "<script type='text/javascript'>alert('บันทึกข้อมูลเสร็จสิ้น')</script>";
                        echo "<meta http-equiv ='refresh'content='0;URL=design.php'>";
                    }
                    else{
                        echo "Error: ". $sql . "<br>". mysqli_error($conn);
                    }    
                    }
                    
                
            }
        }
        

	}


?>
