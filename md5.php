<?php
$user=md5(md5(md5($_POST['user'])));
echo "USER &nbsp;".$user."</br>";
$pass=md5(md5(md5($_POST['pass'])));
echo "PASS &nbsp;".$pass."</br>";
 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login mysqli-md5</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="textfield"></label>
    <input type="text" name="user" id="user" />
    <br />
    <label for="textfield2"></label>
    <input type="text" name="pass" id="pass" />
    <br />
    <input type="submit" name="button" id="button" value="Submit" />
    <br />
  </p>
</form>
</body>
</html>