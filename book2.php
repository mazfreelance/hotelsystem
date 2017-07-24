
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    
<head><script type="text/javascript">
window.onload = function() {
window.print();
}
</script><script type="text/javascript">
function check()
{
 var valid=true;
 if (document.form3.noCenter.value=="")
 {
 alert("Maaf, Sila Masukkan Nombor Pusat");
 document.form3.noCenter.focus();
 valid=false;
 }
 if (document.form3.namaCenter.selectedIndex==0)
 {
 alert("Maaf, Sila Masukkan Nama Pusat/Sekolah");
 valid=false;
 }
 if (document.form3.nama.value=="")
 {
 alert("Maaf, Sila Masukkan Nama Ketua Pengawas");
 document.form3.nama.focus();
 valid=false;
 }
 if (document.form3.noKad.value=="")
 {
 alert("Maaf, Sila Masukkan Nombor Kad Pengenalan");
 document.form3.noKad.focus();
 valid=false;
 }
 if (document.form3.AlamatRumah.value=="")
 {
 alert("Maaf, Sila Masukkan Alamat Rumah");
 document.form3.AlamatRumah.focus();
 valid=false;
 }
 if (document.form3.alamatSekolah.value=="")
 {
 alert("Maaf, Sila Masukkan Alamat Tempat Bertugas");
 document.form3.alamatSekolah.focus();
 valid=false;
 }
 if (document.form3.noTel.value=="")
 {
 alert("Maaf, Sila Nombor Telefon");
 document.form3.noTel.focus();
 valid=false;
 }
 if (document.form3.noPusat.value=="")
 {
 alert("Maaf, Sila Masukkan Nombor Pusat Peperiksan");
 document.form3.noPusat.focus();
 valid=false;
 }

 if (document.form3.namaPusat.selectedIndex==0)
 {
 alert("Maaf, Sila Pilih NamaPusat Peperiksaan");
 valid=false;
 }
if (document.form3.jawatan.value=="")
 {
 alert("Maaf, Sila Jawatan Dalam Peperiksaan");
 document.form3.jawatan.focus();
 valid=false;
 }
return valid;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unit Penilaian dan Peperiksaan</title>
<link href="file:///E|/Nurul/praktikal/pepriksaan/menu/stylenew.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	function checkpusat()
	{
		var result="";
		if(document.form3.namaCenter.value=="SK BANGGOL PAK ESAH")
			result="DJ033"
	
		else if(document.form3.namaCenter.value=="SK BUKIT ABAL")
			result="DJ029"
				
		else if(document.form3.namaCenter.value=="SK BUKIT AWANG")
			result="DJ117"
		
		else if(document.form3.namaCenter.value=="SK BUKIT JAWA")
			result="DJ001"
			
		else if(document.form3.namaCenter.value=="SK BUKIT JAWA (2)")
			result="DJ005"
			else if(document.form3.namaCenter.value=="SK BUKIT MERBAU")
			result="DJ017"
		else if(document.form3.namaCenter.value=="SK BUKIT TANAH")
			result="DJ073"	
			else if(document.form3.namaCenter.value=="SK CHANGGAI")
			result="DJ085"
			else if(document.form3.namaCenter.value=="SK CHERANG RUKU")
			result="DJ129"
			else if(document.form3.namaCenter.value=="SK DALAM RHU")
			result="DJ141"
			else if(document.form3.namaCenter.value=="SK DANAN")
			result="DJ013"
			else if(document.form3.namaCenter.value=="SK GAAL")
			result="DJ081"
			else if(document.form3.namaCenter.value=="SK GONG GARU")
			result="DJ089"
			else if(document.form3.namaCenter.value=="SK GONG MANAK")
			result="DJ125"
			else if(document.form3.namaCenter.value=="SK JELOR")
			result="DJ069"
			else if(document.form3.namaCenter.value=="SK JERAM")
			result="DJ101"
			else if(document.form3.namaCenter.value=="SK KAMIL (1)")
			result="DJ045"
			else if(document.form3.namaCenter.value=="SK KAMIL (2)")
			result="DJ049"
			else if(document.form3.namaCenter.value=="SK KAMIL (3)")
			result="DJ145"
			else if(document.form3.namaCenter.value=="SK KAMPONG BERANGAN")
			result="DJ021"
			else if(document.form3.namaCenter.value=="SK KAMPONG KANDIS")
			result="DJ093"
			else if(document.form3.namaCenter.value=="SK KAMPONG NARA")
			result="DJ065"
			else if(document.form3.namaCenter.value=="SK KAMPONG RAJA")
			result="DJ105"
			else if(document.form3.namaCenter.value=="SK KAMPUNG SEPULAU")
			result="DJ133"
			else if(document.form3.namaCenter.value=="SK KAMPUNG TASEK")
			result="DJ121"
			else if(document.form3.namaCenter.value=="SK KULIM")
			result="DJ077"
			else if(document.form3.namaCenter.value=="SK PADANG PAK AMAT")
			result="DJ061"
			else if(document.form3.namaCenter.value=="SK PANGGONG")
			result="DJ041"
			else if(document.form3.namaCenter.value=="SK PASIR PUTEH (L)")
			result="DJ015"
			else if(document.form3.namaCenter.value=="SK PASIR PUTEH (P)")
			result="DJ057"
			else if(document.form3.namaCenter.value=="SK SELIGI)")
			result="DJ037"
			else if(document.form3.namaCenter.value=="SK SRI AMAN")
			result="DJ149"
			else if(document.form3.namaCenter.value=="SK SUNGAI PETAI")
			result="DJ113"
			else if(document.form3.namaCenter.value=="SK TASEK PAUH")
			result="DJ025"
			else if(document.form3.namaCenter.value=="SK TELOSAN")
			result="DJ109"
			else if(document.form3.namaCenter.value=="SK TOK BALI")
			result="DJ137"
			else if(document.form3.namaCenter.value=="SK TUALANG TINGGI")
			result="DJ009"
			else if(document.form3.namaCenter.value=="SK WAKAF RAJA")
			result="DJ097"
			else if(document.form3.namaCenter.value=="SR UGAMA (A) DINIAH")
			result="DJ500"
			else if(document.form3.namaCenter.value=="SJK (C) KAI CHIH")
			result="DJ600"
			
		document.form3.noCenter.value=result;
		
	}
</script>
<script type="text/javascript">
	function checkNo()
	{
		var result="";
		if(document.form3.namaPusat.value=="SK BANGGOL PAK ESAH")
			result="DJ033"
	
		else if(document.form3.namaPusat.value=="SK BUKIT ABAL")
			result="DJ029"
				
		else if(document.form3.namaPusat.value=="SK BUKIT AWANG")
			result="DJ117"
		
		else if(document.form3.namaPusat.value=="SK BUKIT JAWA")
			result="DJ001"
			
		else if(document.form3.namaPusat.value=="SK BUKIT JAWA (2)")
			result="DJ005"
			else if(document.form3.namaPusat.value=="SK BUKIT MERBAU")
			result="DJ017"
		else if(document.form3.namaPusat.value=="SK BUKIT TANAH")
			result="DJ073"	
			else if(document.form3.namaPusat.value=="SK CHANGGAI")
			result="DJ085"
			else if(document.form3.namaPusat.value=="SK CHERANG RUKU")
			result="DJ129"
			else if(document.form3.namaPusat.value=="SK DALAM RHU")
			result="DJ141"
			else if(document.form3.namaPusat.value=="SK DANAN")
			result="DJ013"
			else if(document.form3.namaPusat.value=="SK GAAL")
			result="DJ081"
			else if(document.form3.namaPusat.value=="SK GONG GARU")
			result="DJ089"
			else if(document.form3.namaPusat.value=="SK GONG MANAK")
			result="DJ125"
			else if(document.form3.namaPusat.value=="SK JELOR")
			result="DJ069"
			else if(document.form3.namaPusat.value=="SK JERAM")
			result="DJ101"
			else if(document.form3.namaPusat.value=="SK KAMIL (1)")
			result="DJ045"
			else if(document.form3.namaPusat.value=="SK KAMIL (2)")
			result="DJ049"
			else if(document.form3.namaPusat.value=="SK KAMIL (3)")
			result="DJ145"
			else if(document.form3.namaPusat.value=="SK KAMPONG BERANGAN")
			result="DJ021"
			else if(document.form3.namaPusat.value=="SK KAMPONG KANDIS")
			result="DJ093"
			else if(document.form3.namaPusat.value=="SK KAMPONG NARA")
			result="DJ065"
			else if(document.form3.namaPusat.value=="SK KAMPONG RAJA")
			result="DJ105"
			else if(document.form3.namaPusat.value=="SK KAMPUNG SEPULAU")
			result="DJ133"
			else if(document.form3.namaPusat.value=="SK KAMPUNG TASEK")
			result="DJ121"
			else if(document.form3.namaPusat.value=="SK KULIM")
			result="DJ077"
			else if(document.form3.namaPusat.value=="SK PADANG PAK AMAT")
			result="DJ061"
			else if(document.form3.namaPusat.value=="SK PANGGONG")
			result="DJ041"
			else if(document.form3.namaPusat.value=="SK PASIR PUTEH (L)")
			result="DJ015"
			else if(document.form3.namaPusat.value=="SK PASIR PUTEH (P)")
			result="DJ057"
			else if(document.form3.namaPusat.value=="SK SELIGI)")
			result="DJ037"
			else if(document.form3.namaPusat.value=="SK SRI AMAN")
			result="DJ149"
			else if(document.form3.namaPusat.value=="SK SUNGAI PETAI")
			result="DJ113"
			else if(document.form3.namaPusat.value=="SK TASEK PAUH")
			result="DJ025"
			else if(document.form3.namaPusat.value=="SK TELOSAN")
			result="DJ109"
			else if(document.form3.namaPusat.value=="SK TOK BALI")
			result="DJ137"
			else if(document.form3.namaPusat.value=="SK TUALANG TINGGI")
			result="DJ009"
			else if(document.form3.namaPusat.value=="SK WAKAF RAJA")
			result="DJ097"
			else if(document.form3.namaPusat.value=="SR UGAMA (A) DINIAH")
			result="DJ500"
			else if(document.form3.namaPusat.value=="SJK (C) KAI CHIH")
			result="DJ600"
			
		document.form3.noPusat.value=result;
	}
</script>

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
          <p align="center"><b><font color="#000000">Report</font></b></p>
        </div>
       
      
      
            </p> <table border="1">
		<tr><th>Bil</th>
		<th>Name</th>
		<th>IC_Number</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Check in</th>
		<th>Check out</th>
		<th>Room Type</th>
		<th>Number of Room</th>
		<th>Total Price</th>
		<th>Status</th>
		
		
		</tr>	
		<?php
				
				$conn = new mysqli("localhost","root","","hoteldb");
				// Check connection
				if ($conn->connect_error) {
 				   die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM booking";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 
    			// output data of each row
   				 while($row = $result->fetch_assoc()) {
        			
					
					echo "<tr>";
					echo "<td>".$row["bil"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["ic_no"]."</td>";
					echo "<td>".$row["email"]."</td>";
					echo "<td>".$row["c_number"]."</td>";
					echo "<td>".$row["check_in"]."</td>";
					echo "<td>".$row["check_out"]."</td>";
					echo "<td>".$row["roomtype"]."</td>";
					echo "<td>".$row["nor"]."</td>";
					echo "<td>".$row["total_price"]."</td>";
					echo "<td>".$row["status"]."</td>";
					
					
					echo "</tr>";
					
   				 }
   				 echo "</table>";
				} else {
    			echo "0 results";
				}
				$conn->close();
?>


     
            <p>&nbsp;</p>

        </p>
   <p>&nbsp;</p>
 </form>
        </td>
        </tr>
      </table>
      
</td>
      </tr>
      </table></td>
      </tr>
      </table>

</body>
</html>

