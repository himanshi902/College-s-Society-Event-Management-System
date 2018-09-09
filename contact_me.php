
<?php 
require 'config/config.php';
   $name="";
   $email="";
   $phone="";
   $message="";
  
   if(isset($_POST['sendmessage']))
   {
   	$name= strip_tags($_POST['name']);
   	$name=str_replace(' ', '', $name);
   	$name=ucfirst(strtolower($name));
   	$_SESSION['name']= $name;

   	$email= strip_tags($_POST['email']);
   	$email=str_replace(' ','', $email);
   		$_SESSION['email']= $email;

      $message=$_POST['message'];
      $phone=$_POST['phone'];
   
   
         
   	  $query=mysqli_query ($con,"INSERT INTO contactme VALUES ('','$name','$email','$phone','$message')");
   	$_SESSION['name']="";
   	$_SESSION['email']="";
   	$_SESSION['phone']="";
   	$_SESSION['message']="";

   	
   
         header("Location: index.html");
}

  
 ?>