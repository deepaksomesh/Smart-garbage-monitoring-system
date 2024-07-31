<?php
date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect('localhost','iotvehic_vtacc','~F0BmU5&q(X%','iotvehic_vtacc');
$sql = "SELECT * FROM dus";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>


<div class="row" style="margin-top: 5px">
			<div class="col-md-3"  style="margin-top: 5px; margin-left:50px;">
				<center><span class="label label-danger">SMART DIGITAL DUST BIN</span></center>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>

    
<?php 
if($row['temp'] >='1' AND $row['temp'] <='4' )
echo '<td width="14%"><img src="images/therm-98.png" width="94" height="292"></td>';

if($row['temp'] >='5' AND $row['temp'] <='8' )
echo '<td width="14%"><img src="images/therm-85.png" width="94" height="292"></td>';

if($row['temp'] >='9' AND $row['temp'] <='12' )
echo  '<td width="14%"><img src="images/therm-70.png" width="94" height="292"></td>';

if($row['temp'] >='13' AND $row['temp'] <='16' )
echo '<td width="14%"><img src="images/therm-50.png" width="94" height="292"></td>';

if($row['temp'] >='17' AND $row['temp'] <='20' )
echo '<td width="14%"><img src="images/therm-25.png" width="94" height="292"></td>';

if($row['temp'] >='21' AND $row['temp'] <='24' )
echo '<td width="14%"><img src="images/therm-10.png" width="94" height="292"></td>';

if($row['temp'] >='25' AND $row['temp'] <='200' )
echo '<td width="14%"><img src="images/therm-0.png" width="94" height="292"></td>';


?>

<td width="70"><table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<h1>
<?php echo "GARBAGE BIN LEVEL";; ?>
</td>
</tr>
<tr>
<td>
Date &amp; Time:
<?php echo $row['current']; ?>
</td>
</tr>
</table></td>
</tr>
</table>