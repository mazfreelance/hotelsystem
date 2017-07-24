<?php
$msg = "";
if (!empty($_POST['submit'])) {
	// connect to the MySQL database 
	$mysqli_db = new mysqli("localhost","root","","hoteldb");

	// get form field data
	$name = $_POST['name'];
	$ic = $_POST['ic'];
	$contactno = $_POST['phone'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$postcode = $_POST['postcode'];
	$state = $_POST['select'];
	
	$status = "block";

	// sql statement for insert into the table
	$query = "INSERT INTO registration(ic_number,name, 
		contactNo, email,street,postcode,state,status) 
			VALUES('$ic','$name','$contactno','$email','$street','$postcode','$state','$status')";
			
	$query2 = "INSERT INTO login(username,password,status) VALUES('$email','$ic','$status')";

	// binding the variable to for insert
	$requery2 = $mysqli_db->prepare($query2);
	$requery = $mysqli_db->prepare($query);

	// execute the query and insert into the table,
	// if the insert is successful, it will redirect to the home.php page
	
	


		if (($requery2->execute()) && ($requery->execute())) {
			echo "<script>alert('Thank You for registration $name !!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		
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
<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate2.css">
	<link rel="stylesheet" href="css/styles.css">
	
	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
  
	<script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Bilbo_400.font.js"></script>
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
                
                
                  
                jQuery("#street").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
                });
                
                
                jQuery("#post").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
                });
                jQuery("#post").validate({
                    expression: "if (VAL.match(/^[0-9]{5}$/)) return true; else return false;",
                    message: "Invalid poscode!"
                });
                
               
                 jQuery("#noTel").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Can't be empty!"
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
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="book.php">Booking</a></li>
                        <li ><a href="contact.php">Contact Us</a></li>
                        <li class="active"><a href="login.php">Sign In</a></li>
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
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="register">
	<table width="200" border="0" align="center" bgcolor="#000000">
                        <tr>
                            <td>
                                <table width="857" border="0" align="center" bgcolor="#EEEC91">
                                    <tr>
                                    	<br><br>
                                        <td height="25" colspan="3"><div align="center" class="style2 style3">Personal Details</div></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="195"><div align="left"><strong>Name</strong></div></td>
                                        <td width="22"><div align="center">:</div></td>
                                        <td width="626" colspan="3"><label>
                                                <input name="name" id="nama" type="text" size="50" maxlength="50" onChange="event1()" placeholder="Enter your full name"/>        
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td height="25"><strong>Identity Card Number</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td colspan="3"><label>
                                                <input type="text" name="ic" id="noKP" maxlength="12"  size="12" placeholder="Cth:111111223333"/>
                                            </label></td>
                                    </tr>
									<tr>
                                        <td height="25"><strong>Contact Number</strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                                <input type="text" name="phone" id="noTel" size="12" placeholder="Cth:034444444" />
                                            </label></td>
                                    </tr>
                                     <tr>
                                        <td height="25"><strong>E-mail </strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                                <input type="text" name="email" id="email" size="12" maxlength="50" placeholder="Cth:b@yahoo.com"/>
                                            </label></td>
                                    </tr>
									<tr>
                                        <td height="25"><strong>Street </strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                               <textarea name="street" id="street" placeholder="Insert Street Address"></textarea>
                                            </label></td>
                                    </tr>
									<tr>
                                        <td height="25"><strong>Postcode  </strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                               <input type="text" name="postcode" id="post" placeholder="Insert Postcode"maxlength="7"/>
                                            </label></td>
                                    </tr>
                                   <tr>
                                        <td height="25"><strong>State  </strong></td>
                                        <td><div align="center">:</div></td>
                                        <td><label>
                                               <select name="select" size="1">
            <option>Please choose</option>
            <option>Melaka</option>
            <option>Pahang</option>
            <option>Negeri Sembilan</option>
            <option>Selangor</option>
            <option>Terengganu</option>
            <option>Kelantan</option>
            <option>Kedah</option>
            <option>Penang</option>
            <option>Perak</option>
            <option>Perlis</option>
            <option>Wilayah Persekutuan</option>
            <option>Sabah</option>
            <option>Sarawak</option>
            <option>Johor</option>
          </select>
                                            </label></td>
                                    </tr>
									
                                    
                                   
                                    
                                    <tr>
                                        <td height="25" colspan="3"><div align="center">
                                                <input name="submit" type="Submit" value="Register"/>
                                                &nbsp;
                                                <label>
                                                    <input type="Reset" name="kosongkan" value="Reset" />
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
	
	
                
                
              
		
<br><br><br><br><br><br>
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