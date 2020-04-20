<html>
<head>
<style>
body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
  overflow: hidden;
  background-color:rgba(25,40,73,0.8);
}
.heading{
	color:white;
	padding:20px;
	font-size:20px;
}
.val{
	color:white;
	background-color:MediumSeaGreen;
	width:200px;
	border-radius:8px;
	height:20px;
	padding:20px;
	font-size:15px;
}
</style>
</head>
<body>

<?php
$data_base="VEC";
$link=mysqli_connect('localhost','root','');
if(!$link)
{
die('could not connect to mysql:'.mysqli_error());
}
mysqli_select_db($link,$data_base);
//echo "connection ok succesfully connected";
$UserID=1;

if(isset($_GET['id']))
{
$UserID=$_GET['id'];
}
$VehicleID=1;
$VehicleName=2;
$DriverMobileno=1;

$sql1="select VehicleID,VehicleName,DriverMobileno from vehicle where vehicle.UserID='".$UserID."'";
$result1=mysqli_query($link,$sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {

        $VehicleID=$row["VehicleID"] ;
		$VehicleName=  $row["VehicleName"];
		$DriverMobileno=$row["DriverMobileno"];
		
    }
} else {
    echo "0 results";
}
?>

<div style="padding-top:20px">
<table>
<tr>
<td class="heading">VehicleID</td>
<td class="val">
<?php echo $VehicleID ?></td></tr>
<tr>
<td class="heading">VehicleName</td>
<td class="val">
<?php echo $VehicleName ?></td></tr>
<tr>
<td class="heading">DriverMobileno</td>
<td class="val">
<?php echo $DriverMobileno ?></td></tr>
</table>
</div>


</body>
</html>