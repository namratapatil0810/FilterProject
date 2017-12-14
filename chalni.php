<html>

<head>
    
</head>

<body>
    <div class="card-block">
        <form class="form-horizontal" id="Filters" action="switch.php">
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
                <button id="Reset">Clear Filters</button>
                <button type="submit" id="Submit">Apply Filters</button>
                <br>
            </fieldset>
        </form>
    </div>



    <script src="ecommerce.js"></script>
</body>

</html>