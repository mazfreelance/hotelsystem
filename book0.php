<?php
				
				$conn = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn->connect_error) {
 				   die("Connection failed: " . $conn->connect_error);
				} 
				$ic = $_POST['ic'];
				$sql = "SELECT * FROM booking WHERE ic_no= $ic";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 
    			// output data of each row
   				 while($row = $result->fetch_assoc()) {
        			$name 	=$row["name"];
					$ic_no 	=$row["ic_no"];
					$email 	=$row["email"];
					$c_number =	$row["c_number"];
					$check_in 	=$row["check_in"];
					$check_out 	=$row["check_out"];
					$night 	= $row["night"];
					$roomtype =	$row["roomtype"];
					$nor 	=$row["nor"];
					$total_price =	$row["total_price"];	
					$roomid = $row["roomid"];
					
   				 }
   				 
				} else {
    			echo "0 results";
				}
				$conn->close();
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    
<head><script type="text/javascript">
window.onload = function() {
window.print();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seri Indah Hotel</title>
<style type="text/css">
<!--
.style79 {font-weight: bold}
.style80 {font-size: small}
-->
</style>
<table width="867" border="4" align="center" bgcolor="#FFFFFF" style="border:dotted">
        <tr>
          <td width="851" height="586" scope="col">
                      
            
            <form action="" method="post" name="form1">
    
      
        
        <div align="center">
          <p align="center"><b><font color="#000000">Booking Receipt</font></b></p>
        </div>
       
      
      
            </p><table width="809" border="0" align="center">
  <tr>
    <td width="158"><strong>Name</strong></td>
    <td width="6"><div align="center">:</div></td>
    <td width="262"><?php echo "$name"; ?></td>
    </tr>
  <tr>
    <td><strong>Identity Card Number</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$ic_no"; ?></td>
    </tr>
  <tr>
    <td><strong>E-mail </strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$email"; ?></td>
    </tr>
  <tr>
    <td><strong>Contact Number</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$c_number"; ?></td>
    </tr>
	<tr>
    <td><strong>Check-in</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$check_in"; ?></td>
    </tr>
  <tr>
    <td><strong>Check-out</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$check_out"; ?></td>
    </tr>
	<td><strong>Nights</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$night"; ?></td>
    </tr>
  <tr>
    <td><strong>Room Type </strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$roomtype"; ?></td>
    </tr>
	<tr>
    <td><strong>Number of room</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo "$nor"; ?></td>
    </tr>
	<td><strong>Price</strong></td>
    <td><div align="center">:</div></td>
    <td>RM <?php echo "$total_price"; ?></td>
    </tr>
</table>
			<br /><br />
            <div align="center">
          <p align="center"><b><font color="#000000">******************************<br /></font></b></p>
        </div>
      <div align="center">
          <p align="center"><b><font color="#000000">Thank you for used our system.</font></b></p>
        </div>
     
            <p>&nbsp;</p>

        </p>
   <p>&nbsp;</p>
 </form>
 <div align="center">
          <p align="center"><img src="icon/seriindah.jpg"</p>
        </div>
  <div align="center">
          <p align="center"><font color="#000000">&copy; <a href="index.php">Seri Indah Hotel</a> 2014. All right reserved.</font></p>
        </div>
        </td>
        </tr>
       
      </table>
       <p align="center"><font color="#000000"><a href="customerBooking.php">Back</a></font></p>
</td>
      </tr>
      </table></td>
      </tr>
      </table>

</body>
</html>

