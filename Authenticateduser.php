<html>
<head>
<?php
session_start();
//include('connect.php');
$username=$_POST['username']; 
$password=$_POST['password']; 
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


$user = 'root';
$pass = '';
$hostname = 'localhost'; 
//connection to the database
$dbhandle = mysql_connect($hostname, $user, $pass);
$selected = mysql_select_db("crimsdb",$dbhandle);


$sql="SELECT * FROM admin WHERE username='$username' and password='$password'";

$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){


session_register("username");
session_register("password"); 
header("location:crime_record_report.php");

}
else {
echo include "login.php";
       echo "<script type=\"text/javascript\">";
       echo "alert('Wrong Username or Password!')";
echo "</script>";
} 		
if(isset($_SESSION['username'])) {
unset($_SESSION['username']);
}
?>
</head>
</html>


