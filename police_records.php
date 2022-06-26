
<!DOCTYPE html>
<html>
<head>
	<title>CRIMS - Gesuba Police Station</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/report_style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css"/>
</head>

<body>
	<div id="navigation">
		<a href="#">Crime Record Information and Management System v1.0</a>
	</div>
	</div>
	<div id="pagetitle" align="center" style="position:fixed;top:110px;left:250px;z-index:2;">	
		<ul id="menu">
			<li><a href="home.php">HOME</a></li>        
	        <li><a href="crime_record_report.php">Crime Records</a></li>        
	        <li><a href="police_records.php">Police Information</a></li>
	        <li><a href="complain_detail.php">Complaints</a></li>
	        <li><a href="login.php">Logout</a></li>	    
		</ul>   
		POLICE INFORMATION DATA
		<label>User:STATION MEMBER</label>
	</div>
	<br>

	<div id="divinputs">
		<form name='input' action='police_records.php' method='post'>	
		<label>SEARCH: </label><br><input type="text" name="txtsearch"><br>
		<input class='updateButton' name='search' type='submit' value='Search'>
		</form> 
		<?php include 'police_records_form.php';?>	
	</div>
	<br>
	<div id="divInclude">
  		<?php include 'police_records_grid.php';?>	
  	</div>



<footer>
	<div>
		CRIMS &copy 2021 Developed by: Aschalew Mathewos
	</div>
</footer>
</html>