<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chalaheadchala.mysql.database.azure.com', 'goten@chalaheadchala', 'Ggggg12188', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
  echo "<center><font size='10' color='lightgreen'><br><br><br><br>Successful.</font></center>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=https://gotenchalaheadchala.azurewebsites.net/show.php'>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
