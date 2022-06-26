<?php
$con=mysqli_connect("localhost","root","","crimsdb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(true)
{  
  $result = mysqli_query($con,"SELECT * FROM compliant_detail");

  echo "<table>
  <tr>
  <th>ID</th>
  <th>Complainant</th>
  <th>Address</th>
  <th>Crime_Type</th>
  <th>Date</th>
  <th>Time</th>
  <th>Contact</th>
   <th>Age</th>
  <th>Suspect_Name</th>
  <th></th>
  <th></th>
  </tr>";

  while($row = mysqli_fetch_array($result)) {
    $ID = $row['ID'];
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Complainant'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['Crime_Type'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['Time'] . "</td>";
    echo "<td>" . $row['Contact'] . "</td>";
	 echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Suspect_Name'] . "</td>";
    echo "<td><a href='complain_detail.php?id=$ID&status=update'> <button class='updateButton'> Update </button></a></td>";
    echo "<td><a href='complain_detail.php?id=$ID&status=delete'> <button class='deleteButton'> Delete </button></a></td>";
    echo "</tr>";
  }

  echo "</table>";

  mysqli_close($con);
}

?> 