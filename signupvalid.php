<?php
	session_start();
	header('location:login.php');

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mydatabase');


	$username=$_POST['user'];
	$password=$_POST['pass'];
	$confirmpassword=$_POST['conpass'];
	$email=$_POST['email'];
	$phon=$_POST['MobileNumber'];
	

	$q="select * from mydata where username='$username' && password='$password'";
	$result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);
	if($num==1){
		
	}else{
		$qy="insert into mydata(username,password,confirmpassword,email,phone)values('$username','$password','$confirmpassword','$email','$phon')";

		mysqli_query($con,$qy);
	}

?>