<?php
include('connection.php');
 $id=$_GET['id'];
 $select="SELECT * FROM customers WHERE id='$id'";
 $data=mysqli_query($conn,$select);
 $row=mysqli_fetch_assoc($data);
?>
<html>
<title>update here</title>
<head>
	<style type="text/css">
		.input{
			background-color: black;
			color: #ff7200;
			font-family: sans-serif;
			font-weight: 45px;
			font-size: x-large;
			border-radius: 6px;
						border: green outset;



		}
		.input:hover{
			background-color: white;
			color: black;
			outline: dashed;
			border-top: none;
	border-left: none;
	border-bottom: none;
	border-right: none;

		}
		.input:focus{
			outline-style: groove;
	border-top: none;
	border-left: none;
	border-bottom: none;
	border-right: none;
		}
		.btn{

			background-color: black;
			color: indigo;
			font-family: sans-serif;
			font-weight: 45px;
			font-size: x-large;
			border-radius: 6px;

		}
.btn a{
	text-decoration: none;
				color: indigo;

}
.btn a:hover{
color: white;}
.btn:hover{
	color: white;
	}
	.p{
			color: indigo;
			font-family: sans-serif;
			font-weight: 45px;
			font-size: x-large
	}
	</style>

</head>
   <form action="" method="POST">

<p>welcome to updation page<p>
    
   <p class="p"> names:<p><br><input class="input" value="<?php echo $row['names']; ?>" type="text" name="name"><br>
     <p class="p">   email:</p><br><input class="input" value="<?php echo $row['email']; ?>" type="text" name="email"><br>

    <p class="p">password:</p><br><input class="input" value="<?php echo $row['password']; ?>" type="password" name="password"><br>
<br><button class="btn" name="update">update</button>
<button class="btn"><a href="registration.php">back</a></button>

   </form> 
<?php
if(isset($_POST['update']))
{
    $name=$_POST['name'];
        $email=$_POST['email'];

    $psd=$_POST['password'];

    $sql="UPDATE customers SET names='$name',email='$email',password='$psd' WHERE id='$id'";
    if(mysqli_query($conn,$sql))
    {
        echo"success to update the record->".$name;
    }
    else{
        echo"error:".mysqli_connect_error();
    }
}

?>