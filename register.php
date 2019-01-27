
<html>
<head>
	<title>Registration </title>
<style>
	.registerform {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #3232A2;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 1px;
}
.registerform img{
	 width:90px;
	 height:90px;
	 margin-top:-20px;
	 margin-bottom:-15px;
}

form, .content {
	width: 40%;
	margin: 0px auto;
	padding: 1px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 3px 0px 3px 0px;
}
ul, ol, dl { 
	padding:0;
	margin:0px;
}
.btn {
	
	background: #3232A2;
	color: white;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 0px;
}
.input-group input {
	height: 35px;
	width: 95%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color:RED;
	margin: 0;
	padding: 0;
	color: #000;
}
.navBAR{margin:0 auto; width:100%;}
.navBAR ul {padding:0px;line-height:17px;} /*this will make all links vertically */
.navBAR ul li {float:left; margin:1px; position:relative; background-color:black; border-radius:6px; list-style-type:none;}
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

.header {
	background-color:#000;
}
.footer {
    padding: 0.5em;
    color: BLACK;
    background-color:#12ffff;
    clear: left;
    text-align: center;
	    }
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



<div class="registerform"><br/>
<img src="img/User.jpg">
		<h2>Register</h2>
	</div>
	
	<form name="register" method="post" action="server.php">

		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="username..">
		</div>
	
		<tr>
			<td>
			Gender:
			</td>
			<td>
			
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			</td>
			</tr><br/><br/>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="email..">
		</div>
		<div class="input-group">
			<label>Contact Number</label>
			<input type="text" name="contact_number" placeholder="contact_number..">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"placeholder="Password">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="confirm_password"placeholder="confirm_password">
		</div>
		
		<div id="errorMessage" style="display:none;color:red"> You must fill all the fields </div>
		<div id="pMessage" style="display:none;color:red"> Passwords don't match </div>
			
		<div class="input-group">
			<div style="padding-left:2px; width:20%; padding-top:15px;"><input  type="submit" class="btn" onClick=" return validateForm()" name="submit" value="Register"/></div>
		</div>
	<P>
			Already a member? <a href="login.php">Sign in</a>
		</P>	
	</form>
	<div class="footer"><footer>Copyright &copy; Uttara University</footer></div>
	<script>
		function validateForm(){
			var a = document.forms["register"]["username"].value;
			var b = document.forms["register"]["email"].value;
			var c = document.forms["register"]["confirm_password"].value;
			var e = document.forms["register"]["password"].value;
			var d = document.forms["register"]["contact_number"].value;
			if(a.length==0 || b.length==0 || c.length==0 || d.length==0 || e.length==0){
				document.getElementById("errorMessage").style.display="block";
				return false;
			}
			if(e!=c){
				document.getElementById("pMessage").style.display="block";
				return false;
			}
			
		}
	</script>
</body>
</html>