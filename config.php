<?php 
ob_start();
session_start();
   $timezone= date_default_timezone_set("Europe/London");
  $con=mysqli_connect("localhost","root","","college");
  if(mysqli_connect_errno())
  {
  	echo "connection failed".mysqli_connect_errno();
  }
  
  ?>