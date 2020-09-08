<!DOCTYPE html>
<html>
<head>
	<title>User  SignUp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body  >

   
	<div class="container"><br><br>
		<h1 class="text-success text-center">Registration Form </h1>
		<div class="col-lg-8 m-auto d-block">
			<form action="signupvalid.php" onsubmit="return validation()" class="bg-light" method="post">
				<div class="form-group">
					<label class="text-dark">Username :</label>
					<input type="text" name="user" class="form-control" id="user" autocomplete="off">
					<span id="username" class="text-danger font-weight-bold"></span>
				</div>


				<div class="form-group">
					<label class="text-dark">Password :</label>
					<input type="password" name="pass" class="form-control" id="pass" autocomplete="off">
					<span id="passwords" class="text-danger font-weight-bold"></span>

				</div>

				<div class="form-group">
					<label class="text-dark">Confirm Password :</label>
					<input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
					<span id="confrmpass" class="text-danger font-weight-bold"></span>
				</div>
				
				<div class="form-group">
					<label class="text-dark">Email Id :</label>
					<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
					<span id="emailis" class="text-danger font-weight-bold"></span>
				</div>

				<div class="form-group">
					<label class="text-dark">Phone No :</label>
					<input type="text" name="MobileNumber" class="form-control" id="MobileNumber" autocomplete="off">
					<span id="mobileno" class="text-danger font-weight-bold"></span>
				</div>

				<input type="submit" name="submit" value="submit" class="btn btn-success">			
			</form>
		
	</div>
	</div>

	<script type="text/javascript">
		function validation(){
			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var email = document.getElementById('emails').value;
			var mobileNumber = document.getElementById('MobileNumber').value;
			

			 if(user == ""){
			 	document.getElementById('username').innerHTML = "**please,fill the Username";
			 	return false;
			 }
			 if((user.length <= 2) || (user.length > 20)){
			 	document.getElementById('username').innerHTML = "**please,Username mustbe between 2 & 20";
			 	return false;
			 }
			 if(!isNaN(user)){
			 	document.getElementById('username').innerHTML = "**Only characters are required";
			 	return false;
			 }	




			  if(pass == ""){
			 	document.getElementById('passwords').innerHTML = "**please,fill the Password";
			 	return false;
			 }
			 if((pass.length <= 5) || (pass.length > 20)){
			 	document.getElementById('passwords').innerHTML = "**please,Password length must be  between 5 to 20";
			 	return false;
			 }	


			 

			if(confirmpass == ""){
			 	document.getElementById('confrmpass').innerHTML = "**please,fill the Confirm Password";
			 	return false;
			 }
			 if(pass != confirmpass){
			 	document.getElementById('passwords').innerHTML = "Password are not match";
			 	return false;
			 }




			  if(email == ""){
			 	document.getElementById('emailis').innerHTML = "**please,fill the Email";
			 	return false;
			 }
			 if(email.indexOf('@') <= 0){
			 	document.getElementById('emailis').innerHTML =
			 	" ** @ position is invalid";
			 	return false;
			 }
			 if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
			 	  			 	document.getElementById('emailis').innerHTML =
			 	" ** (.3434) position is invalid";
			 	return false;
			 }





			  if(mobileNumber == ""){
			 	document.getElementById('mobileno').innerHTML = "**please,fill the Phone No";
			 	return false;
			 }
			  if(isNaN(mobileNumber)){
			 	document.getElementById('mobileno').innerHTML = "**Only Numbers are required";
			 	return false;
			 }
			 if(mobileNumber.length != 10){
			 	document.getElementById('mobileno').innerHTML = " Mobile no must be 10 digit";
			 	    return false;
			 }	
			

		}

		
	</script>


</body>



</html>