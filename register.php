
<?php 
   require 'config/config.php';
   require 'includes/form_handler/register_handler.php';
   require 'includes/form_handler/login_handler.php';


 ?>
<html>
<head>
	<title>hehe</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php 
       
       if(isset($_POST['register']))
       {
       	echo '
           <script>
           $(document).ready(function(){
           	$("#first").hide();
           	$("#second").show();
           });


           </script>

       	';
       }



	 ?>
	<div class="wrapper">
		<div class="login_box">
			<div class="login_header">
				<h1>*MANISOC*</h1>
					 Login or Sign up below!
			</div>

                   <div id="first">
					<form action="register.php" method="POST">
						
				   <input type="text" name="log_email" placeholder="Email Address" value="<?php 
				                        if(isset($_SESSION['log_email']))
				                            echo $_SESSION['log_email']; 
				                       ?>" required><br><br>
				   <input type="password" name="log_password" placeholder="Password"><br><br>
				         <input type="submit" name="login" value="Login"><br>
				         <?php  	if(in_array("Email or Password was incorrect<br>", $error_array)) echo "Email or Password was incorrect<br>"; ?>
				         <a href="#" id="signup" class="signup">Need an account? Register here!</a>


					</form>
				</div>


                 <div id="second">
				<form action="register.php" method="POST">
				    <input type="text" name="fname" placeholder="First Name" value="<?php 
				                        if(isset($_SESSION['fname']))
				                            echo $_SESSION['fname']; 
				                       ?>" required ><br><br>
				                  <?php if(in_array("Your first name must be in between 2 and 25 characters<br>", $error_array)) echo "Your first name must be in between 2 and 25 characters<br>"; ?>
			    <input type="text" name="mname" placeholder="Middle Name" value="<?php 
				                        if(isset($_SESSION['mname']))
				                            echo $_SESSION['mname']; 
				                       ?>" ><br><br>

			    <input type="text" name="lname" placeholder="last Name" value="<?php 
				                        if(isset($_SESSION['lname']))
				                            echo $_SESSION['lname']; 
				                       ?>" required ><br><br>
				                  <?php if(in_array("Your last name must be in between 2 and 25 characters<br>", $error_array)) echo "Your last name must be in between 2 and 25 characters<br>"; ?>
				       <input type="email" name="email1" placeholder="Email" value="<?php 
				                        if(isset($_SESSION['email1']))
				                            echo $_SESSION['email1']; 
				                       ?>" required ><br><br>
				                  
				   <input type="email" name="email2" placeholder="Confirm Email" value="<?php 
				                        if(isset($_SESSION['email2']))
				                            echo $_SESSION['email2']; 
				                       ?>" required ><br><br>
				                   <?php if(in_array("EMAIL IS ALREADY IN USE!!<br>", $error_array)) echo "EMAIL IS ALREADY IN USE!!<br>"; 
				                         else if(in_array("format of email is not valid<br>", $error_array)) echo "format of email is not valid<br>"; 
				                           else if(in_array("EMAILS DON'T MATCH<br>", $error_array)) echo "EMAILS DON'T MATCH<br>"; ?>

				        <input type="password" name="password1" placeholder="Password" required ><br><br>
				<input type="password" name="password2" placeholder="confirm password" required ><br><br>
				                   <?php if(in_array(" Your password dont match<br>", $error_array)) echo " Your password dont match<br>"; 
				                         else if(in_array("your password can only contain alphabetes and numbers<br>", $error_array)) echo "your password can only contain alphabetes and numbers<br>"; 
				                           else if(in_array("the length of the password must be in between 2 and 30<br>", $error_array)) echo "the length of the password must be in between 2 and 30<br>"; ?>
				                          <input type="submit" name="register" value="Register"><br>
				           <?php  if(in_array("<span style='color:#14C800'>you have successfully registered for this site!! </span> <br>", $error_array)) echo "<span style='color:#14C800'>you have successfully registered for this site!! </span> <br>"; ?>
				                             <a href="#" id="login" class="login">Already have an account? Log in here!</a>
				                      </form>
				     </div>

          </div>
      </div>


</body>
</html>