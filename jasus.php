<?php
include("connect.php");
$uid=$_GET["em"];
$query="select * from Signup where Email='$uid'";
$result=mysql_query($query,$con);
$flag=0;

while($row=mysql_fetch_array($result))
{
	$flag=1;
}

if($flag==1)
echo"already exist";
else
echo "valid id";

?>
