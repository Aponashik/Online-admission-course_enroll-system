<?php
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	
}
else{
	include("database.php");
	$sql="SELECT c_id FROM `student_course` WHERE s_id='".$_SESSION['uid']."';";
	$a=getJSONFromDB($sql);
	for($i=0;$i<sizeof($a);$i++){
		$sql="select * from course where c_id='".$a[$i]['c_id']."';";
		
		$b[$i]=getJSONFromDB($sql);

}
	

}


?>


<!DOCTYPE html>
<html>
<head>

<title>scourse</title>
<link rel="stylesheet"href="style.css" />
</head>

<body background="bkgndimg.png">

<div class="navBAR">
  <div class="header"><a href="#"><img src="img/uu.png" width="449" height="115" /></a> 
    </div>
	<div class="header1"> <form class="search">
<input type="text" placeholder="Search here...">
<input type="submit" class="bttn"name="Search" value="Search">

</form>
    </div>
    </div>
<div class="navBAR">
<ul>
<li><br/><a href="index.php"> Home</a></li>
</ul>
<ul>
<li><br/><a href="#"> About</a>
<ul>
<li><a href="vs.php">Vission & Mission</a></li>
<li><a href="krp.php">Key Resources </a></li>
<li><a href="bf.php">History</a></li>
<li><a href="admission.php"> Admission</a></li>
</ul>
</li>
</ul>
<ul>
<li><br/><a href="#">Administration</a>
<ul>
<li><a href="vco.php">Vice-Chancellor Office</a></li>
<li><a href="rgo.php">Register's Office</a></li>
<li><a href="cexamo.php">Exam controller's Office</a></li>
<li><a href="proctor.php">Proctors Office</a></li>

</ul>
</li>
</ul>
<ul>
<li><br/><a href="#"> Department of</a>
<ul>

<li><a href="#">Computer Science & Engineering</a></li>
<li><a href="#">Civil Engineering</a></li>
<li><a href="#">LAW</a></li>
<li><a href="#">Fashion Design & Technology</a></li>
<li><a href="#">Electrical & Electronic Engineering</a></li>
</ul>
</li>
</ul>

<ul>
<li><br/><a href="#">Course</a>
<ul>

<li><a href="tcourse">Take course</a></li>
<li><a href="scourse">Show Assesment</a></li>

</ul>
</li>
</ul>
<ul>
<li><br/><a href="#"> ERP Login</a>
<ul>

<li><a href="student.php">Student</a></li>

</ul>
</li>
</ul>

<ul>
<li><br/><a href="contact.php"> Contact us</a></li>
</ul>
<ul>

<li><br/><a href="logout.php">Logout</a></li>

</ul>
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<p>Your Selected Courses Are:</p>

<form action="bktcourse.php" method="post" name="course">

<table width="538" border="1">
	<tr>
	
    <td width="83">CourseID</td>
    <td width="400">Course</td>
    <td width="83">Credit</td>
  
  </tr>
  <?php for ($i=0;$i<sizeof($b);$i++){$j=0;?>
  <tr>
  
    <td width="83"><?php echo $b[$i][$j]['c_id']; ?></td>
    <td width="83"><?php echo $b[$i][$j]['c_name']; ?></td>
    <td width="83"><?php echo $b[$i][$j]['credit']; ?></td>
  </tr>
 
  <?php } 
  ?>
  
</table>
 
</form><br/><br/><br/><br/><br/><br/>

<div class="footer"><footer>Copyright &copy; Uttara University</footer></div>
</body>
</html>
