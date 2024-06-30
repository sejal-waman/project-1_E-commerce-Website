<!DOCTYPE html> 
<html> 

<head> 
	<title>Registration Page</title> 
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
		<h1>Registration Page</h1> 
		<form id="registrationForm" method="post"
			action="register_insert">
			<label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <span id="usernameError" style="color:red;"></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" style="color:red;"></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span id="passwordError" style="color:red;"></span>
        <br><br>

       <input type="submit"
				value="register"> 
       </form> 

		<br><br> 
		<p> Already have an account? 
			<a href="login">Click Here</a> 
		</p> 
	 </div> 
	<script src="RegisterValidate.js"></script>
</body> 
</html>
