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
//checking values
if (isset($_GET['year'])) {
    $Y= $_GET['year'];   
}else{  
    $Y= [];
}
if (isset($_GET['stream'])) {
    $S = $_GET['stream'];
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


//$sql = "SELECT * FROM data WHERE Year IN($year) or Stream IN($stream)";
echo'<br>';
echo $sql;
?>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    margin:2px;
}
</style>
</head>
<body>
<table>
    <thead>
<?php
    $result = mysqli_query($conn, $sql) ; 
?>
        <tr>
            <th>Roll No.</th>
            <th>Name Of Student</th>
            <th>Email Id</th>
            <th>Contact</th>
            <th>Marks</th>
        </tr>
    </thead>
    <tbody>
<?php
$result = mysqli_query($conn, $sql) ;
If(mysqli_num_rows($result)>0)  
{
    while($row=mysqli_fetch_array($result))
        {  
?>
        <tr>
        <td><?php echo $row['Roll_No']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Contact']; ?></td>
        <td><?php echo $row['Marks']; ?></td>
        </tr>                
<?php
        }
}
?>   
    </tbody>
</table>

</body>
</html>