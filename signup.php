<?php
$data_base="VEC";
$ID=20201;
$link=mysqli_connect('localhost','root','');
if(!$link)
{
die('could not connect to mysql:'.mysqli_error());
}
mysqli_select_db($link,$data_base);
echo "connection ok succesfully connected";
$a=1;
$b=1;
$c=1;
$d=1;
$e=1;

if(isset($_POST['username']))
{
$a=$_POST['username'];
}
if(isset($_POST['pwd']))
{
$b=$_POST['pwd'];
}
if(isset($_POST['email']))
{
$c=$_POST['email'];
}
if(isset($_POST['mobileno']))
{
$d=$_POST['mobileno'];
}
if(isset($_POST['address']))
{
$e=$_POST['address'];
}

$sql3="select UserID from reg"; 
$result3=mysqli_query($link,$sql3);
$UserID=$ID+$result3->num_rows;
echo $result3->num_rows;
$sql2="select Username,Password from reg where reg.Username='".$a."' and reg.Password='".$b."'";
$result2=mysqli_query($link,$sql2);

if($result2->num_rows==0){
	$sql1="insert into reg(UserID,Username,Password,Email,Mobileno,Address)values('$UserID','$a','$b','$c','$d','$e')";
	if(mysqli_query($link,$sql1)){
		echo "welcome";
		header("Location:login1.html");
	}
	}

else{
	echo "Already registered";
}




?>