<!DOCTYPE html>
<html>
<head>
	<title>CRIMS - Gesuba Police Station</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type='text/javascript'>
function valid(f)
	{
	if(f.username.value=="")
	{
	alert("Enter your Name");
	return false;
	}
	else if(f.password.value=="")
	{
	alert("Enter your Password");
	return false;
	}
	return true;
	}
	</script>
</head>

<body>
	<div id="navigation">
		<a href="#">Crime Record Information and Management System v1.0</a>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<div id="pagetitle" align="center">
	
<img src="images/login.jpg" width="200">
<br>
		<label>Please sign in</label>
	</div>
	<div align="center">
		<form name="input" action="Authenticateduser.php" method="post">
			<input type="text" id="login" name="username" placeholder="username" required autofocus>
			<input type="password" name="password" id="password" placeholder="Password" required autofocus>  
			<input type="submit" value="Sign in">
		</form> 
	</div>

<footer>
	<div>
		CRIMS &copy 2022 Developed by: Aschalew Mathewos
	</div>
</footer>
</html>