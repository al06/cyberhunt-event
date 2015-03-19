<?php
session_start();
if(isset($_SESSION['emailid'])){
include("connect.php");
 $email=$_SESSION['emailid'];
 $server = $_SERVER['PHP_SELF'];

$session_query=mysql_query("select * from Signup where Email='$email'")or die(mysql_error());
 $rows=mysql_fetch_array($session_query);
 
		$level2=$rows['level'];
		$_SESSION['level']=$level2;			
		$str="/event cyberhunt/cyberhunt/level".$level2.".php";
		if($str!=$server){
			$str2="location: level".$level2.".php";
			
			
	
?>
<script type="text/javascript">	
    
	window.location="<?php echo $str2; ?>";
  
  </script>  
<?php	
		}
}
else{
?>
<script type="text/javascript">	
   
	window.location="index.php";
  
  </script>
<?php

		
}
	
?>
