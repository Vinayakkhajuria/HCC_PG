<!--  
 /*
// Get the form data
$name = $_POST['name'];
$address = $_POST['address'];
$rent = $_POST['rent'];
$details = $_POST['details'];
#$image = $_FILES['images']['name'];

// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "logindb";

#$conn = new mysqli('localhost', 'root', '', 'dbname');

$conn = new mysqli($servername, $username, $password, $dbname);
#$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO pginfo (name, address, rent, details)
VALUES ('$name', '$address', '$rent', '$details')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
*/ -->


<!DOCTYPE html>
<html>
<head>
	<title>PG LIFE ||Owner Details</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #588d7c;
            background-image: url(img/bg3.png) ;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		
		
		.dialog {
			background-color: #fff;
			border-radius: 20px;
			box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
			width: 90%;
			max-width: 600px;
			position: relative;
			padding: 30px 20px;
			box-sizing: border-box;
			z-index: 1;
		}
		
		.dialog::before {
			content: "";
			position: absolute;
			top: -20px;
			left: 50%;
			transform: translateX(-50%);
			width: 0;
			height: 0;
			border-left: 30px solid transparent;
			border-right: 30px solid transparent;
			border-bottom: 20px solid #fff;
			z-index: 2;
		}
		
		.dialog::after {
			content: "";
			position: absolute;
			top: -22px;
			left: 50%;
			transform: translateX(-50%);
			width: 0;
			height: 0;
			border-left: 32px solid transparent;
			border-right: 32px solid transparent;
			border-bottom: 22px solid #ccc;
			z-index: 1;
		}
		
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
		}
		
		input[type="text"], textarea, input[type="number"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
			margin-bottom: 20px;
			width: 100%;
			max-width: 500px;
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
		}
		
		input[type="file"] {
			margin-bottom: 20px;
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
		}
		
		button {
			padding: 10px 20px;
			background-color: #2196F3;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.3s ease-in-out;
			font-family: Arial, sans-serif;
			font-size: 16px;
			text-transform: uppercase;
			letter-spacing: 1px;
			position: relative;
			z-index: 1;
		}
		
		button:hover {
			background-color: #3faa3f;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}
		
		button::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0

;
width: 100%;
height: 100%;
background-color: #ece4e4cd;
z-index: -1;
transform: translateY(100%);
transition: all 0.3s ease-in-out;
box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
}

	button:hover::before {
		transform: translateY(0);
	}
</style>
</head>
<body>
	<div class="dialog">
		<!-- <form "process_form.php" method="post"> -->
			<form action="Owner_details.php">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">

		<label for="address">Address:</label>
		<textarea id="address" name="address"></textarea>
		
		<label for="rent">Rent:</label>
		<input type="number" id="rent" name="rent">
		
		<label for="details">Details:</label>
		<textarea id="details" name="details"></textarea>
		
		<label for="images">Images:</label>
		<input type="file" id="images" name="images" accept="image/jpeg">
		
		<button type="submit" onclick="myFunction()">
		<a href="index.html">
			Submit</a></button>
			<script>
				function myFunction() {
				  alert("PG have been added");
				}
				</script>
	</form>
</div>
</body>
</html>