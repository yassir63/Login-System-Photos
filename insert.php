<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EnsaT : Infos !</title>
</head>
<body>
<?php

include "connect1.php";




if(isset($_POST['first'])&&isset($_POST['last'])){
  $first = $_POST['first'];
  $last = $_POST['last'];

  $sql = "INSERT INTO test VALUES ('$first','$last');";
$result = mysqli_query($conn,$sql);
}


?>

<p class="d-flex justify-content-center" style="font-size:180px" > EnsaT : Infos </p>
<div class="d-flex justify-content-center">
<form method = "post" action = "data.php">
<center>
  <div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">First Name :</span>
  <input type="text" class="form-control" name="prenom" placeholder="First Name" aria-label="First Name == Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Last Name :</span>
  <input type="text" class="form-control" name="nom" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Number :</span>
  <input type="text" class="form-control" name="number" placeholder="Number" aria-label="Number" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">E-mail :</span>
  <input type="text" class="form-control" name="email" placeholder="E-mail" aria-label="E_mail" aria-describedby="basic-addon1">
</div>

<input class="btn btn-primary" type="submit" value="Submit">


</form>


<a href="Home.php" > <input type="submit" class="btn btn-primary" value="Go Back"> </a>
</div>  





</body>
</html>


</body>
</html>

