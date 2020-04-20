<!DOCTYPE html>
<html>
<head>
<title>GPS Interfacing with NodeMCU</title>
<style>


a:link {
    background-color: YELLOW;
    text-decoration: none;
}



h1{
font-size:20px;
color:white;
}

.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
</style>
</head>
<body>
<div class="nenu" style="background-color: #F08080">

<p style="font-size:150%; text-align:center;"> <b>Location Details</b></p>
<table ALIGN=CENTER style="width:50%">
  <tr>
    <th>Latitude</th>
    <?php 
        $l=18.465528;
        ?>
	
    <td ALIGN=CENTER ><?php echo $l; ?></td>
  </tr>

  <tr>
    <th>Longitude</th> 
    <td ALIGN=CENTER >83.661100</td> 
  </tr>
  <?php
    date_default_timezone_set('Asia/Kolkata');
    $timestamp1= date('d-m-y');
    $timestamp = date('H:i:s');
?>

  <tr>
    <th>Date</th>
    <td ALIGN=CENTER ><?php echo $timestamp1; ?></td>
  </tr>
    
  <tr>
    <th>Time</th>
    <td ALIGN=CENTER ><?php echo $timestamp; ?></td>
  </tr>
 
</table>

<p align=center><a style="color:RED;font-size:125%;" href="http://maps.google.com/maps?&z=15&mrt=yp&t=k&q=18.465528+83.661100" target="_top">Click here!</a> To check the location in Google maps.</p>
</div>
<div class="nenu">
  <br></br>
</div>
  <div>
</body>
</html>