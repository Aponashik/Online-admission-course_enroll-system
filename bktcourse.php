<pre>
<?php
session_start();
include("database.php");
print_r($GLOBALS);
header("Location:index.php");
for($i=0;$i<(sizeof($_POST)-1);$i++){
	if(isset($_POST['c'.$i])){
	$sql="INSERT INTO `student_course` (s_id, c_id) VALUES ('".$_SESSION['uid']."', '".$_POST['c'.$i]."');";
	insertData($sql);
	
	}	
}


?>