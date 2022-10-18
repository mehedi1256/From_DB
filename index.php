<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Data in DB</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="bg-col1">
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			
<p class = "style">
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName" require>
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName" required>
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender" required>
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address" required>
			</p>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress" required>
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
