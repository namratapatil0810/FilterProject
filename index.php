<?php
$servername = "localhost:3306";
$username = "root";
$password = "nama";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
    <html>

    <head>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
                margin: 2px;
            }

            .hidden {
                visibility: hidden;
            }
        </style>
        <script>
            function reseting() {
                document.getElementById("data").style.visibility = "visible";
            }
        </script>
    </head>

    <body>
        <div class="card-block">
            <form class="form-horizontal" id="Filters" action="index.php">
                <fieldset>
                    <h4 class="mb-1 no-mt">Year</h4>
                    <div class="form-group no-mt">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="year[]" id="year" value="2017"> 2017 </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="year[]" id="year" value="2016"> 2016 </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="year[]" id="year" value="2015"> 2015 </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="year[]" id="year" value="2014"> 2014 </label>
                        </div>
                    </div>
                    <h4 class="mb-1">Stream</h4>
                    <div class="form-group no-mt">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="stream[]" id="stream" value="B.Sc.IT"> B.Sc.IT </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="stream[]" id="stream" value="BMS"> BMS </label>
                        </div>
                    </div>
                    <br>
                    <button id="Reset">
                        <a href="#clear"></a>Clear Filters</button>
                    <button type="submit" id="apply">
                        <a href="#data"></a>Apply Filter</button>
                    </button>
                    <br>
                </fieldset>
            </form>
        </div>
        <div id="clear" class="show">
            <?php
            $query = "SELECT * FROM data"; 
            echo $query; 
            ?>
                <table>
                    <thead>
                        <?php
                $res = mysqli_query($conn, $query) ; 
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
            $res = mysqli_query($conn, $query) ;
            If(mysqli_num_rows($res)>0)  
            {
                while($row=mysqli_fetch_array($res))
                    {  
            ?>
                            <tr>
                                <td>
                                    <?php echo $row['Roll_No']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Contact']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Marks']; ?>
                                </td>
                            </tr>
                            <?php
                    }
            }
            ?>
                    </tbody>
                </table>
        </div>
        <div id="data" class="hidden">
            <?php
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //checking values
        if (isset($_GET['year'])) {
            $Y= $_GET['year'];   
        }else{  
            $Y= NULL;
        }
        if (isset($_GET['stream'])) {
            $S = $_GET['stream'];
        }else{  
            $S= NULL;
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
                                <td>
                                    <?php echo $row['Roll_No']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Contact']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Marks']; ?>
                                </td>
                            </tr>
                            <?php
                }
        }
        ?>
                    </tbody>
                </table>

        </div>
    </body>

    </html>