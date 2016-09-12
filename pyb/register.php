<?php ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="stylesheet" href="css/menu.css" type="text/css">
</head>
<body>
	
	<div id="holder">

		<div id="header">

		</div>
		<div id="navbar">
			<nav>
				<ul>
					<li><a href="#">Login</a></li>										
					<li><a href="#">Register</a></li>
					<li><a href="#">Forgot Password?</a></li>

				</ul>
			</nav>
		</div>
		<div id="content">
			<div id="contentHeading">
				<h1>Page heading</h1>
			</div>	
			<div id="contentLeft">
				<h2>Left message</h2><br/>

				<br/>
				<h6>Your message</h6>
			</div>
			<div id="contentRight">
				<form id="registerForm" method="post">
					<table width="400">

							<tr>
								<td><h6>First Name:</h6></td>
								<td><h6>Last Name:</h6></td>
							</tr>
							<tr>
								<td><input name="Fname"/></td>
								<td><input name="Lname"/></td>

							</tr>
							<tr>
								<td><h6>Email:</h6></td>
							</tr>
							<tr>
								<td><input name="Email"/></td>
							</tr>
							<tr>
								<td><h6>Username:</h6></td>
							</tr>
							<tr>
								<td><input name="Username"/></td>
							</tr>
							<tr>
								<td><h6>Password:</h6></td>
								<td><h6>Confirm Password:</h6></td>
							</tr>
							<tr>
								<td><input name="Password"/></td>
								<td><input name="Confirm_Password"/></td>
							</tr>
							<tr>
								<td><button>Register</button></td>
							</tr>


					</table>
				</form>
			</div>
		</div>
		<div id="footer">

		</div>

	</div>


</body>


</html>