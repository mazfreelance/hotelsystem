
<?php
// Start the session
session_start();
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
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="book.html">Booking</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Sign In</a></li>
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
	<?php

if (!empty($_POST['sub'])) {
	// connect to the MySQL database 
	$mysqli_db = new mysqli("localhost","root","","hoteldb");
	
	$conn2 = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn2->connect_error) {
 				   die("Connection failed: " . $conn2->connect_error);
				} 

	// get form field data
	$available2 = $_POST['ic']; //booking
	$roomid =$_POST['ic2'];
	$nor = $_POST['ic3'];
	
	$sql2 = "SELECT * FROM room where room_id = $roomid ";
				$result2 = $conn2->query($sql2);
				if ($result2->num_rows > 0) {
				 
				 while($row2 = $result2->fetch_assoc()) {
				 
				 
				  
				$tolak = $row2["room_num"] + $nor;
	
	

	// sql statement for insert into the table
	$query = "delete from booking where bil='$available2'";
			$query2 = "UPDATE room SET room_num='$tolak' WHERE room_id 	=$roomid";
			
	}
				 }

	// binding the variable to for insert
	$requery = $mysqli_db->prepare($query);
	$requery2 = $mysqli_db->prepare($query2);

	// execute the query and insert into the table,
	// if the insert is successful, it will redirect to the home.php page
	
	


		if (($requery->execute())&&($requery2->execute())) {
			echo "<script>alert('Successfully delete !!')</script>";
			echo "<script>window.open('customerBooking.php','_self')</script>";
		
		//header('location:registration.php?id=' . $requery->insert_id);
		
		} else {
	// if user submit the form without any input fields
	echo "<script>alert('Booking failed !!')</script>";
}

// close the mysql database connection
	


$mysqli_db->close();
}
?>


    </div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="hroom"><a href="#" title="">Hotel Room</a></li>
					<li class="faci"><a href="#" title="">Facility</a></li>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="hroom">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/1.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/1.jpg" alt="">
						</li>
						<!-- End Item Project -->
                        
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="faci">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/2.jpg" alt="">
						</li>
						<!-- End Item Project -->
                        
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="faci">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/3.jpg" alt="">
						</li>
						<!-- End Item Project -->
                        
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="faci">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="img/works/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/4.jpg" alt="">
						</li>
						<!-- End Item Project -->
                        
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Seri Indah Hotel 2014 All right reserved.</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
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
</body>
</html>