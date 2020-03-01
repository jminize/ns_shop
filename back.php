<?PHP
session_start();
if($_POST['action'] == 'start'){
    if(isset($_SESSION['back'])){
        ?>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\<?php echo $_SESSION["back"];?>" width="300px" height="300px"/></div>
    <?php
    }else{
        ?>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
    <?php
    }
    
}

if($_POST['action'] == 'back'){
    $_SESSION["back"]=$_POST['selectback'];
        ?>
            <div style="position: absolute; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["back"];?>" width="300px" height="300px"/></div>
            <div style="position: relative;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
        <?php
    }


if($_POST['action'] == 'confirm'){
        ?>
        <div style="position: relative; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["back"];?>" width="300px" height="300px"/></div>
        <?php
    }
?>
        
        
        
        