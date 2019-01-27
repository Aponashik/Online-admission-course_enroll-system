<!DOCTYPE html>
<head>
<title>server</title>
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

</ul>
</li>
</ul>

<ul>
<li><br/><a href="contact.php"> Contact us</a></li>
</ul>
<ul>

<li><br/><a href="logout.php">Logout</a></li>

</ul>
</div>

</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$gender=filter_input(INPUT_POST,'gender');
$email=filter_input(INPUT_POST,'email');
$contact_number=filter_input(INPUT_POST,'contact_number');
$confirm_password=filter_input(INPUT_POST,'confirm_password');
if(!empty($username)){
	if(!empty($password)){
		if(!empty($confirm_password)){
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="online";
		//create the connection//
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'
		    .mysqli_connect_error());
	
	} 
	else{
		$sql="insert into student(username,password,confirm_password,gender,email,contact_number)
		values('$username','$password','$confirm_password','$gender','$email',$contact_number)";
	if($conn->query($sql))
	     {
			 echo "Welcome $username your Registration is done";
		 }
	else{
		echo "Error:" .$sql."<br>".$conn->error;
		}
		$conn->close();
		
	} 
	}
	else{
		echo"   ";
		die();
	    }
	}
	else{
		echo"";
		die();
	    }
}
else{
echo "username should not be empty";
die();
    }

	
?><br/><br/><br/><br/><br/>

<div class="navBAR">
<ul>
<li><a href="login.php">Login</a></li>
</ul></div>
</body>
</html>
