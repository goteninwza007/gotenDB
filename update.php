<?php

$conn = mysqli_connect('chalaheadchala.mysql.database.azure.com', 'goten@chalaheadchala', 'Ggggg12188', 'ITFlab', 3306);
$sql = 'SELECT * FROM guestbook WHERE ID = '.$_GET['ID'].'';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
  <form action = "insert.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?php echo $row['name'];?>" placeholder="Enter Name"><br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?php echo $row['comment'];?>" placeholder="Enter Link"> <br><br>
    <input type="submit" id="commentBtn" value="<?php echo $row['link'];?>">
  </form>
  <?php
    }
    $conn->close();
  ?>
</body>
</html>

