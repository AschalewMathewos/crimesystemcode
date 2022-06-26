<?php			
	include 'connection.php';
	if( isset( $_POST['new'] ) )
	{
		$name = $_POST['name']; 
		$address = $_POST['address'];
		$crime_type = $_POST['crime_type'];
		$date_registered = $_POST['date_registered'];
		$period = $_POST['period'];
		$details = $_POST['details'];
		$sqlString = "insert into crime_record (name, address, crime_type, date_registered, period, details) values ('$name', '$address', '$crime_type', '$date_registered', '$period', '$details')";
		mysql_query($sqlString) or die(mysql_error()); 
		header("Location: crime_record_report.php");
	}
	else if( isset( $_POST['update'] ) )
	{
		$ID = $_GET['id'];

		$name = $_POST['name']; 
		$address = $_POST['address'];
		$crime_type = $_POST['crime_type'];
		$date_registered = $_POST['date_registered'];
		$period = $_POST['period'];
		$details = $_POST['details'];
		
		$sqlString = "UPDATE crime_record SET name = '$name', address = '$address', crime_type = '$crime_type', date_registered = '$date_registered', period = '$period', details = '$details' WHERE ID = '$ID'";
		mysql_query($sqlString) or die(mysql_error()); 
					
		header("Location: crime_record_report.php");
	}
	else if( isset($_GET['status'] )){
		$ID = $_GET['id'];
		$_POST['id'] = $ID;
		if( $_GET['status']== 'update'){
			$result = mysql_query("SELECT * FROM crime_record WHERE ID='$ID'");
			$data = mysql_fetch_object( $result ); 			
			echo "	
				<form name='input' action='crime_record_report.php?id=$ID' method='post'>			
				<label>Name: </label><br><input value=$data->name type='text' name='name' required autofocus><br>
				<label>Address: </label><br><input value=$data->address type='text' name='address' required autofocus><br>
				<label>Crime_Type: </label><br><input value=$data->crime_type type='text' name='crime_type' required autofocus><br>
				<label>Date_Registered: </label><br><input value=$data->date_registered type='text' name='date_registered' required autofocus><br>
				<label>Period: </label><br><input value=$data->period type='text' name='period' required autofocus><br>
				<label>Details: </label><br><input value=$data->details type='text' name='details' required autofocus><br>
				<br>
				<a href='crime_record_report.php'> <button class='myButton'> New </button></a>
				<input class='myButton' name='update' type='submit' value='Update'>
				</form> 
			";
		}
		else if( $_GET['status'] == 'delete'){
			mysql_query("DELETE FROM crime_record where ID='$ID'");
			header("Location: crime_record_report.php");
		}
	}			
	else 
	{
		echo "	
				<form name='input' action='crime_record_report.php' method='post'>			
				<label>Name: </label><br><input type='text' name='name' required autofocus><br>
				<label>Address: </label><br><input type='text' name='address' required autofocus><br>
				<label>Crime_Type : </label><br><input type='text' name='crime_type' required autofocus><br>
				<label>Date_Registered: </label><br><input type='text' name='date_registered' required autofocus><br>
				<label>Period: </label><br><input type='text' name='period' required autofocus><br>
				<label>Details: </label><br><input type='text' name='details' required autofocus><br>
				<br>
				<a href='crime_record_report.php'> <button class='myButton'> New </button></a>
				<input class='myButton' name='new' type='submit' value='Save'>
				</form> 
		";
	}			
?>	