<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EnsaT : Login !</title>
    
</head>
<body>

    
<p class="d-flex justify-content-center" style="font-size:180px"> EnsaT Login </p>
<div class="d-flex justify-content-center">
<form method = "post" action = "store.php">
<center>
  <div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Username :</span>
  <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Password :</span>
  <input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
</div>


<input class="btn btn-primary" type="submit" value="Submit">


</form>

<div style="margin:10px">
<p class="d-flex justify-content-center">If you haven't signed up ! Please do !<div><a class="link" href="signup.php">Sign Up</a></div></p>
</div>
</div>  



</body>
</html>  