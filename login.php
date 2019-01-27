
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
<style>
	.loginform {
	width: 30%;
	margin:40px auto 0px;
	color: white;
	background: #3232A2;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding:10px;
}
.loginform img{
	 width:90px;
	 height:90px;
	 margin-top:-20px;
	 margin-bottom:-15px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #3232A2;
	border: none;
	border-radius: 5px;
}
	body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color:white;
	margin: 0;
	padding: 0;
	color: #000;
}
.navBAR{margin:0 auto; width:100%;}
.navBAR ul {padding:0;list-style:none;line-height:17px;} /*this will make all links vertically */
.navBAR ul li {float:left; margin:1px; position:relative; background-color:black;border-radius:6px; list-style-type:none;}
.navBAR ul li a {
	text-decoration: none;
	color: white;
	padding: 5px;
	front-weight: bolder;
	display: block;
	width:156px;
	text-align: center;
}
.navBAR ul li ul{position:absolute; visibility:hidden;}
.navBAR ul li:hover ul{visibility:visible;}
.navBAR ul li a:hover{color:black;}
.navBAR ul li:hover{background-color:#e0f404;}


ul, ol, dl { 
	padding:0;
	margin:0px;
}


.header {
	background-color:#000;

}
.footer {
    padding: 0.5em;
    color: BLACK;
    background-color:#12ffff;
    clear: left;
    text-align: center;}
</style>

	
</head>
<body background="bkgndimg.png">

<div class="navBAR">
  <div class="header"><a href="#"><img src="img/uu.png" width="449" height="115" /></a> 
    
    
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

<li><a href="">Take course</a></li>
<li><a href="">Show Assesment</a></li>

</ul>
</li>
</ul>
<ul>
<li><br/><a href="#"> ERP Login</a>
</li>
</ul>

<ul>
<li><br/><a href="contact.php"> Contact us</a></li>
</ul>
<ul>
<li><br/><a href="logout.php">Logout</a></li>

</ul>
</div>
</div><br/><br/><br/>
<div class="loginform"><br/>
	<img src="img/User.jpg">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="bklogin.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username"placeholder="username...." >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"placeholder="password....">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<div class="footer"><footer>Copyright &copy; Uttara University</footer></div>

</body>
</html>
