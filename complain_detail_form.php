<?php			
	include 'connection.php';
	if( isset( $_POST['new'] ) )
	{
		$name = $_POST['Complainant']; 
		$address = $_POST['Address'];
		$contact_no = $_POST['Crime_Type'];
		$birthdate = $_POST['Date'];
		$sex = $_POST['Time'];
		$rank = $_POST['Contact'];
		$sex = $_POST['Age'];
		$rank = $_POST['Suspect_Name'];
		$sqlString = "insert into compliant_detail (Complainant, Address, Crime_Type, Date, Time, Contact,Age,Suspect_Name) values ('$Complainant', '$Address', '$Crime_Type', '$Date', '$Time', '$Contact','Age','Suspect_Name')";
		mysql_query($sqlString) or die(mysql_error()); 
		header("Location: complain_detail.php");
	}
	else if( isset( $_POST['update'] ) )
	{
		$ID = $_GET['id'];

		$Complainant = $_POST['Complainant']; 
		$Address = $_POST['Address'];
		$Crime_Type = $_POST['Crime_Type'];
		$Date = $_POST['Date'];
		$Time = $_POST['Time'];
		$Contact = $_POST['Contact'];
		$Age = $_POST['Age'];
		$Suspect_Name = $_POST['Suspect_Name'];
		
		$sqlString = "UPDATE compliant_detail SET Complainant = '$Complainant', Address = '$Address', Crime_Type = '$Crime_Type', Date = '$Date', Time = '$Time', Contact = '$Contact', Age ='Age' , Suspect_Name ='Suspect_Name' WHERE ID = '$ID'";
		mysql_query($sqlString) or die(mysql_error()); 
					
		header("Location: complain_detail.php");
	}
	else if( isset($_GET['status'] )){
		$ID = $_GET['id'];
		$_POST['id'] = $ID;
		if( $_GET['status']== 'update'){
			$result = mysql_query("SELECT * FROM compliant_detail WHERE ID='$ID'");
			$data = mysql_fetch_object( $result ); 			
			echo "	
				<form name='input' action='complain_detail.php?id=$ID' method='post'>			
				<label>Complainant: </label><br><input value=$data->Complainant type='text' name='Complainant' required autofocus><br>
				<label>Address: </label><br><input value=$data->Address type='text' name='Address' required autofocus><br>
				<label>Crime_Type : </label><br><input value=$data->Crime_Type type='text' name='Crime_Type' required autofocus><br>
				<label>Date: </label><br><input value=$data->Date type='text' name='Date' required autofocus><br>
				<label>Time : </label><br><input value=$data->Time type='text' name='Time' required autofocus><br>
				<label>Contact: </label><br><input value=$data->Contact type='text' name='Contact' required autofocus><br>
				<label>Age: </label><br><input value=$data->Age type='text' name='Age' required autofocus><br>
				<label>Suspect_Name: </label><br><input value=$data->Suspect_Name type='text' name='Suspect_Name' required autofocus><br>
			
				<br>
				<a href='compliant_detail.php'> <button class='myButton'> New </button></a>
				<input class='myButton' name='update' type='submit' value='Update'>
				</form> 
			";
		}
		else if( $_GET['status'] == 'delete'){
			mysql_query("DELETE FROM compliant_detail where ID='$ID'");
			header("Location: compliant_detail.php");
		}
	}			
	else 
	{
		echo "	
				<form name='input' action='complain_detail.php' method='post'>			
				<label>Complainant: </label><br><input type='text' name='Complainant' required autofocus><br>
				<label>Address: </label><br><input type='text' name='Address' required autofocus><br>
				<label>Crime_Type: </label><br><input type='text' name='Crime_Type' required autofocus><br>
				<label>Date: </label><br><input type='text' name='Date' required autofocus><br>
				<label>Time: </label><br><input type='text' name='Time' required autofocus><br>
				<label>Contact: </label><br><input type='text' name='Contact' required autofocus><br>
				<label>Age: </label><br><input type='text' name='Age' required autofocus><br>
				<label>Suspect_Name: </label><br><input type='text' name='Suspect_Name' required autofocus><br>
				<br>
				<a href='complain_detail.php'> <button class='myButton'> New </button></a>
				<input class='myButton' name='new' type='submit' value='Save'>
				</form> 
		";
	}			
?>	