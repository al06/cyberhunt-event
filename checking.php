
<?php

include ("connect.php");

 session_start(); 
 $ans=$_POST['ans'];
$ans=md5($ans);
 $level=$_POST['level'];
 $email=$_POST['email'];
$data=mysql_query("select * from levels where `level`='$level' ");
while($row=mysql_fetch_array($data))
{
$answer=$row['answer'];
}
//echo $answer;

if($answer==$ans){
	$level=$level+1;
	
	$_SESSION['level']=$level;
	$time = time();
	mysql_query("update Signup SET  level = $level, timer='$time' WHERE  Email =  '$email'");	
	$_SESSION['troll']=0;
	$str = "level".$level.".php";
	?>
	<script type="text/javascript">	
    	
	window.location= "<?php echo $str; ?>";
    
    
  </script>
  <?php
	
}
else
{  
$_SESSION['troll']=1;
$str = "level".$level.".php";
?>
	<script type="text/javascript">	
    	
	window.location= "<?php echo $str; ?>";
    
    
  </script>
  <?php
}
?>
