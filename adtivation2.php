<?php
// Start the session
session_start();
?>
<?php
if (!empty($_POST['sub'])) {
	// connect to the MySQL database 
	$mysqli_db = new mysqli("localhost","root","","hoteldb");

	// get form field data
	$name = $_POST['name'];
	$ic = $_POST['ic'];
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
                 var emailAdd = jQuery.trim($(NightCount).text());
					//utk select input form
					jQuery("#NightCount").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Can't be empty!"
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
                        <li class="active"><a href="adtivation.php">Activation</a></li>
                        <li><a href="addbook.php">Register Booking</a></li>
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
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
    <div align="center" class="form-group">
    <form method="post" action="approve.php">
    <table border="4">
    <tr>
    	<td>Name:</td>
        <td><input type="text" size="25" name="name" value="<?php echo " $name "; ?>" readonly/></td>
    </tr>
    <tr>
    	<td>IC Number:</td>
        <td><input type="text" size="12" name="ic" value="<?php echo " $ic "; ?>" readonly/></td>
    </tr>
    
    <tr>
    	<td>Choose:</td>
        <td><select class="select" id="NightCount" name="NightCount">
			<option value="0" selected>Choose</option>
			<option value="active">Active</option>
			<option value="block">Block</option>
			</select></td>
    </tr>
    </table>
    </fieldset>
    <br><br>
    <input type="submit" value="Submit" name="sub">
    </form>
    </div>
 <br><br><br><br><br><br><br><br><br><br><br><br>
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