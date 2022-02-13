<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EnsaT : Liste Des étudiants</title>
</head>
<body>
    <?php      
    session_start();
    include('connect1.php');  
     $username = strtolower($_POST['username']);  
     $password = $_POST['password'];  
    $_SESSION['username'] = $username;
$_SESSION['password'] = $password;
      
        //to prevent from mysqli injection  
        
        $_SESSION['username'] = stripcslashes($_SESSION['username']);  
        $_SESSION['password'] = stripcslashes($_SESSION['password']);  
        $_SESSION['username'] = mysqli_real_escape_string($conn, $_SESSION['username']);  
        $_SESSION['password'] = mysqli_real_escape_string($conn, $_SESSION['password']);  
      $username = $_SESSION['username'];
      $password = $_SESSION['password'];
        $sql = "select * from test where name = '$username' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       
        if($count != 0){  
            echo "<h1><center> Login successful </center></h1>";
        
            ?>
        
        <div  class="d-flex justify-content-center" >


            <a  href="all_members.php"> <button type="submit" value="All Members" class="btn btn-outline-warning">All Members</button>  </a>
            <a  href="Home.php"> <button type="submit" value="Log Out" class="btn btn-outline-danger">Log Out</button> </a>
            <a  href="dash.php"> <button type="submit" value="All Members" class="btn btn-outline-warning">My info</button>  </a>
            </div>  

            <?php
        }else{  
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<h1> Login failed. Invalid username or password.</h1>"; 
            ?> 
            <br>
            <br>
            <br>
            <center><a href="Home.php" > <input type="submit" class="btn btn-primary" value="Go Back"> </a>
            <?php 
        }
        ?> 





</body>
</html>

