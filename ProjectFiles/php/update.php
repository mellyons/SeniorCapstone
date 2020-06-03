<?php
include ("connection.php");
if (isset($_POST ["StaffID"])) {
    $OfficeNum = $_POST["office_num"];
    $StaffID = $_POST["StaffID"];
    $PhoneNum = $_POST["phone_num"];
    $Email = $_POST["email"];
    $Location = $_POST["location"];
	$FName = $_POST["firstname"];
	$LName = $_POST["lastname"];
	$Department = $_POST["Department"];


$sql = "UPDATE staff SET office_num='".$OfficeNum."'
,phone_num='".$PhoneNum."'
,email='".$Email."'
,location='".$Location."'
,firstname='".$FName."'
,lastname='".$LName."'
,Department='".$Department."'
WHERE StaffID =".$StaffID;

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>