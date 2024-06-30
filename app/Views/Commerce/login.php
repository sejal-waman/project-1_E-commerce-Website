<!DOCTYPE html> 
<html> 

<head> 
	<title>Login Page</title> 
	<link rel="stylesheet"
		type="text/css"
		href="<?php echo base_url('css/register.css');?>">
         <style>
            body { 
    background-image: url("<?php echo base_url('images/bg1.jpg');?>");
    
    height: 100%;
     /* Position and center the image to scale nicely on all screens */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    } 
        </style> 
</head> 

<body> 
	<div class="container"> 
		<h1>Login Page</h1> 
		<form id="loginForm" method="post"
			action="check_login_credentials">
			<label for="username">Username:</label> 
			<input type="text"
				id="username"
				name="username" required> 

			<label for="password">Password:</label> 
			<input type="password"
				id="password"
				name="password" required> 

			<input type="submit"
				value="Login"> 
		</form> 
		<br><br> 
		<p> Does not have an account? 
			<a href="register">Click Here</a> 
		</p> 
	</div> 
	<script src="LoginValidate.js"></script>
</body> 

</html>
