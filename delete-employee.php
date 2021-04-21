<?php
  include_once('config.php');

  $id = $_GET['delId'];

  $sql = "DELETE FROM `employee` WHERE id = '$id' " ;
//   $result = $conn->query($sql);

  if (mysqli_query($conn, $sql)) {
    header("location:browse-employee.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
?>