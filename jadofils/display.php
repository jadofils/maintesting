<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>the list of customer have signed up</p>
    <br><br><button><a href="registration.php">home</a></button><br><br>
    <table border="2px" cellpading="10px" cellspacing="0px">
<tr><th>id</th><th>name</th><th>email</th><th>password</th><th>date</th><th>actions</th></tr>

<?php

$query="SELECT * FROM customers";
$data=mysqli_query($conn,$query);
$result=mysqli_num_rows($data);
if($result){
while($row=mysqli_fetch_assoc($data))
{
    ?>
        <tr>
            <td> <?php echo $row['id'];?></td>
        <td> <?php echo $row['names'];?></td>
        <td> <?php echo $row['email'];?></td>
                <td> <?php echo $row['password'];?></td>
                                <td> <?php echo $row['date'];?></td>



        <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>

    

</tr>
<?php
}
}
?>

</table>
</body>
</html>

