<?php
if (isset($_POST ["office_num"])) {
    
    $OfficeNum = $_POST["office_num"];
    $PhoneNum = $_POST["phone_num"];
    $Email = $_POST["email"];
    $Location = $_POST["location"];
	$FName = $_POST["firstname"];
	$LName = $_POST["lastname"];
	$Dept = $_POST["Department"];
	
	

include ("connection.php");

$sql = "INSERT INTO staff (office_num, phone_num,email,location,firstname,lastname,Department)";
$sql .="VALUES ('".$OfficeNum."', '".$PhoneNum."', '".$Email."','".$Location."','".$FName."','".$LName."','".$Dept."')";


if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}
?>