<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  margin-left:10px;
  width: 250px;
  background-color:rgba(25,40,73,0.8);
  position: fixed;
  height: 50%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}
.iframe1{
  width:70vw;
  padding-left:330px;
  height:50vh;
  border:none;
}

@media screen and (max-width: 768px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .iframe1{
    width:100vw;
    padding-left:0px;
  }
}
</style>
</head>
<body>
 
<div style="display:none" class="error" id="error">
Login Unsuccessful
</div>
<div style="display:none;" class="main" id="main">
 
<?php

$data_base="VEC";
$link=mysqli_connect('localhost','root','');
if(!$link)
{
die('could not connect to mysql:'.mysqli_error());
}
mysqli_select_db($link,$data_base);
//echo "connection ok succesfully connected";
$a=1;
$b=1;
$UserID=1;
if(isset($_POST['username']))
{
$a=$_POST['username'];
}
if(isset($_POST['pwd']))
{
$b=$_POST['pwd'];
}

$sql1="select UserID,Username,Password from reg where reg.Username='".$a."' and reg.Password='".$b."'";
$result2=mysqli_query($link,$sql1);
if($result2->num_rows>0){
	echo "<script>document.getElementById('main').style.display='block';</script>";
	while($row=$result2->fetch_assoc()){
		$UserID=$row["UserID"];
		
	}
}

else
echo "<script>document.getElementById('error').style.display='block';</script>";

?>
<div class="sidebar">
  <?php
  
    echo "<a id='8'  class='active' href='Profile.php?id=$UserID' target='right' onclick='side_change(8)'>User Profile</a>";
  echo "<a id='9'   href='Track.php?id=20201' target='right' onclick='side_change(9)'>Vehicle Details</a>";
  echo "<a id='10'   href='para.html' target='right' onclick='side_change(10)'>Physical Parameters</a>";
    
?>
  </div>
  <script>
  
function side_change(x)
{
	document.getElementById(x).style.background="#4CAF50";
	document.getElementById(x).style.color="white";
	if(x==8)
		{
			document.getElementById("9").style.background="transparent";
      document.getElementById("10").style.background="transparent";
			
		}
	elseif(x==9)
	{
		document.getElementById("8").style.background="transparent";
    document.getElementById("10").style.background="transparent";
	}
  else
  {
    document.getElementById("9").style.background="transparent";
    document.getElementById("8").style.background="transparent";
  }
  
}
  </script>
</div>
<iframe name="right" class="iframe1" src="Profile.php"></iframe>
</body>
</html>


