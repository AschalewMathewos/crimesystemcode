<?php
$con=mysqli_connect("localhost","root","","crimsdb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if( isset( $_POST['txtsearch'] ) )
{
  $txtsearch = $_POST['txtsearch']; 
  $result = mysqli_query($con,"SELECT * FROM police_office where name like '%$txtsearch%' or address like '%$txtsearch%' or contact_no like '%$txtsearch%' or sex like '%$txtsearch%' or rank like '%$txtsearch%'");
}
else
  $result = mysqli_query($con,"SELECT * FROM police_office");

  echo "<table>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Address</th>
  <th>Contact No.</th>
  <th>Birthdate</th>
  <th>Sex</th>
  <th>Rank</th>
  <th></th>
  <th></th>
  </tr>";

  while($row = mysqli_fetch_array($result)) {
    $ID = $row['id'];
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['contact_no'] . "</td>";
    echo "<td>" . $row['birthdate'] . "</td>";
    echo "<td>" . $row['sex'] . "</td>";
    echo "<td>" . $row['rank'] . "</td>";
    echo "<td><a href='police_records.php?id=$ID&status=update'> <button class='updateButton'> Update </button></a></td>";
    echo "<td><a href='police_records.php?id=$ID&status=delete'> <button class='deleteButton'> Delete </button></a></td>";
    echo "</tr>";
  }

  echo "</table>";

  mysqli_close($con);

?> 