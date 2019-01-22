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
            <h2 style="text-align: center">Password Generator</h2>
			     <hr>
                <form action="#" method="post">
					<h3>Select Options:</h3> <br/>
						<input type="checkbox" name="symbols[]" value="abcdefghijklmnopqrstuvwxyz"> <label> Lowercase: abcdefghijklmnopqrstuvwxyz</label><br>
						<input type="checkbox" name="symbols[]" value="ABCDEFGHIJKLMNOPQRSTUVWXYZ"> <label> Uppercase: ABCDEFGHIJKLMNOPQRSTUVWXYZ</label><br>
						<input type="checkbox" name="symbols[]" value="1234567890"> <label> Numbers: 1234567890</label><br>
						<input type="checkbox" name="symbols[]" value="!@#$%^&*()-=+_`~"> <label> Special Characters: !@#$%^&*()-=+_`~</label><br>
						<input type="checkbox" name="symbols[]" value="{}[]/\\<\>"> <label> Ambiguous Characters: {}[]/\\<\></label><br>
                <hr>
                <div class="form-group">
                  <label for="length">Define password length: 8 - 32 characters</label>
		          <select name="length[]">
        	        <option value="8">8</option>
        	        <option value="10">10</option>
        	        <option value="12">12</option>
        	        <option value="14">14</option>
        	        <option value="16">16</option>
        	        <option value="18">18</option>
        	        <option value="20">20</option>
        	        <option value="22">22</option>
        	        <option value="24">24</option>
        	        <option value="26">26</option>
        	        <option value="28">28</option>
        	        <option value="30">30</option>
        	        <option value="32">32</option>
            	  </select>
            	  <input type="submit" class="btn btn-danger" name="submit">
                </div>
                <hr>
                <div class="row">
	                <div class="well well-sm">
    		             <?php include 'passwordTest.php';?>
            	    </div>
                </div>
                </form>
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
            echo " " . date("h:i:sa");?> 
        </div>
    </div>
</footer>   
</html>
