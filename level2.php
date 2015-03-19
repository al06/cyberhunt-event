<?php include("session.php");
?>
<html>
<head>
<script src="jquery-1.8.2.min.js"></script>



<script type="text/javascript">
setTimeout (function(){
	$('.imgget').fadeOut('fast');
},12000);

function leaderboard()
{
	$('#table').slideDown(1000);
	$('#overall').show();
	$('#contact').hide(1000);	
}

function rules1()
{
	$('#rules').slideDown(1000);
	$('#overall').show();	
}
function logout()
{
	 window.open("logout.php","_self");
}

</script>
<style>

.shadow {
  -moz-box-shadow:    3px 3px 4px 4px #666666;
  -webkit-box-shadow: 3px 3px 4px 4px #666666;
  box-shadow:         3px 3px 4px 4px #666666;
}
.shadow1 {
	-webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;

}
#ques
{
	float:left; 
	margin:100px 0px 0px 490px;
	 
border:1px solid #000;	

 	
	
	}
#ques:hover{
	-webkit-box-shadow: 0 8px 6px -6px #FF3;
	
	}
.clos
{
	height:25px;
    width:30px;
	background-image:url(images/close-cancel-128.png); 
	float:right;
	margin:10px 10px 0px 0px; 
	background-repeat:no-repeat; 
	cursor:pointer;
}
#box
{   height: 90px;
  
    font-size: 15px;
    font-style:normal;
    color:#B51A1A;
    text-align: center;
    margin-top: 10px;
    margin-left: 5px;
	font-family:Arial, Helvetica, sans-serif;
}
.imgget{
	
	height: 120px;
width: 17%;

/*border:1px solid #000;*/
position: absolute;
top: 67%;
left: 41%;	
z-index:10;
	}
*{padding:0px; margin:0px;}
.txt{
	border-radius:6px;
	height:30px;
	border-color:#3CF;
	}
.page
{   position:fixed;
    margin-left:500px;
	display:none; 
	background-color:#FFF;
	 -moz-box-shadow:    3px 3px 4px 4px #666666;
  -webkit-box-shadow: 3px 3px 4px 4px #666666;
  box-shadow:         3px 3px 4px 4px #666666;
}
#overall
{
	background-image:url(images/homepageTexture.jpg);
	
}
.bttn:hover{zoom:1.1}
li{ list-style:none;
	}
	
	a{
		text-decoration:none;
		color:#B51A1A;
		}
</style>
</head>
<body>

<style>
 body {
	background: url(images/levelback.png);
  position: relative; background-repeat:no-repeat;  background-size: 100% auto;}
      </style>

<div>
<div id="overall"  style="opacity:0.9; width:100%; height:100%; display:none; position:fixed; background-repeat:repeat;  background-size:auto;">
</div>
      
      <div id="table"  class="page" style="display:none; background-color:#C5C5C5; height:580px;margin:2% 00px 0px 420px;  
        	width:600px; position:fixed; float:left; overflow:scroll">  
           <div class="clos" onClick="$('#table').hide(1000);$('#contact').slideDown(1000);$('#overall').fadeOut(1000);">
           </div>
           <div id="leaderboard" class="" style="font-family: Electrolize, cursive; font-weight:bold; text-align:justify; margin-left:1%;           margin-right:1%" >
           <?php
           include("connect.php"); 
           $query="select * from Signup ORDER BY level DESC, timer ASC;";
           $result=mysql_query($query);
		   $Rank=0;
		   echo "Your Level: ".$_SESSION['level'];
           echo "<table border=2 width='500px' align='center' style='margin: 50px 0px 0px 50px; '><tr><th>Rank<th>FirstName<th>           CollegeName<th>Level";
           while($row=mysql_fetch_array($result))
           {
			   $Rank++;
	        extract($row);
			if($_SESSION['emailid']==$row["Email"]){
				echo "<tr style='color:RED'><td>".$Rank.
	        	"<td>".$row["Firstname"]." ".$row["Lastname"].
	        	"<td>".$row["Collgname"].
	        	"<td>".$row["level"] ;
            
			}
			else{
	        echo "<tr><td>".$Rank.
	        "<td>".$row["Firstname"]." ".$row["Lastname"].
	        "<td>".$row["Collgname"].
	        "<td>".$row["level"] ;
            }
		   }
		echo "</table>";
            ?>

          </div>
    </div>   
  





       <div id="rules"  class="page" style="display:none; background-color:#C5C5C5; height:580px;margin:2% 00px 0px 420px;  
        	width:600px; position:fixed; float:left; overflow:scroll">  
           <div class="clos" onClick="$('#rules').hide(1000);$('#contact').slideDown(1000);$('#overall').fadeOut(1000);">
           </div>
           <div class="rules" style="font-family: Electrolize, cursive; font-weight:bold; text-align:justify; margin-left:1%; margin-right:1%" >
            <h2 align="center" style="color:#D70000"> RULES</h2></br> 
   <p>1. You will be automatically removed from the contest if your user name is found offensive (in general or any scallywag in particular).</p></br>
                                                                <p>2. Be a true hunter! Don't wander around sharing answers to maintain the enjoyment and level of the HUNT. You will be DQed from the hunt if found doing so!</p></br>
							
								<p>3. The hunt will continue till February 28,2014 evening and may extend if need be.</p></br>
								<p>4. You can use only lower case ALPHABETS in answer i.e. without spaces,numbers or special characters. For e.g. to write Cyber Hunt 15 you will write: cyberhuntonefive.</p></br>
                                                                <p>5. You can ask any number of queries on the forum but if you post answers there(intentionally) you will be DQed(even though your post will be moderated).</p></br>
                                                                <p>6. You can search for hints in the source code, url, title of page, mouse hover etc. All hints might lead you to the answer though.</p></br>
                                                                <p>7. To download the image, drag it from the page to you desktop(or anywhere else)</p>
                                          </br>                      
                                                                <p>8. Any attempt made to deface the website or divertin' extra load will immidiately lead to disqualification and a suitable action shall be taken in addition to it.</p></br>
                                                                <p>9. In case of any dispute the decision of the Event Head shall be deemed as final.
What the heck are you waitin for!!!!! Go!! Go!! Go!!</p></br>
<p>10.For any hints, discussions or more keep visitin the forum at <a href="https://www.facebook.com/cyberhunt15/app_202980683107053" type="link">Q&As</a>       </p>
     </div>
   </div>

   
   <div id="top" class="" style=" height:30px; width:100%; background-color:#FFF;" >
     <div id="box" onClick="rules1();" style="  float:left; margin:7px 00px 0px 50px;  height:40px; width:100px;">RULES
     </div>
     <div id="box"  onClick="leaderboard();" style="  float:left; margin:7px 00px 0px 50px; height:40px; width:120px;">LEADERBOARD
     </div>
     
     <div id="box" style=" float:left; margin:7px 00px 0px 50px;  height:40px; width:200px;"><a href="https://www.facebook.com/cyberhunt15/app_202980683107053" type="link">DISCUSSION FORUM</a>
     </div>
     
     <div id="fb"  class="" style=" height:30px; float:right; width:100px; margin:3px 50px 0px 0px; ">
        <div class="shadow1" style="float:right;"> 
           <a href="https://www.facebook.com/cyberhunt15"><img src="images/like.png" ></a>
        </div>
     </div>
     <div id="box" onClick="logout();"  style=" float:right; margin:7px 00px 0px 420px;  height:40px; width:100px;">SIGNOUT 
     </div>
     <div id="ques" class="shadow1">
     
     <img src="images/2.jpg" style=" height:200px;
	  width:350px;">
     
     
     
     </div>
     <div style="margin:20px 0px 0px 500px; float:left; height:25px; width:250px;">
      <?php
	 $emailid=$_SESSION['emailid'];	
     $level=$_SESSION['level'];
	 
	 ?>	           
     <form id="frm" method="post" action="checking.php">
      <table border="0" >
    <tr><td> <input type="text"  style="width:250px" placeholder="Your Answer"  name="ans" class="txt"></td>
            <input type="hidden"  name="email" value="<?php echo $_SESSION['emailid'] ;?>" >
         <input type="hidden"  name="level" value="<?php echo $_SESSION['level'] ;?>" >
            
            <td><input type="submit" 
    style=" border-radius:7px; height:30px; color:#FFF; font-weight:bold; font-size:18px;  background-color:#09F; width:80;"  id="btn"  
    class="txt" name="submit">
     
     </table>
     
     </form>
    
    
     
  
   <?php   
	
    if(isset($_SESSION['troll'])){
    	if($_SESSION['troll']==1){
			$_SESSION['troll']=0;
			$trollimage = time()%23;
			
	?>
		<div class="imgget" style="margin: 0% 0% 2% 0%"><img src="images/troll-<?php echo $trollimage; ?>.jpg" style="background-size:auto; ">
    
    </div> <?php
		
		}
		
	}
  ?> 
    
    
    
     </div>
     
   </div>
</body>
</html>
