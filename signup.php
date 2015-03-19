<?php
session_start();
$fstnam=$_GET["fstnam"];

 $lstnam=$_GET["lstnam"];
 $clgnam=$_GET["clgnam"];
 $dptnam=$_GET["dptnam"];
 $yr=$_GET["yr"];
 $phn=$_GET["phn"];
 $pwd=$_GET["pwd1"];
 $email=$_GET["em"];
 
 include_once("connect.php");
$time = time();
 $result="insert into Signup(Firstname,Lastname,Email,phone,password,Collgname,Deptname,Year,timer)
  values('$fstnam','$lstnam','$email','$phn','$pwd','$clgnam','$dptnam','$yr','$time')";
  
  if(mysql_query($result)==true)
   {
	   echo "done";
   }
  

   mysql_close($con);
 
 header("Location: index.php");	

?>
