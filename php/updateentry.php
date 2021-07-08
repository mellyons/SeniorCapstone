

<?php
include "header.php";
include "connection.php";

$sql = "SELECT * FROM staff WHERE StaffID=".$_GET["StaffID"];
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc ()){
    $OfficeNum = $row ["office_num"];
    $StaffID = $row ["StaffID"];
    $PhoneNum = $row ["phone_num"];
    $Email = $row["email"];
    $Location = $row["location"];
    $FName = $row["firstname"];
    $LName = $row["lastname"];
    $Dept = $row["Department"];
	
	echo "<h1>"."Update Directory Entry</h1>";
	echo "<div id='updateinfo'>";
	
	echo "<h2>Current Information:</h2>";	
	
	
	echo "<label>First Name: </label>".$FName. "<br />";
	echo "<br />";
	echo "<label>Last Name: </label>".$LName. "<br />";
	echo "<br />";
	echo "<label>Department: </label>".$Dept. "<br />";
	echo "<br />";
	echo "<label>Email: </label>".$Email."<br />";
	echo "<br />";
	echo "<label>Phone Number: </label>".$PhoneNum."<br />";
	echo "<br />";
	echo "<label>Campus : </label>".$Location. "<br />";
	echo "<br />";
	echo "<label>Office Number: </label>".$OfficeNum. "<br />";
	echo "</div>";
	
	
	
} 
}
$conn->close();
?>

<form id="Updateframe" action="update.php" method="POST">
	

<h2>New Information:</h2>

<input type="hidden"  id="StaffID" name="StaffID" value="<?php echo $StaffID; ?>">

<div> <!--Begin First Name Row -->
<div class="labels"><label for="firstname">First Name:</label></div>
<div class="textboxes"><input type="textbox"  id="firstname" name="firstname" value="<?php echo $FName; ?>"></div>
	</div>	<!-- End First Name Row -->
<br />
<br />
<div> <!--Begin Last Name Row -->
<div class="labels"><label for="lastname">Last Name:</label></div>
<div class="textboxes"><input type="textbox"  id="lastname" name="lastname" value="<?php echo $LName; ?>"></div>
	</div>	<!-- End Last Name Row -->
<br />
<br />
<div> <!--Begin Department Row -->
<div class="labels"><label for="Department">Department:</label></div>
<div class="textboxes"><input type="textbox"  id="Department" name="Department" value="<?php echo $Dept; ?>"></div>
	</div>	<!-- Department Row -->
<br />
<br />
<div> <!--Begin Email Row -->
<div class="labels"><label for="email">Email:</label></div>
<div class="textboxes"><input type="textbox"  id="email" name="email" value="<?php echo $Email; ?>"></div>
	</div>	<!-- End Email Row -->
<br />
<br />
<div> <!--Begin Phone Number Row -->
<div class="labels"><label for="phone_num">Phone Number:</label></div>
<div class="textboxes"><input type="textbox"  id="phone_num" name="phone_num" value="<?php echo $PhoneNum; ?>"></div>
	</div>	<!-- End Phone Number Row -->
<br />
<br />
<div> <!--Begin Campus Number Row -->
<div class="labels"><label for="location">Campus Number:</label></div>
<div class="textboxes"><input type="textbox"  id="location" name="location" value="<?php echo $Location; ?>"></div>
	</div>	<!-- End Campus Number Row -->
<br />
<br />
<div> <!--Begin Office Number Row -->
<div class="labels"><label for="office_num">Office Number:</label></div>
<div class="textboxes"><input type="textbox"  id="office_num" name="office_num" value="<?php echo $OfficeNum; ?>"></div>
	</div>	<!-- End Office Number Row -->
<br />
<br />
	
<input type="submit" id="UpdateBtn" name="UpdateBtn" value="Update Entry">
<br />

</form> <!--END REGISTRATION FRAME -->
<div class="clear"></div>
<?php
include "footer.php";
?>
