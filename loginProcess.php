
<?php
// Start the session
session_start();
?>
<?php
// establishing the MySQLi connection
 
$con = mysqli_connect("localhost","root","","hoteldb");
if (mysqli_connect_errno())
{
echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
// checking the user
if(isset($_POST['Submit'])){
$username = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$sel_user = "select * from login where username ='$username' AND password='$pass' AND status='active'";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);
$_SESSION["favanimal"] = $pass;
if($check_user>0){
$_SESSION['username']=$username;
echo "<script>alert('Successfully Login as $username!')</script>";
echo "<script>window.open('customerBooking.php','_self')</script>";
}
else if($username == "admin" && $pass == "admin")
{
echo "<script>alert('Successfully Login as ADMIN!')</script>";
	echo "<script>window.open('adtivation.php','_self')</script>";
}
else if($username == "staff" && $pass == "staff")
{
echo "<script>alert('Successfully Login as Staff!')</script>";
	echo "<script>window.open('adtivation_2.php','_self')</script>";
}
else {
echo "<script>alert('Email or password is not correct, try again!')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
}
?>