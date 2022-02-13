<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link href="style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<br>

<div>
<p class="d-flex justify-content-center" style="font-size:180px"> Image Upload </p>
</div>
<br>
<br>
<br>
<div class="d-flex justify-content-center" id="content">
  

<form method="POST" action="" enctype="multipart/form-data">
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Username :</span>
  <input type="text" class="form-control" name="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
  <div class="input-group mb-3">
  <input type="file" name="uploadfile" value=""class="form-control" id="inputGroupFile02">
  <button class="input-group-text" for="inputGroupFile02" type="submit" name="upload">UPLOAD</button>
  </div>
</form>
</div>
<br>
<br>
<center><a href="Home.php" ><input class="btn btn-primary" type="submit" value="Sign In" </a></center>
<br>
<br>
</body>
</html>

<?php
error_reporting(0);
?>
<?php
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = $filename;
    $name = strtolower($_POST['user']);
    $db = mysqli_connect("localhost", "root", "", "db_new");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO pics VALUES ('$name','$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM pics");
while($data = mysqli_fetch_array($result))
{
  
      ?>
<img src="<?php echo $data['filename']; ?>"height="200" width="200">
  
<?php
}
?>