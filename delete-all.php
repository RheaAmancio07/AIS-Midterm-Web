<?php
   include_once('config.php');

   $sql = "TRUNCATE TABLE `employee`";
 //   $result = $conn->query($sql);
 
   if (mysqli_query($conn, $sql)) {
     header("location:browse-employee.php");
   } else {
     echo "Error deleting record: " . mysqli_error($conn);
   }
?>