<?php

$conn = mysqli_connect('chalaheadchala.mysql.database.azure.com', 'goten@chalaheadchala', 'Ggggg12188', 'ITFlab', 3306);

$id = $_POST['ID'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = 'UPDATE guestbook SET name="'.$name.'",comment="'.$comment.'",link="'.$link.'" WHERE ID='.$id.'';


if (mysqli_query($conn, $sql)) {
    echo "<center><font size='10' color='lightgreen'><br><br><br><br>Successful.</font></center>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=https://gotenchalaheadchala.azurewebsites.net/show.php'>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
