<?php
session_start();

include("connect.php");
$uid=$_GET["emailid"];
$pas=$_GET["pass"];
$_SESSION["emailid"]=$uid;
$result=mysql_query("select * from Signup where Email='$uid' and password='$pas'");
$row = mysql_fetch_array($result);
$level = $row['level'];
if( $row>0 ) {
		$_SESSION['level']=$level;
		$str="location: level".$level.".php";
		header($str);
	}	
else{ ?>
	<script>
		alert("Access Denied");
	 	window.location = 'index.php';							
	</script>
    <?php
			
}
 

?>
