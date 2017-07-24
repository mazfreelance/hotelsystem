
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
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>


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
                        <li class="active"><a href="customerBooking.php">List Booking</a></li>
                        <li><a href="bookCus.php">Booking</a></li>
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
    
     <fieldset><legend>List of Booking</legend>
    <table width="300" border="10" bgcolor="#33CC00">
		<tr><th>IC Number</th>
		<th>Room Type</th>
		<th>Number of Room</th>
		<th>Price</th>
		<th>Check in</th>
		<th>Check out</th>
		<th>Status</th>
		
		</tr>	
		
		<?php
				
				$conn = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn->connect_error) {
 				   die("Connection failed: " . $conn->connect_error);
				   
				} 
				
				$pass = $_SESSION["favanimal"];

				$sql = "SELECT * FROM booking where ic_no= '$pass' and status = 'In Process'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 
    			// output data of each row
   				 while($row = $result->fetch_assoc()) {
        			
					
					echo "<tr>";
					echo "<td>".$row["ic_no"]."</td>";
					echo "<td>".$row["roomtype"]."</td>";
					echo "<td>".$row["nor"]."</td>";
					echo "<td>".$row["total_price"]."</td>";
					echo "<td>".$row["check_in"]."</td>";
					echo "<td>".$row["check_out"]."</td>";
					echo "<td>".$row["status"]."</td>";
					
					echo "<td>";
					echo "<form method='post' action='bookingDel.php'>";
					echo "<input type='hidden' name='ic' value='".$row["bil"]."'>";
					echo "<input type='hidden' name='ic2' value='".$row["roomid"]."'>";
					echo "<input type='hidden' name='ic3' value='".$row["nor"]."'>";
					echo "<input type='submit' name='sub' value='Delete'>";
					echo "</form>";
					echo "</td>";
					echo "</tr>";
					
   				 }
   				 echo "</table>";
				} else {
    		
				}
				$conn->close();
?>

    
    </fieldset>
	
	<fieldset><legend>List of Booking Approval</legend>
    <table width="300" border="10" bgcolor="#33CC00">
		<tr><th>IC Number</th>
		<th>Room Type</th>
		<th>Number of Room</th>
		<th>Price</th>
		<th>Check in</th>
		<th>Check out</th>
		<th>Status</th>
		
		</tr>	
		
		<?php
				
				$conn = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn->connect_error) {
 				   die("Connection failed: " . $conn->connect_error);
				   
				} 
				
				$pass = $_SESSION["favanimal"];

				$sql = "SELECT * FROM booking where ic_no= '$pass' and status != 'In Process' ";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 
    			// output data of each row
   				 while($row = $result->fetch_assoc()) {
        			
					
					echo "<tr>";
					echo "<td>".$row["ic_no"]."</td>";
					echo "<td>".$row["roomtype"]."</td>";
					echo "<td>".$row["nor"]."</td>";
					echo "<td>".$row["total_price"]."</td>";
					echo "<td>".$row["check_in"]."</td>";
					echo "<td>".$row["check_out"]."</td>";
					echo "<td>".$row["status"]."</td>";
					
					
					echo "</tr>";
					
   				 }
   				 echo "</table>";
				} else {
    			echo "0 results";
				}
				$conn->close();
?>

    
    </fieldset>
    <br><br>
    
    </div>
	
	
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>