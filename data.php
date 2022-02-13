<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <title>EnsaT : Upload an Image ?</title>
</head>
<body>
<?php

include "connect1.php";


$first = strtolower($_POST['prenom']);
$last = $_POST['nom'];

$num = $_POST['number'];
$email = $_POST['email'];


$sql = "INSERT INTO infos VALUES ('$first','$last','$num','$email');";

$result = mysqli_query($conn,$sql);
?>
<br>
<br>
<br>
<p class="d-flex justify-content-center" style="font-size:180px" > Image Upload </p>
<br>
<br>
<div class="d-flex justify-content-center">
<a  href="image.php"> <button type="submit" value="Upload an Image" class="btn btn-outline-warning">Upload an Image</button>  </a>
<br> 
<a  href="Home.php"> <button type="submit" value="Sign In" class="btn btn-outline-danger">Sign In</button> </a>

</div>  


</body>
</html>