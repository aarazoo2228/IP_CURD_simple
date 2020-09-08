<?php
	require "db/connection.php";

	$id=$_POST['id'];
	$category=$_POST['category'];
	$rank=$_POST['rank'];
	$winnername=$_POST['winnername'];
	$passno=$_POST['passno'];
	$date=$_POST['dates'];
	$status=$_POST['status'];

	 if($id!=0){
	 	$sql="UPDATE `winners` SET category='$category',rank='$rank',winnername='$winnername',passno='$passno',date='$date',status='$status' WHERE id=$id";

	 } 
	 else{
	$sql="insert into winners(category,rank,winnername,passno,date,status) values('$category','$rank','$winnername','$passno','$date','$status')";

}

	$result= $db->query($sql);
	header("location:home.php");



?>