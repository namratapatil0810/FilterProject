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
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from agmstudio.io/themes/material-style/2.0.1/ecommerce-filters.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2017 10:23:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Material Style</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon30f4.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.light-blue-500.min.css">
    <link rel="stylesheet" href="assets/css/width-boxed.min.css" id="ms-boxed" disabled="">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="ms-preload" class="ms-preload">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <div class="ms-site-container">
        <!-- Modal -->
        <header class="ms-header ms-header-primary">
            <!--ms-header-primary-->
            <div class="container container-full">
                <div class="ms-title">
                    <a href="index-2.html">
                        <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
                        <span class="ms-logo animated zoomInDown animation-delay-5">V</span>
                        <h1 class="animated fadeInRight animation-delay-6">
                            <span>V-Place</span>
                        </h1>
                    </a>
                </div>
                <div class="header-right">
                    <span>Mithila Satam</span>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal"
                        data-target="#ms-account-modal">
                        <i class="zmdi zmdi-account"></i>
                    </a>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
            <div class="container container-full">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index-2.html">
                        <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                        <span class="ms-logo ms-logo-sm">V</span>
                        <span class="ms-title">
                            <strong>V-Place</strong>
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="ms-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false" data-name="home">Home

                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link  animated fadeIn animation-delay-7" role="button" aria-haspopup="true">History
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="component-tables.php" class="nav-link  animated fadeIn animation-delay-7" role="button" aria-haspopup="true">About Student
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="material-background"></div>

        <div class="container container-full">
            <div class="ms-paper">
                <div class="row">
                    <div class="col-lg-3 ms-paper-menu-left-container">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Filter List</h3>
                            </div>
                            <div class="card-block">
                                <form class="form-horizontal" id="Filters" action="" method="POST">
                                    <h4 class="mb-1 no-mt">Year</h4>
                                    <fieldset>
                                        <div class="form-group no-mt">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="year[]" id="year" value="2018"> 2018 </label>
                                            </div>
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
                                        </div>
                                    </fieldset>
                                    <fieldset>
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
                                    </fieldset>
                                    <input type="submit" class="btn btn-danger btn-block no-mb mt-1" name="submit" Value="submit">
                                    <button class="btn btn-danger btn-block no-mb mt-1" id="Reset">
                                        <a href="#clear">
                                            <i class="zmdi zmdi-delete"></i> Clear Filters</a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 ms-paper-content-container" id="clear">
                        <div class="ms-paper-content">
                            <section class="ms-component-section">
                                <h2 class="section-title" id="tables-responsive">Details of Students</h2>
                                <div class="bs-example">
                                    <table class="table table-responsive">
                                        <thead>
                                            <?php
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
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
    <footer class="ms-footer">
        <div class="container">
            <p>Copyright &copy; Vidyalankar School of Information Technology,2017</p>
        </div>
    </footer>
    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>
    </div>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/configurator.min.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-90917746-2', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="assets/js/ecommerce.js"></script>
</body>

<!-- Mirrored from agmstudio.io/themes/material-style/2.0.1/ecommerce-filters.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2017 10:23:06 GMT -->

</html>