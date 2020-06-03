<?php
include  "header.php";
?>

<div id="buttons">
<button id="newbutton" onClick="window.location.href='register.php'">New Entry</button>
</div>        
<form class="searchfunction" action="index.php" method="POST">
<p class="searchfilters">Filter Results by Last Name:</p>
<input type ="textbox" id="txtSearch" name="txtSearch"/>
<button id="btnSearch" name="btnSearch" type="submit">Search</button>
</form>

<form class="searchfunction" action="index.php" method="POST">
<p class="searchfilters">Filter Results by Department:</p>
<select id="DeptSearch" name="DeptSearch">
									<option selected>Select One</option>
									<option>IT</option>
									<option>Math</option>
								</select>
<button id="btnDeptSearch" name="btnDeptSearch" type="submit">Search</button>
</form>

<?php
include "connection.php";
$sql = "SELECT * FROM staff";
    if(isset($_POST["btnSearch"])){
        $search = $_POST["txtSearch"];
        $sql = "SELECT * FROM staff WHERE lastname LIKE '%".$search ."'";
    }
    if(isset($_POST ["DeptSearch"])){
        $Deptsearch = $_POST["DeptSearch"];
        $sql = "SELECT * FROM staff WHERE Department LIKE '%".$Deptsearch ."'";
    }    
$result = $conn->query($sql);







if ($result->num_rows > 0){
       echo "<table>";
       echo "<tbody>";
        echo "<tr>";
        echo "<th>". ""."</th>";
        echo "<th>". "ID"."</th>";
        echo "<th>". "Name"."</th>";
        echo "<th>". "Department"."</th>";
        echo "<th>". "Email"."</th>";
        echo "<th>". "Phone Number"."</th>";
        echo "<th>". "Campus:"."</th>";
        echo "<th>". "Office Number"."</th>";
        echo "</tr>";
        
    while ($row = $result->fetch_assoc ()){
        
        echo "<tr>";
        echo "<td>";
        echo "<a class='tablelink' href='updateentry.php?StaffID=".$row["StaffID"]."'>Update</a> ";
        echo "</td>";
        echo "<td>". $row["StaffID"]. "</td>";
        echo "<td><a class='tablelink' href='https://www.mga.edu/directory/people.php?name=".$row["lastname"].'-'.$row ["firstname"]."'>".$row["firstname"]." ". $row["lastname"]."</td>";
        echo "<td>". $row["Department"]. "</td>";
        echo "<td>". $row["email"]. "</td>";
        echo "<td>". $row["phone_num"]. "</td>";
        echo "<td>". $row["location"]. "</td>";
        echo "<td>". $row["office_num"]. "</td>";       
        echo "</tr>";

        
        
        
    }
    echo "</tbody>";
    echo "</table>";
        
}

$conn->close();

include "footer.php";
?>