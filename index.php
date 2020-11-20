<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <div class="display-3 text-center">Insert</div>
  <form action = "insert.php" method = "post" id="CommentForm" class="form-horizontal mt-5">
    <div class="form-group text-center">
      <div class="row">
          <label for="firstname" class="col-sm-3 control-label">Fisrtname</label>
          <div class="col-sm-9">
              <input type="text" name = "name" id="idName" class="form-control" placeholder="Enter Name...">
          </div>
      </div>
    </div>
    <div class="form-group text-center">
      <div class="row">
          <label for="firstname" class="col-sm-3 control-label">Comment</label>
          <div class="col-sm-9">
              <textarea rows="10" cols="20" name = "comment" id="idComment" class="form-control" placeholder="Enter Comment..."></textarea>
          </div>
      </div>
  </div>
  <div class="form-group text-center">
    <div class="row">
        <label for="firstname" class="col-sm-3 control-label">Link</label>
        <div class="col-sm-9">
            <input type="text" name = "link" id="idLink" class="form-control" placeholder="Enter Link...">
        </div>
    </div>
  </div>
  <div class="form-group text-center">
    <div class="col-md-12 mt-3">
        <input type="submit" id="commentBtn" class="btn btn-success" value="Insert">
        <a href="show.php" class="btn btn-danger">Cancel</a>
    </div>
  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>
</html>
