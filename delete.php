<?php

$conn = mysqli_connect($conn, 'chalaheadchala.mysql.database.azure.com', 'goten@chalaheadchala', 'Ggggg12188', 'ITFlab', 3306);
$id = $_GET['ID'];
$sql = "DELETE FROM guestbook WHERE ID = '$id'";

if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    echo "Successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
