<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ensat : All Members</title>
</head>
<body>


<?php
    include "connect1.php";


$sql1 = "SELECT * FROM infos ;";
    $result1 = mysqli_query($conn,$sql1);
$sql2 = "SELECT * FROM pics ;";
    $result2 = mysqli_query($conn,$sql2);
?>

<h1>All Members !</h1>
<br>
<center><a href="insert.php"><button class="btn btn-primary" type="submit"> Add Student </button></a></center>
<br>
        <table>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result1->fetch_assoc())
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
        <div>
            <br>
        <center><a href="Home.php" > <input type="submit" class="btn btn-primary" value="Log Out"> </a>
        <a href="dash.php" > <input type="submit" class="btn btn-primary" value="My info"> </a>
            </div>
        
        
</body>
</html>