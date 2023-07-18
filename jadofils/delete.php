<?php
include('connection.php');
$id=$_GET['id'];
$delete="DELETE FROM  customers WHERE id='$id'";
if(mysqli_query($conn,$delete))
{
    //echo"one record deleted";
    header('location:display.php');
}
else{
    echo"error:" .mysqli_connect_error();
}