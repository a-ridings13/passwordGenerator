<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="body-content">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="well well-lg">
            <h2>Simple Password Generator </h2>
            <hr>
                <form action="passwordTest.php" method="post">
                <div class="checkbox">
                  <label><input type="checkbox" value="">Include Numbers</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Include Lowercase</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Include Uppercase</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Include Special Characters: `~!@#$%^&*()_-+=</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Exclude Ambiguous Characters: <,.>/?'";:[]{}\</label>
                </div>
                <div class="form-group">
                  <label for="sel1">Select password length:</label>
                  <select class="form-control" id="sel1">
                    <option>8</option>
                    <option>10</option>
                    <option>12</option>
                    <option>14</option>
                    <option>16</option>
                    <option>18</option>
                    <option>20</option>
                    <option>22</option>
                    <option>24</option>
                    <option>26</option>
                    <option>28</option>
                    <option>30</option>
                    <option>32</option>
                  </select>
                </div>
                <input type="submit" class="btn btn-danger" value="Generate!">
                </form>
                <output></output>
            </div>
        </div>
    </div>
</div>
</body>
<footer class="copyright">
    <div class="row">
        <div class="col-sm-12">
            Austin Ridings &copy; <?php echo date("Y"); 
            date_default_timezone_set("America/New_York");
            echo " The time is " . date("h:i:sa");?> 
        </div>
    </div>
</footer>   
</html>
