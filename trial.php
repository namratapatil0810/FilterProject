<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>How to Get/Display Multiple checkbox selected values on same page using PHP</title>
</head>

<body>

<h2>Pass checkbox checked values on same page.</h2>
 <form method="post" action="">
 <input type="checkbox" name="chk[]" value="Android"><label>Android</label><br/>
 <input type="checkbox" name="chk[]" value="Android Studio"><label>Android Studio</label><br/>
 <input type="checkbox" name="chk[]" value="SDK Manager"><label>SDK Manager</label><br/>
 <input type="checkbox" name="chk[]" value="PHP"><label>PHP</label><br/>
 <input type="checkbox" name="chk[]" value="PHP Basics"><label>PHP Basics</label><br/><br/>
 <input type="submit" name="submit" Value="submit">
 </form>
</br>

<?php
if (isset($_POST['submit']))
{
 $chkbox = $_POST['chk'];
 $i = 0;
 While($i < sizeof($chkbox))
 {
 
 echo "CheckBox checked Values = " . $chkbox[$i] . '</br>';
 
 $i++;
 }
 
 }
 
 ?>

</body>
</html>