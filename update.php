<?php

$conn = mysqli_connect('chalaheadchala.mysql.database.azure.com', 'goten@chalaheadchala', 'Ggggg12188', 'ITFlab', 3306);
$sql = 'SELECT * FROM guestbook WHERE ID = '.$_GET['ID'].'';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="display-3 text-center">Update</div>
  <form action = "upload.php" method = "post" class="form-horizontal mt-5">
    <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
    <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">Fisrtname</label>
                    <div class="col-sm-9">
                        <input type="text" name = "name" id="idName" class="form-control" value="<?php echo $row['name'];?>" placeholder="Enter Name">
                    </div>
                </div>
    </div>
    <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">Comment</label>
                    <div class="col-sm-9">
                        <textarea rows="10" cols="20" name = "comment" id="idComment" class="form-control" placeholder="Enter Comment"><?php echo $row['comment'];?></textarea>
                    </div>
                </div>
    </div>  
    <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">Link</label>
                    <div class="col-sm-9">
                        <input type="text" name = "link" id="idLink" class="form-control" value="<?php echo $row['link'];?>" placeholder="Enter Link">
                    </div>
                </div>
    </div>
    <div class="form-group text-center">
        <div class="col-md-12 mt-3">
    <button type="submit" class="btn btn-success">Save</button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
    </div>
    </div>
  </form>
</body>
</html>
