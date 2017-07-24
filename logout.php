<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

echo "<script>alert('Successfully Logout!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
?>

</body>
</html>