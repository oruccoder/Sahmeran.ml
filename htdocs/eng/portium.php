<!DOCTYPE html>
<html>
<head>
	<title>Portium</title>
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
		<h1>Portium</h1>
	</header>
	
	<main>
		<section>
			<h2>Description</h2>
			<p>Portium is a Windows-based software that scans web servers and ports to identify running services. It is a user-friendly tool that is designed for network administrators and security professionals who need to ensure their networks are secure. Portium's interface is easy to navigate and provides detailed information on running services, including service names, ports, and protocols.

</p>
		</section>
		
		<section>
			<h2>Price</h2>
			<p>Product price: <span class="fiyat">8 $</span></p>
		</section>
		
		<section>
			<h2>Specifications</h2>
			<ul>
				<li>Port Scanning: Portium allows users to scan specific ports on web servers to identify running services. Users can scan individual ports or ranges of ports and get detailed information on each service found.</li>
				<li>Service Detection: Portium can detect various services running on web servers, including HTTP, FTP, SMTP, SSH, and more. It provides detailed information on each service found, including the service name, port number, and protocol used.</li> 				
                <li>Customization: Portium is highly customizable, allowing users to set up scans based on specific requirements. Users can choose to scan specific ports or ranges of ports, and can also specify which protocols to scan.</li>
                <li>Reporting: Portium generates detailed reports on the services detected on web servers. Reports can be exported in various formats, including CSV and PDF, making it easy to share information with other team members.</li>
                <li>Security: Portium is designed with security in mind. It does not collect any personal or sensitive information and does not communicate with any external servers. All scans are performed locally on the user's computer, ensuring that no sensitive data is exposed.</li>
			</ul>
		</section>
	</main>
	
	<footer>
		<p>Sahmeran Hacker Web Store © 2023</p>
	</footer>
</body>
</html>
