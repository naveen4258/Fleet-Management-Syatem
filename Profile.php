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
	width:300px;
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
$Username=" ";
$Email=" ";
$Mobileno=1;
$Address=" ";

if(isset($_GET['id']))
{
$UserID=$_GET['id'];
}


$sql1="select Username,Email,Mobileno,Address from reg where reg.UserID='".$UserID."'";
$result1=mysqli_query($link,$sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {

        $Username=$row["Username"] ;
		$Email=  $row["Email"];
		$Mobileno=$row["Mobileno"];
		$Address=$row["Address"];
    }
} else {
    echo "0 results";
}
?>
<div style="padding-top:20px">
<table>
<tr>
<td class="heading">Username</td>
<td class="val">
<?php echo $Username ?></td></tr>
<tr>
<td class="heading">Email</td>
<td class="val">
<?php echo $Email ?></td></tr>
<tr>
<td class="heading">Mobileno</td>
<td class="val">
<?php echo $Mobileno ?></td></tr>
<tr>
<td class="heading">Address</td>
<td class="val">
<?php echo $Address ?></td></tr>
</table>
</div>



</body>
</html>