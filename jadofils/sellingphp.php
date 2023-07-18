<?php
if(isset($_POST["button"]))
{
    //if(empty($_POST["name"])|| empty($_POST["email"])|| empty($_POST["address"]) ||
   // empty($_POST["mobile"]) || empty($_POST["password"]))
   // {
     //   die("all above fields not null!");
   // }
    	if (! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
        die("wrong email");
    }
    if(!preg_match("/[a-z]/i", $_POST['password']))
	{
		die("not strong password");
	}
		if(!preg_match("/[A-Z]/i", $_POST['password']))
	{
		die("not strong password");
	}
		if(!preg_match("/[0-9]/", $_POST['password']))
	{
		die("not strong password");
	}

	if(strlen($_POST['password'])<3)
	{
		die("password length is fake");
	}
    if($_POST["password"] !==$_POST["passwordrepeat"])
    {
        die("password not match!");
    }
    //insert into database
    $name=$_POST['name'];
	$email=$_POST['email'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
	$psd=password_hash($_POST['password'], PASSWORD_DEFAULT);
$insert="INSERT INTO seller(names,email,address,mobile,password) VALUES('$name','$email','$address','$mobile','$psd')";


	$psd=password_hash($_POST['password'], PASSWORD_DEFAULT);

	if(!mysqli_query($conn,$insert))
	{
		die("failed::" .mysqli_connect_error());
	}
		//verify if email already exist
$select="SELECT * FROM seller WHERE email='$email' LIMIT 1";
$data=mysqli_query($conn,$select);
if(mysqli_num_rows($data)>0){
		die("email have match");

}
	else{
		echo"welcome:".$name;
	}
}
