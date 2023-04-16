<?php 
if(isset($_POST['submit'])) { 
    $url = "https://www.sahmeran.ml/index.php"; 
    header("Location: $url");
    exit(); 
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Advertising Request</title>
	<style type="text/css">
		body {
			background-color: #007F5F;
			color: #FFFFFF;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
		}

		h1 {
			font-size: 3em;
			margin-bottom: 1em;
		}

		p {
			font-size: 2em;
			text-align: center;
			margin: 0;
		}

		form {
			margin-top: 1em;
		}

		input[type="submit"] {
			padding: 0.5em 1em;
			font-size: 1.5em;
			border-radius: 0.5em;
			background-color: #FFFFFF;
			color: #007F5F;
			border: none;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Ad Request</h1>
	<p>Your ad request has been sent to admins.<br>You can follow and look at the advertisement page of our site.A confirmation message will be sent to your e-mail when the transaction is approved. Please check your e-mail often. Thank you <p>
	<form method="post">
		<input type="submit" name="submit" value="Go To Website">
	</form>
</body>
</html>
<?php
}
?>
