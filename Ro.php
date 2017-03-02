<html>
<head>
<title>Repair Order</title>
  <style>
  input{
	  font-size:1.5em;
  }
table, td, th {
	 border: 1px solid #ddd;
	text-align: left;
}


table {
    
    
	width: 100%;
	border-collapse: collapse;
	border-spacing: 5px;
}

th, td {
	 padding: 5px;
}

textarea { border: none; }
</style>
</head>
<body>
<?php
session_start();

//manual customer id and job card id
include 'Mysql_connect.php';
$sql='select name,address from customer where id=(select customer_id from job_card where card_id='.$_SESSION['jid'].')';
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sql='select chassis_no,remark from job_card where card_id='.$_SESSION['jid'];
$result1=$conn->query($sql);
$row1 = $result1->fetch_assoc();

?>
<img src="logo.png" align="right" alternate="logo"></img>
<p align="left">
<h3>Precision Autoworkz</h3>
R-427/13,TTC Industrial Area,<br>
 MIDC Rabale,Navi Mumbai<br>
Phone: 9619161027</p>
<center><h2>Repair Order</h2></center>
<form action="" id="frm2" method="POST">  
<table>
<tr><td><b>Name</b></td><td><input type="text" id="name" style="border: none" value='<?php echo $row['name']?>'></td><td><b>Regn no:</b></td><td><input type="text" id="reg_no" style="border: none"></td></tr>
<tr><td><b>Address</b></td><td><textarea rows="4" cols="55" value='' style='font-size:1.5em;'><?php echo $row['address']?></textarea></td><td><b>Mileage</b></td><td><input type="number" id="reg_no" style="border: none"></td></tr>
<tr><td><b>Contact Person</b></td><td><input type="text" style="border: none"><td><b>Chassis no.</b></td><td><input type="text" id="reg_no" style="border: none" value='<?php echo $row1['chassis_no'];?>'></td></tr>
<tr><td><b>Engine no:</b></td><td><input type="text" id="reg_no" style="border: none"></td><td><b>Model</b></td><td><input type="text" id="reg_no" style="border: none"></td></tr>


<tr><th colspan=""><b>Customer Request</b></th><th></th><th>Service Advisor Instructions</th></tr>
<tr><td colspan="2"><textarea rows="10" cols="80" style='font-size:1.5em; width:100%;'><?php echo $row1['remark'];?></textarea></td><td colspan="2"><textarea rows="10" cols="80" style='font-size:1.5em; width:100%;'><?php 
include 'Mysql_connect.php';
$sql='select j.job_name,j.total_price from job j  where j.job_id in (select job_id from job_card_details where card_id=9);';
$result2 = $conn->query($sql);
$num=$result2->num_rows;
$i=1;
//echo $num;
while($num>0){
	//echo '<br>';
$row2 = $result2->fetch_assoc();
echo  $i.':'.$row2['job_name']."\n";
$num--;
$i++;
}

?></textarea></td></tr>
</table>

Terms of payment are Cash, Demand Draft or Pay Order only.
<table>
<tr><td colspan="1"><p align="left"><b>Estimated</b><br><br>
                                    Promised date:<br>
                                    Promised time:<br>
                                    Estimated amount:<br>
                                    Service advisor:<br>
                                    Mobile no:<br></td>
<td></td><td><img src="guage.jpg" width="20%" height="20%"><img src="pic2.jpg" width="55%" height="55%"><br>C-Crack D-Dent/Damage S-Scratch/Spot P-Peeling</td>
<td><table>
<tr><td>Service book</td><td>yes</td><td>No</td><td>Idols</td></tr>
<tr><td>tool kit</td><td>yes</td><td>No</td><td>Wheel covers</td></tr>
<tr><td>Spare wheel</td><td>yes</td><td>No</td><td>Wheel caps</td></tr>
<tr><td>Jack</td><td>yes</td><td>No</td><td>Mud flaps</td></tr>
<tr><td>Jack Handle</td><td>yes</td><td>No</td><td>Dicky Mat</td></tr>
<tr><td>Car Perfume</td><td>yes</td><td>No</td><td>Cig lighter</td></tr>
<tr><td>Clock</td><td>yes</td><td>No</td><td>Speaker rr</td></tr>
<tr><td>Stereo</td><td>yes</td><td>No</td><td>Speaker fr</td></tr>
<tr><td>CD Player</td><td>yes</td><td>No</td><td>Tweeters Number</td></tr></table>
<td><table>
<tr><td>Mouth Pieces</td><td>yes</td><td>No</td></tr>
<tr><td>Battery</td><td>yes</td><td>No</td></tr>
<tr><td>Extended Warranty</td><td>yes</td><td>No</td></tr>
<tr><td>Service book</td><td>yes</td><td>No</td></tr>
<tr><td rowspan="2">Fuel guage posn:</td>
<td>E</td><td>1/4</td><td>1/2</td>
<tr><td>3/4</td><td>F</td>

</tr></table></td></tr>
<tr><td><p align="left">I hereby authorise for the above repairing using necessary materials and<br> I have agreed terms and conditions absolutely <br>
and unconditionally.<br><br><br>
Customer Signature.
<td></td>
<td><table>
<tr><td><b>Final inspection</b><br> ok<br>not ok</td></tr>
<tr><td>Name:</td></tr>
<tr><td>Time date:</td></tr></table>
<td><p align="left">
I hereby certify that all repairs have been <br>
carried to my satisfaction<br>
<br>
Date: </p>             <p align="right">Customer Sign:</p>          </td>
<td><table><tr><td>Delivery by</td><tr>
<tr><td>Name:</td></tr>
<tr><td>Time date:</td></tr></table> </td>
</tr><br><hr>
<tr><td><p align="left">Name:         <br>
                        Promised date:      <br>
                        Promised time:      <br></td>
<td></td>

<td><p align="left">  Job Card no:                   <br>
						<center><h2><?php echo $_SESSION['jid'];?></h2><center>
                     <br><br>
                     <p align="right"> Customer sign</p></td>
<td><p align="left">Mobile no:                         <br>
                    Vehicle no:                        <br>
                    <br><br><br>
                    Service advisor sign    </td>					 
<td></td>					 
					 </tr>
                    
                                
</table>
</form>
</body>
</html>