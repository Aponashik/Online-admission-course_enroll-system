<!DOCTYPE html>
<head>

<title>bklogin</title>
<link rel="stylesheet"href="style.css" />
</head>

<body background="bkgndimg.png">


<div class="navBAR">
  <div class="header"><a href="#"><img src="uu.png" width="449" height="115" /></a> 
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

<li><a href="">Computer Science & Engineering</a></li>
<li><a href="">Civil Engineering</a></li>
<li><a href="#">LAW</a></li>
<li><a href="#">Fashion Design & Technology</a></li>
<li><a href="#">Electrical & Electronic Engineering</a></li>
</ul>
</li>
</ul>

<ul>
<li><br/><a href="#">Course</a>
<ul>

<li><a href="tcourse.php">Take course</a></li>
<li><a href="scourse.php">Show Assesment</a></li>

</ul>
</li>
</ul>
<ul>
<li><br/><a href="#"> ERP Login</a>
<ul>

<li><a href="student.php">Student</a></li>
<li><a href="admin.php">Admin</a></li>

</ul>
</li>
</ul>

<ul>
<li><br/><a href="contact.php"> Contact us</a></li>
</ul>
</div>

</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
session_start();
include("database.php");
$sql="select * from student where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."';";
$a=getJSONFromDB($sql);
if(strlen($_REQUEST['username'])==0){
	echo "Incorrect username or password<br>";
	echo "<a href='Login.php'>Try Again</a>";
	
	
}

else if($a[0]['username']==$_REQUEST['username']){
	$_SESSION['uid']=$a[0]['s_id'];
	//echo $_SESSION['uid'];
	header("Location:index.php");
}

else{
	echo "Incorrect username or password<br>";
	echo "<a href='Login.php'>Try Again</a>";
}

?>