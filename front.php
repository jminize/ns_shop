<?PHP
session_start();
if($_POST['action'] == 'start'){
    if(isset($_SESSION['design'])&&isset($_SESSION['font'])){
        ?>
        <div style="position: absolute; z-index: 9999;"><img src="image\par\design\<?php echo $_SESSION["design"];?>" width="300px" height="300px" /></div>
        <div style="position: absolute; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["font"];?>" width="300px" height="300px" /></div>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
        <?php
}
    elseif(isset($_SESSION['design'])||isset($_SESSION['font'])){
        if(isset($_SESSION['design'])){
            ?>
            <div style="position: absolute; z-index: 9999;"><img src="image\par\design\<?php echo $_SESSION["design"];?>" width="300px" height="300px" /></div>
            <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
            <?php
        }
        else{
            ?>
            <div style="position: relative; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["font"];?>" width="300px" height="300px" /></div>
        <?php
        }  
    }
    else{
        ?>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
        <?php

    }

}
if($_POST['action'] == 'font'){
    $_SESSION["font"]=$_POST['selectfont'];
    if(isset($_SESSION['design'])){
        ?>
        <div style="position: absolute; z-index: 9999;"><img src="image\par\design\<?php echo $_SESSION["design"];?>" width="300px" height="300px" /></div>
        <div style="position: absolute; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["font"];?>" width="300px" height="300px" /></div></div>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
        <?php
    }
    else{
        ?><div style="position: relative; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["font"];?>" width="300px" height="300px" /></div></div>
        
        <?php
    }
}
if($_POST['action'] == 'design'){
    $_SESSION["design"]=$_POST['selectdesign'];
    if(isset($_SESSION['font'])){
        ?>
        <div style="position: absolute; z-index: 9999;"><img src="image\par\design\<?php echo $_SESSION["design"];?>" width="300px" height="300px" /></div>
        <div style="position: absolute; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["font"];?>" width="300px" height="300px" /></div>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
        <?php
    }
    else{
        ?>
        <div style="position: absolute; z-index: 9999;"><img src="image\par\design\<?php echo $_SESSION["design"];?>" width="300px" height="300px" /></div>
        <div style="position: relative; z-index: 1;"><img src="image\par\background\mainbackdefult.png" width="300px" height="300px"/></div>
        <?php
    }
}


if($_POST['action'] == 'confirm'){
    if(isset($_SESSION['design'])){
        $design = "image/par/design/".$_SESSION["design"];
        $font = "image/par/background/".$_SESSION["font"];
        ?>
        <center>
        <canvas width="300" height="300" id="canvas"></canvas>
<script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var s='<?=$design?>';
    var f='<?=$font?>';
    var img1 = loadImage(s, main);
    var img2 = loadImage(f, main);

    var imagesLoaded = 0;
    function main() {
    imagesLoaded += 1;

    if(imagesLoaded == 2) {
        // composite now
        ctx.globalAlpha = 1;
        ctx.drawImage(img2, 0, 0,300,300);
        ctx.drawImage(img1, 0, 0,300,300);
    }
}
function loadImage(src, onload) {
    // http://www.thefutureoftheweb.com/blog/image-onload-isnt-being-called
    var img = new Image();

    img.onload = onload;
    img.src = src;

    return img;
}
    </script>
        </center>
        <?php
    }
    else{
        ?>
        <center>
        <div style="position: relative; z-index: 99;"><img src="image\par\background\<?php echo $_SESSION["font"];?>" width="300px" height="300px" /></div>
        </center>
        <?php
    }
}



if($_POST['action'] == 'showpic'){
    $design = "image/par/design/".$_POST['design'];
    $font = "image/par/background/".$_POST['font'];
            ?>
            <canvas width="300" height="300" id="canvas"></canvas>
            <script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var s='<?=$design?>';
    var f='<?=$font?>';
    
    var img1 = loadImage(s, main);
    var img2 = loadImage(f, main);

    var imagesLoaded = 0;
    function main() {
    imagesLoaded += 1;

    if(imagesLoaded == 2) {
        // composite now
        ctx.globalAlpha = 1;
        ctx.drawImage(img2, 0, 0,300,300);
        ctx.drawImage(img1, 0, 0,300,300);
    }
}
function loadImage(src, onload) {
    // http://www.thefutureoftheweb.com/blog/image-onload-isnt-being-called
    var img = new Image();

    img.onload = onload;
    img.src = src;

    return img;
}
    </script>
            <?php

}
?>
        

        