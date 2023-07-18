<?php
$conn= mysqli_connect('localhost','root','','');

if(!$conn)
{ 
die("failed to connect::".mysqli_connect_errno());
}
else{
    // create database
    $sql = "CREATE DATABASE JDFILS";
    if(!mysqli_query($conn,$sql))
    {
        
die("failed to create database::" .mysqli_connect_errno());
    }
    else{
        echo"ok,its well";
    }
}
