<?php
include "header.php";

?>



<body>

<h1>Directory Registration</h1>
<form id="registerframe" action="registered.php" method="POST">
<div> <!--Begin First Name Row -->
	<div class="labels"><label for="firstname">First Name:</label></div>
	<div class="textboxes"><input type="textbox"  id="firstname" name="firstname"></div>
		
		
	</div>	<!-- End First Name Row -->
	<br />
<br />
<div> <!--Begin Last Name Row -->
	<div class="labels"><label for="lastname">Last Name:</label></div>
	<div class="textboxes"><input type="textbox"  id="lastname" name="lastname"></div>
		
		
	</div>	<!-- End Last Name Row -->
	<br />
<br />
<div> <!--Begin Department Row -->
	<div class="labels"><label for="Department">Department:</label></div>
	<div class="textboxes"><input type="textbox"  id="Department" name="Department"></div>
		
		
	</div>	<!-- Department Row -->
	<br />
<br />
	<div> <!--Begin Email Row -->
	<div class="labels"><label for="email">Email:</label></div>
	<div class="textboxes"><input type="textbox"  id="email" name="email"></div>
		
		
	</div>	<!-- End Email Row -->
	<br />
<br />
<div> <!--Begin Phone Number Row -->
	<div class="labels"><label for="phone_num">Phone Number:</label></div>
	<div class="textboxes"><input type="textbox"  id="phone_num" name="phone_num"></div>
		
		
	</div>	<!-- End Phone Number Row -->

	<br />
<br />

<div> <!--Begin Campus Number Row -->
<div class="labels"><label for="location">Campus:</label></div>
<div class="textboxes"><input type="textbox"  id="location" name="location"></div>
		
		
	</div>	<!-- End Campus Number Row -->
	<br />
<br />
<div> <!--Begin Office Number Row -->
		<div class="labels"><label for="office_num">Office Number:</label></div>
		<div class="textboxes"><input type="textbox"  id="office_num" name="office_num"></div>
		
	</div>	<!-- End Office Number Row -->

	
<br />
	<br />
	<input type="submit" id="RegisterBtn" name="RegisterBtn" value="Register">
	<br />

</form> <!--END REGISTRATION FRAME -->

<div class="clear"></div>
<?php
include "footer.php";

?>
