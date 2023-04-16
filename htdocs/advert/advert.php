<!DOCTYPE html>
<html>
<head>
	<title>Product Information Form</title>
	<style type="text/css">
body {
	background-color: #000;
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 16px;
	margin: 0;
	padding: 0;
}

.container {
	max-width: 600px;
	margin: auto;
	padding: 30px;
	background-color: #000;
	border-radius: 10px;
	box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

form label {
	display: block;
	font-weight: bold;
	margin-bottom: 10px;
	font-size: 1.2rem;
	color: #fff;
}

input[type=text], textarea {
	width: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 4px;
	background-color: #000;
	color: #fff;
	margin-bottom: 20px;
}

textarea {
	height: 150px;
	resize: none;
}

button[type=submit] {
	background-color: #337ab7;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-size: 1.2rem;
	margin-top: 20px;
}


</style>

</head>
<body>
	<div class="container">
		<h2>Product Information Form</h2>
		<form method="post" action="forum.php">
			<label for="name">Product Name (max 30 characters):</label><br>
			<input type="text" id="name" name="name" maxlength="30" required><br>

			<label for="price">Price (Enter in USD, max 5 characters):</label><br>
			<input type="text" id="price" name="price" maxlength="5" placeholder="Enter price in USD" required><br>

			<label for="description">Description (max 10,000 characters):</label><br>
			<textarea id="description" name="description" maxlength="10000" required></textarea><br>

			<label for="features">Features (max 3000 characters):</label><br>
			<textarea id="features" name="features" maxlength="3000" required></textarea><br>

			<label for="language">Programming Language (max 15 characters):</label><br>
			<input type="text" id="language" name="language" maxlength="15" required><br>

			<label for="author">Your Gmail Adress (max 20 characters):</label><br>
			<input type="text" id="author" name="author" maxlength="20" required><br>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
