
<?php 
   require 'config/config.php';
   require 'includes/form_handler/events_handler.php';
 ?>
<html>
<head>
	<title>register for event</title>
	<link rel="stylesheet" type="text/css" href="assets/css/events_style.css">

</head>
<body>
	<div class="wrapper">
		<div class="login_box">
			<div class="login_header">
				<h1>*MANISOC*</h1>
					 register for the event here!!
			</div>
                 <div id="first">
				<form action="events.php" method="POST">
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
				 <input type="email" name="email" placeholder="Email" value="<?php 
				                        if(isset($_SESSION['email']))
				                            echo $_SESSION['email']; 
				                       ?>" required ><br><br>
				 <input type="text" name="college" placeholder="College Name" value="<?php 
				                        if(isset($_SESSION['college']))
				                            echo $_SESSION['college']; 
				                       ?>" ><br><br>
				 <input type="text" name="cn" placeholder="Contact Number" value="<?php 
				                        if(isset($_SESSION['cn']))
				                            echo $_SESSION['cn']; 
				                       ?>" required><br><br>
	             <input type="number" name="year" placeholder="Year Of Study" value="<?php 
				                        if(isset($_SESSION['year']))
				                            echo $_SESSION['year']; 
				                       ?>" required><br><br>

				    <input type="submit" name="register" value="Register"><br>
				           <?php  if(in_array("<span style='color:#14C800'>you have successfully registered for this site!! </span> <br>", $error_array)) echo "<span style='color:#14C800'>you have successfully registered for this site!! </span> <br>"; ?>
				                           
				                      </form>
				     </div>

          </div>
      </div>


</body>
</html>