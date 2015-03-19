<?php
session_start();
include('connect.php');


$emailid=$_SESSION['emailid'];



session_destroy();
header("location:index.php");

?>
