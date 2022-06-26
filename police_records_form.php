<?php			
	include 'connection.php';
	if( isset( $_POST['new'] ) )
	{
		$name = $_POST['name']; 
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$birthdate = $_POST['birthdate'];
		$sex = $_POST['gender'];
		$rank = $_POST['rank'];
		$sqlString = "insert into police_office (name, address, contact_no, birthdate, sex, rank) values ('$name', '$address', '$contact_no', '$birthdate', '$sex', '$rank')";
		mysql_query($sqlString) or die(mysql_error()); 
		header("Location: police_records.php");
	}
	else if( isset( $_POST['update'] ) )
	{
		$ID = $_GET['id'];

		$name = $_POST['name']; 
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$birthdate = $_POST['birthdate'];
		$sex = $_POST['gender'];
		$rank = $_POST['rank'];
		
		$sqlString = "UPDATE police_office SET name = '$name', address = '$address', contact_no = '$contact_no', birthdate = '$birthdate', sex = '$sex', rank = '$rank' WHERE ID = '$ID'";
		mysql_query($sqlString) or die(mysql_error()); 
					
		header("Location: police_records.php");
	}
	else if( isset($_GET['status'] )){
		$ID = $_GET['id'];
		$_POST['id'] = $ID;
		if( $_GET['status']== 'update'){
			$result = mysql_query("SELECT * FROM police_office WHERE ID='$ID'");
			$data = mysql_fetch_object( $result ); 			
			echo "	
				<form name='input' action='police_records.php?id=$ID' method='post'>			
				<label>Name: </label><br><input value=$data->name type='text' name='name' required autofocus><br>
				<label>Address: </label><br><input value=$data->address type='text' name='address' required autofocus><br>
				<label>Contact #: </label><br><input value=$data->contact_no type='text' name='contact_no' required autofocus><br>
				<label>Birthdate: </label><br><input value=$data->birthdate type='text' name='birthdate' required autofocus><br>
				<label>Sex:</label> <br>
				<select name='gender'>";
					if($data->sex=='Male')
					{
						echo "<option value='Male' selected>Male</option>
							 <option value='Female'>Female</option>";
					}
					else
					{
						echo "<option value='Male'>Male</option>
							<option value='Female' selected>Female</option>";
					}
			echo"</select>
				<br>
				<label>Rank: </label><br><input value=$data->rank type='text' name='rank' required autofocus><br>
				<br>
				<a href='police_records.php'> <button class='myButton'> New </button></a>
				<input class='myButton' name='update' type='submit' value='Update'>
				</form> 
			";
		}
		else if( $_GET['status'] == 'delete'){
			mysql_query("DELETE FROM police_office where ID='$ID'");
			header("Location: police_records.php");
		}
	}			
	else 
	{
		echo "	
				<form name='input' action='police_records.php' method='post'>			
				<label>Name: </label><br><input type='text' name='name' required autofocus><br>
				<label>Address: </label><br><input type='text' name='address' required autofocus><br>
				<label>Contact #: </label><br><input type='text' name='contact_no' required autofocus><br>
				<label>Birthdate: </label><br><input type='text' name='birthdate' required autofocus><br>
				<label>Sex:</label> <br>
				<select name='gender'>
				<option value='Male' selected>Male</option>
				<option value='Female'>Female</option>
				</select>
				<br>
				<label>Rank: </label><br><input type='text' name='rank' required autofocus><br>
				<br>
				<a href='police_records.php'> <button class='myButton'> New </button></a>
				<input class='myButton' name='new' type='submit' value='Save'>
				</form> 
		";
	}			
?>	