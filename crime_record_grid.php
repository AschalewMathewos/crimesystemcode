<?php
$con=mysqli_connect("localhost","root","","crimsdb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if( isset( $_POST['txtsearch'] ) )
{
  $txtsearch = $_POST['txtsearch']; 
  $result = mysqli_query($con,"SELECT * FROM crime_record where name like '%$txtsearch%' or address like '%$txtsearch%' or crime_type like '%$txtsearch%' or date_registered like '%$txtsearch%' or period like '%$txtsearch%' or details like '%$txtsearch%'");
}
else
  $result = mysqli_query($con,"SELECT * FROM crime_record");

  echo "<table>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Address</th>
  <th>Crime_Type</th>
  <th>Date_Registered</th>
  <th>Period</th>
  <th>Details</th>
  <th></th>
  <th></th>
  </tr>";

  while($row = mysqli_fetch_array($result)) {
    $ID = $row['id'];
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['crime_type'] . "</td>";
    echo "<td>" . $row['date_registered'] . "</td>";
    echo "<td>" . $row['period'] . "</td>";
    echo "<td>" . $row['details'] . "</td>";
    echo "<td><a href='crime_record_report.php?id=$ID&status=update'> <button class='updateButton'> Update </button></a></td>";
    echo "<td><a href='crime_record_report.php?id=$ID&status=delete'> <button class='deleteButton'> Delete </button></a></td>";
    echo "</tr>";
  }

  echo "</table>";

  mysqli_close($con);


?> 