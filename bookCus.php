<?php
// Start the session
session_start();
?>
<?php
$msg = "";
if (!empty($_POST['submit'])) {
	// connect to the MySQL database 
	$mysqli_db = new mysqli("localhost","root","","hoteldb");
	
	$conn2 = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn2->connect_error) {
 				   die("Connection failed: " . $conn2->connect_error);
				} 

	// get form field data
	$name = $_POST['name'];
	$ic = $_POST['icnum'];
	$contactno = $_POST['contact'];
	$email = $_POST['email'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$night = $_POST['nightcount'];
	$roomid = $_POST['roomtype'];
	$nor = $_POST['nor'];
	$total = 12;
	$status = "In Process";
	
	$sql2 = "SELECT * FROM room where room_id = $roomid ";
				$result2 = $conn2->query($sql2);
				if ($result2->num_rows > 0) {
				 
				 while($row2 = $result2->fetch_assoc()) {
				 
				 $peratus = $row2["price"] * 0.15;
				$jumlah =  $row2["price"] - $peratus  ;  
				$total =  $jumlah * $nor;
				$tolak = $row2["room_num"] - $nor;
	
	

	// sql statement for insert into the table
	$query = "INSERT INTO booking(name,ic_no, 
		email, c_number,check_in,check_out,night,roomtype,nor,total_price,status,roomid) 
			VALUES('$name','$ic','$email','$contactno','$checkin','$checkout','$night','".$row2["room_type"]."','$nor','$total','$status','$roomid')";
			$query2 = "UPDATE room SET room_num='$tolak' WHERE room_id 	=$roomid";
			
	}
				 }

	// binding the variable to for insert
	$requery = $mysqli_db->prepare($query);
	$requery2 = $mysqli_db->prepare($query2);

	// execute the query and insert into the table,
	// if the insert is successful, it will redirect to the home.php page
	
	


		if (($requery->execute())&&($requery2->execute())) {
			echo "<script>alert('Thank You for Booking !!')</script>";
		
		//header('location:registration.php?id=' . $requery->insert_id);
		
		} else {
	// if user submit the form without any input fields
	echo "<script>alert('Booking failed !!')</script>";
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
<link rel="stylesheet" type="text/css" href="misc/jquery.validate.css" />
        <script src="misc/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="misc/jquery.validate.js" type="text/javascript">
        </script>
                <script src="misc/jquery.validation.functions.js" type="text/javascript">
        </script>


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	  <script type="text/javascript">
                       


            /* <![CDATA[ */
            jQuery(function(){
                 var emailAdd = jQuery.trim($(nama).text());

                jQuery("#nama").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
                });
                 jQuery("#nama").validate({
                    expression: "if (VAL.match(/^[A-Za-z.'+.@+. +]*$/)) return true; else return false;",
                    message: "Invalid name!"
                }); 
                                jQuery("#nama").validate({
                    expression: "if (!VAL.match(/^[A-Za-z .@]*$/)) return false; else return true;",
                    message: "Invalid name!"
                }); 
                                 jQuery("#nama").validate({
                    expression: "if ( $.trim( $('#nama').val() ) == '' ) return false; else return true;",
                    message: "Invalid name!"
                });  
 
                
                jQuery("#noKP").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
                });
                jQuery("#noKP").validate({
                    expression: "if (VAL.match(/^[0-9]{12}$/) && VAL) return true; else return false;",
                    message: "Invalid IC number!"
                });
                 jQuery("#noKP").validate({
                    expression: "if (VAL.match(/^([0-9][0-9][1][0-2]([0][1-9]|[1][0-9]|[2][0-9]|[3][0-1])[0-9][0-9][0-9][0-9][0-9][0-9]|[0-9][0-9][0][1-9]([0][1-9]|[1][0-9]|[2][0-9]|[3][0-1])[0-9][0-9][0-9][0-9][0-9][0-9])$/) && VAL) return true; else return false;",
                    message: "Invalid IC number!"
                });
                
               
                
                 jQuery("#noTel").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty! Please enter your handphone number or the nearest relative handphone number."
                });  
                jQuery("#noTel").validate({
                    expression: "if (VAL.match(/^[0-9]*$/)) return true; else return false;",
                    message: "Must be numeric only!"
                });    
               jQuery("#noTel").validate({
                    expression: "if (VAL.match(/^[0][1][0-9]*$/)) return true; else return false;",
                    message: "Invalid handphone number!"
                });    
                jQuery("#noTel").validate({
                    expression: "if (VAL.match(/^[0-9]{10,11}$/)) return true; else return false;",
                    message: "Invalid handphone number!"
                }); 
                
                   
               
                   
                jQuery("#email").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
                });
                 
                 
                   jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Invalid email!"
                });
                
                jQuery("#nightcount").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Can't be empty!"
                });
                
                
              
                jQuery("#noRumah").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
                });  
                jQuery("#noRumah").validate({
                    expression: "if (VAL.match(/^[0-9]*$/)) return true; else return false;",
                    message: "Must be numeric only!"
                });    
               
                
            });
            /* ]]> */
        </script>
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
                        <li ><a href="customerBooking.php">List Booking</a></li>
                        <li class="active"><a href="bookCus.php">Booking</a></li>
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
    <?php
				
				$conn = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn->connect_error) {
 				   die("Connection failed: " . $conn->connect_error);
				} 
				$lol = $_SESSION["favanimal"];
				$sql = "SELECT * FROM registration where ic_number =$lol";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 
    			 
				
   				 while($row = $result->fetch_assoc()) {
        			
			
					$name  = $row["name"];
					$ic_number = $row["ic_number"];
					$email = $row["email"];
					$cno = $row["contactNo"];
					
							
   				 }
   				
				 
				 
				} else {
    			echo "0 results";
				}
				
				$conn->close();
?>
		
     
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table width="200" border="0" align="center" bgcolor="#000000">
                        <tr>
                            <td>
                                <table width="857" border="0" align="center" bgcolor="#EEEC91">
                                    <tr>
                                        <td height="25" colspan="3"><div align="center" class="style2 style3">Booking form </div></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="195"><div align="left"><strong>Nama</strong></div></td>
                                        <td width="22"><div align="center">:</div></td>
                                        <td width="626" colspan="3"><label>
                                                <input name="name" id="nama" type="text" size="50" maxlength="50" value="<?php echo "$name"; ?>" readonly />        
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td height="25"><strong>Identity Card Number</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><label>
                                                <input type="text" name="icnum" id="noKP" maxlength="12"  size="12" value="<?php echo "$ic_number"; ?>" readonly/>
                                            </label></td>
                                    </tr>
                                     <tr>
                                        <td height="25"><strong>E-mail </strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                                <input type="text" name="email" id="email" size="12" maxlength="50" value="<?php echo "$email"; ?>" readonly/>
                                            </label></td>
                                    </tr>
									<tr>
                                        <td height="25"><strong>Contact Number</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                                <input type="text" name="contact" id="noTel" size="12" value="<?php echo "$cno"; ?>" readonly/>
                                            </label></td>
                                    </tr>
									
                                    <tr>
                                        <td height="25"><strong>Check-in</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><label>
                                                <input id="date1" name="checkin" type="text" size="25"><a href="javascript:NewCal('date1','ddmmmyyyy',true,24)"><img src="img/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
                                            </label></td>
                                    </tr>
									<tr>
                                        <td height="25"><strong>Check-out</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><label>
                                               <input id="date2" name="checkout" type="text" size="25"><a href="javascript:NewCal('date2','ddmmmyyyy',true,24)"><img src="img/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td height="25"><strong>Nights</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><label>
                                                <select class="select" id="nightcount" name="nightcount">
			<option value="0" selected>Choose nights</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">30+</option>
			</select>        

                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td><div align="left"><strong>Room Type </strong></div></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><label><?php
				
				$conn = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn->connect_error) {
 				   die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM room where room_num != 0";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 
    			// output data of each row
				echo "<select class='select' id='roomtype' name='roomtype'> ";
   				 while($row = $result->fetch_assoc()) {
        			
					
					echo "<option value=". $row['room_id'] .">". $row['room_type'] ."-RM". $row['price'] ."(". $row['room_num'] .")</option>";
					
					
					
					
   				 }
   				 echo "</select>";
				 
				 
				} else {
    			echo "0 results";
				}
				
				$conn->close();
?></label></td>
                                    </tr>
                                    
                                    <tr>
                                        <td height="25"><div align="left">Number of room</div></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><div align="left">
                                                <label>
                                                    <input type="text" name="nor" id="noRumah" size="10" maxlength="8" />
                                                </label>
                                            </div></td>
                                    </tr>
                                    
                                    <tr>
                                        <td height="25" colspan="3"><div align="center">
                                                <input name="submit" type="Submit" value="Booking"/>
                                                &nbsp;
                                                <label>
                                                    <input type="Reset" name="kosongkan" value="Reser" />
                                                </label>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td height="25" colspan="3"><div align="center">
                                                <div align="right"><a href="register_choose.php"></a></div></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
	</form>
	<br><br>
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