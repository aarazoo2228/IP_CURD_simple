<?php
     require 'db/connection.php';

     $id='';
     $category='';
     $rank='';
     $winnername='';
     $passno='';
     $dates='';
     $status='';

     if(isset($_GET['id'])){
          $id=$_GET['id'];
          $sql="select * from Winners where id=$id";
          $result=$db->query($sql);
          $row=$result->fetch_assoc();
          $id=$row['id'];
          $category=$row['category'];
          $rank=$row['rank'];
          $winnername=$row['winnername'];
          $passno=$row['passno'];
          $dates=$row['date'];
          $status=$row['status'];

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Winner data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		color: #999;
		background: #f3f3f3;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		border-color: #eee;
        min-height: 41px;
		box-shadow: none !important;
	}
    .form-control:focus {
		border-color: #5cd3b4;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 500px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form h2 {
		color: #333;
        margin: 0 0 30px 0;
		display: inline-block;
		padding: 0 30px 10px 0;
		border-bottom: 3px solid #5cd3b4;
    }
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"] {
		margin-top: 2px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #5cd3b4;
		border: none;
		margin-top: 20px;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #41cba9;
        outline: none !important;
	}
    .signup-form a {
		color: #5cd3b4;
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
    .signup-form form a {
		color: #5cd3b4;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="save.php" method="post" class="form-horizontal">
    	<input type="hidden" name="id" value="<?=$id;?>">
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Winners Details</h2>
		</div>		
        <div class="form-group">
			<label class="control-label col-xs-4">category</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="category" value="<?=$category;?>" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Rank</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="rank" value="<?=$rank;?>" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Winner Name</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="winnername" value="<?=$winnername;?>" required="required">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">Pass No</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="passno" value="<?=$passno;?>" required="required">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">Date</label>
			<div class="col-xs-8">
                <input type="date" class="form-control" name="dates" value="<?=$dates;?>" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">status</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="status" value="<?=$status;?>" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<div class="col-xs-8 col-xs-offset-4">
				<button type="submit" class="btn btn-primary btn-lg">Submit</button>
			</div>  
		</div>		      
    </form>
	
</div>
</body>
</html>                            