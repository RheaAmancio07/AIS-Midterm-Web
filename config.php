<?php
// $servername = "192.168.0.69";
// $username = "Rhea";
// $password = "S3cr3t";
// $dbname = "midtermais";
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if(!$conn){
//  die('Could not Connect My Sql:' .mysqli_error());
// }

// $servername = "localhost";
// $username = "Rhea";
// $password = "S3cr3t";
// $dbname = "midtermais";

$servername = "192.168.0.28";
$username = "aismidterm";
$password = "S3cr3t";
$dbname = "aismidterm";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>