<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","online");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	//print_r($arr);
	if(isset($arr)){
		return $arr;
	}
	else{
		return 0;
	}
}

function insertData($sql){
	$conn = mysqli_connect("localhost", "root", "","online");
	if ($conn->query($sql) === TRUE) {
    return true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	return false;
}

$conn->close();
	
}

?>