<?php
// Start the session
session_start();
?>
<?php
$msg = "";
if (!empty($_POST['submit'])) {
	// connect to the MySQL database 
	$mysqli_db = new mysqli("localhost","root","","hoteldb");

	// get form field data
	$roomtype = $_POST['roomtype'];
	$noroom = $_POST['name'];
	$price = $_POST['contact'];
	

	// sql statement for insert into the table
	$query = "INSERT INTO room(room_type,room_num, price) 
			VALUES('$roomtype','$noroom','$price')";
			
	
	// binding the variable to for insert
	
	$requery = $mysqli_db->prepare($query);

	// execute the query and insert into the table,
	// if the insert is successful, it will redirect to the home.php page
	
	


		if (($requery->execute())) {
			echo "<script>alert('Register booking complete !!')</script>";
			echo "<script>window.open('addbook.php','_self')</script>";
			
		
		//header('location:registration.php?id=' . $requery->insert_id);
		
		} else {
	// if user submit the form without any input fields
	echo "<script>alert('Registration failed !!')</script>";
}

// close the mysql database connection
	


$mysqli_db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Seri Indah Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/datetimepicker.js"></script>

<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css"  />   <!--//table design-->
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

<!-- make validation-->
<link rel="stylesheet" type="text/css" href="misc/jquery.validate.css" />
        <script src="misc/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="misc/jquery.validate.js" type="text/javascript">
        </script>
                <script src="misc/jquery.validation.functions.js" type="text/javascript">
        </script>
        
<script type="text/javascript"> 
            /* <![CDATA[ */
            jQuery(function(){
                 var emailAdd = jQuery.trim($(roomtype).text());
					//utk select input form
					jQuery("#roomtype").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Can't be empty!"
					});
					
					jQuery("#room").validate({
                    expression: "if (VAL.match(/^[0-9]*$/)) return true; else return false;",
                    message: "Invalid number of room!"
					});
					
					jQuery("#room").validate({
                    expression: "if (VAL.match(/^[0-9][0-9]*$/)) return true; else return false;",
                    message: "Invalid number of room!"
					});
					
					jQuery("#room").validate({
                    expression: "if (VAL.match(/^[0-9][0-9]*$/)) return true; else return false;",
                    message: "Invalid number of room!"
					});
					
					jQuery("#roomprice").validate({
                    expression: "if (VAL.match(/^[0-9][0-9]*$/)) return true; else return false;",
                    message: "Invalid price!"
					});
					
					jQuery("#roomprice").validate({
                    expression: "if (VAL.match(/^[0-9][0-9]*$/)) return true; else return false;",
                    message: "Invalid price!"
					});
                
            });
            /* ]]> */
</script>

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>Seri Indah Hotel</span></a>
                    <a><br><br><h6>Quality customer satisfaction are our company</h6></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a href="adtivation.php">Activation</a></li>
                        <li class="active"><a href="addbook.php">Register Booking</a></li>
						<li><a href="listBooking.php">List Booking</a></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.html"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Booking</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
    <div align="center" class="form-group">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <fieldset>
    <table border="4" bordercolor="#66FF00">
	<tr>
    	<td>Room Type: </td>
        <td><select class="select" id="roomtype" name="roomtype"> 
        	<option value="0" selected>...</option>
        	<option value="Regular">Regular</option>
            <option value="Premium">Premium</option>
            <option value="VIP">VIP</option>
            <option value="VVIP">VVIP</option></select></td>
    </tr>
    <tr>
    	<td>Number of Room:</td>
        <td><input type="text" size="25" id="room" name="name"/></td>
    </tr>
    
    
    <tr>
    	<td>Price:</td>
        <td><input type="text" size="25" id="roomprice" name="contact"/></td>
    </tr>
    
    
    
    
    </table>
    </fieldset>
    <br><br>
    <input type="submit" value="Submit" name="submit">
    </form>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <footer>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; <a href="index.php">Seri Indah Hotel</a> 2014 All right reserved.</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="http://www.facebook.com/seriindah" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/seriindah" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</body>
</html>