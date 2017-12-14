<?php
$servername = "localhost:3306";
$username = "root";
$password = "nama";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        error_reporting(0);
        if (isset($_POST['submit']))
        {
         $chkbox1 = $_POST['year'];
         $chkbox2 = $_POST['stream'];
        }
         //checking values
        if (isset($chkbox1)){
            $Y= $chkbox1;   
        }else{  
            $Y= [];
        }
        if (isset($chkbox2)) {
            $S = $chkbox2;
        }else{  
            $S= [];
        }
        //for multiple options of year
function multioptiony($x1,$x2)
{
return $x1 . "," . $x2;
}
$year = (array_reduce($Y,"multioptiony"));
$year= ltrim ($year,',');
//for multiple options of stream
function multioptions($y1,$y2)
{
return $y1 . ",'" . $y2."'";
}
$stream = (array_reduce($S,"multioptions"));
$stream= ltrim ($stream,',');

if ($year != "" && $stream != "" ) {
    //echo $year." and ".$stream;
    $sql = "SELECT * FROM data WHERE Year IN($year) and Stream IN($stream)";
}
elseif ($year == "" && $stream !="") {
    //echo $stream;
    $sql = "SELECT * FROM data WHERE Stream IN($stream)";
}
elseif ($year != "" && $stream =="") {
    //echo $year;
    $sql = "SELECT * FROM data WHERE Year IN($year)";
}
else{
    $sql = "SELECT * FROM data";
}

//$sql = "SELECT * FROM data WHERE Year IN($year) or Stream IN($stream)";
echo'<br>';
echo $sql;
?>