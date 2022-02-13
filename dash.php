<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EnsaT : Dashboard</title>
</head>
<body>
    
</body>
</html>



<?php
include"connect1.php";
session_start();
  
$name = $_SESSION['username'];


$sql = "SELECT `Prénom`, `Nom`, `Numéro`, `Email` FROM infos WHERE Prénom = '$name'";
$result = mysqli_query($conn,$sql);
$result = $conn->query($sql) or die($conn->error);
$sql2 = "SELECT `filename`FROM pics where name= '$name';";
    $result2 = mysqli_query($conn,$sql2);

?>
<h1><?php echo "Bienvenue ",$name ?></h1>
<br>
        <table>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {$data = mysqli_fetch_array($result2)
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Prénom'];?></td>
                <td><?php echo $rows['Nom'];?></td>
                <td><?php echo $rows['Numéro'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><img src="<?php echo $data['filename']; ?>"height="200" width="200"></td>
                
                
            </tr>
            <?php
                }
             ?>
        </table>
<br>
        <center><a href="all_members.php" > <input type="submit" class="btn btn-primary" value="All Members"> </a>
        <a href="Home.php" > <input type="submit" class="btn btn-primary" value="Log Out"> </a>