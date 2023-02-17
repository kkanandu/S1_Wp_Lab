<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		// Define variables and set to empty values
		$name = $email = $password = $confirm_password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Validate name
			if (empty($_POST["name"])) {
				echo "<p>Name is required.</p>";
			} else {
				$name = test_input($_POST["name"]);
				// Check if name contains only letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					echo "<p>Only letters and white space allowed in name field.</p>";
				}
			}

			// Validate email
			if (empty($_POST["email"])) {
				echo "<p>Email is required.</p>";
			} else {
				$email = test_input($_POST["email"]);
				// Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "<p>Invalid email format.</p>";
				}
			}

			// Validate password and confirm password
			if (empty($_POST["password"]) || empty($_POST["confirm_password"])) {
				echo "<p>Password is required.</p>";
			} else {
				$password = test_input($_POST["password"]);
				$confirm_password = test_input($_POST["confirm_password"]);
				// Check if password and confirm password match
				if ($password != $confirm_password) {
					echo "<p>Passwords do not match.</p>";
				}
			}
		}

		// Helper function to sanitize input data
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
</body>
</html>