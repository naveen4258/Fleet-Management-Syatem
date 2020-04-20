<?php
//Creates new record as per request
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vec";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Database Connection failed: " . $conn->connect_error);
}
//Get current date and time
date_default_timezone_set('Asia/Kolkata');
$d = date("Y-m-d");
//echo " Date:".$d."<BR>";
$t = date("H:i:s");
//echo $t;
echo "test";

if(!empty($_GET['temparature']) || !empty($_GET['humidity']))
{

$temparature = $_GET['temparature'];
$humidity = $_GET['humidity'];
echo $temparature;
$sql = "INSERT INTO loc (longitude, lattitue, time, date)
VALUES ('".$humidity."', '".$temparature."', '".$d."', '".$t."')";
if ($conn->query($sql) === TRUE) {
echo "OK";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}}
$conn->close();
?>
