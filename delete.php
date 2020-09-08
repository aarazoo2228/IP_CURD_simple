<?php
	include 'db/connection.php';
   $id=isset($_GET['id'])?$id=$_GET['id']:"";
   

	if(isset($id))
	{
	
	$sql="delete from winners where id=$id";

	
		$result=$db->query($sql);
	}
	header("location:home.php");
		
		

?>