<?php

$conn = mysqli_connect('chalaheadchala.mysql.database.azure.com', 'goten@chalaheadchala', 'Ggggg12188', 'ITFlab', 3306);


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = 'UPDATE guestbook SET name="'.$name.'",comment="'.$comment.'",link="'.$link.'';


if (mysqli_query($conn, $sql)) {
    echo "Edit successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>