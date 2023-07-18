<?php
if(isset($_POST['submit']))
{
	//verify if there is empty fild on the form
	if(empty($_POST['name']) || empty($_POST['email']) || empty( $_POST['password']))
	{
		die("fill above fields");
	}
		//check the password if is strong
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
	if($_POST['password'] !==$_POST['password'])
	{
		die("passwordnot match");
	}
	if (! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
{
    die("wrong email please");
}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$psd=password_hash($_POST['password'], PASSWORD_DEFAULT);

	//insert into database please

	$sql="INSERT INTO customers (Names,Email,Password)
	VALUES('$name','$email','$psd')";
	//verify if email already exist
$query="SELECT * FROM customers WHERE Email='$email' LIMIT 1";
$data=mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0){
		die("email have match");

}


	//matching the record with database please
	if(mysqli_query($conn,$sql))
	{
		echo"welcome".$name;
	}
}
