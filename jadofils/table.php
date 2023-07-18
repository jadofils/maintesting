<?php
$conn= mysqli_connect('localhost','root','','jdfils');

if(!$conn)
{ 
die("failed to connect::".mysqli_connect_error());
}
else{
    // create database
    $sql = "CREATE TABLE customers(id int(11) primary key AUTO_INCREMENT,names text(20),
    email varchar(35) not null,password varchar(255),date timestamp)";
    if(!mysqli_query($conn,$sql))
    {
die("failed to create database::" .mysqli_connect_error());
    }
    else{
        echo"ok,its well";
    }
}
