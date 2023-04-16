<!DOCTYPE html>
<html>
<head>
	<title>Hashmax</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: black;
			color: green;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		
		@keyframes fadeIn {
			from {
				opacity: 0;
			}
			to {
				opacity: 1;
			}
		}
		main {
			animation-name: fadeIn;
			animation-duration: 1s;
			animation-fill-mode: both;
		}
		
		header {
			background-color: #333;
			color: white;
			padding: 20px;
			text-align: center;
		}

		h1 {
			margin: 0;
		}

		main {
			padding: 20px;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style-type: none;
		}

		li {
			margin-bottom: 10px;
		}

		section {
			margin-bottom: 20px;
		}

		.price {
			font-weight: bold;
		}

		footer {
			background-color: #333;
			color: white;
			padding: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>Hashmax</h1>
	</header>
	
	<main>
		<section>
			<h2>Description</h2>
			<p>Our software is a Python-based program that generates hash values for passwords using various hash algorithms. It is a command-line tool designed for security professionals who need to hash passwords securely and efficiently. Our software supports multiple hash algorithms, including MD5, SHA-1, SHA-256, and SHA-512.

</p>
		</section>
		
		<section>
			<h2>Price</h2>
			<p>Product price: <span class="fiyat">3 $</span></p>
		</section>
		
		<section>
			<h2>Specifications</h2>
			<ul>
				<li>Password Input: Our software accepts passwords as input, either through the command line or from a file. It supports both plaintext and hashed passwords as input, allowing users to generate new hashes for existing passwords.</li>
				<li>Hashing Algorithms: Our software supports multiple hashing algorithms, including MD5, SHA-1, SHA-256, and SHA-512. Users can choose which algorithm to use for each password input, or can generate hashes for multiple algorithms at once.</li> 				
                <li>Salt Generation: Our software can generate salts for passwords, which adds an extra layer of security to the hashing process. Salts are randomly generated and appended to the passwords before they are hashed, making it more difficult for attackers to crack the passwords.</li>
                <li>Hash Generation: Our software generates hash values for the passwords using the chosen hash algorithm(s). Hashes are generated in hexadecimal format, making it easy to compare and store them.</li>
                <li>Output Options: Our software outputs the generated hashes in a variety of formats, including plaintext and JSON. It also supports outputting the hashes to a file, making it easy to share them with other team members.</li>
                <li>Customization: Our software is highly customizable, allowing users to set up the hashing process based on specific requirements. Users can choose which hashing algorithm(s) to use, whether to generate salts, and which output format to use.</li>
			</ul>
		</section>
	</main>
	
	<footer>
		<p>Sahmeran Hacker Web Store © 2023</p>
	</footer>
</body>
</html>
