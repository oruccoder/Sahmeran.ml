<?php
if (isset($_GET['file'])) {
	$file = $_GET['file'];
	if (file_exists($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		readfile($file);
		exit;
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>NEWS</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style>
		body {
			background-color: black;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.container {
			background-color: #272727;
			width: 100%;
			max-height: 29vh;
			position: absolute;
			top: 0;
			left: 0; 
			color: #fff;		
		}

		.container h1 {
			color: #fff;
			text-align: center;
		}

		.item {
			margin-top: 200px;
			color: #000;
			width: 34%;
			box-shadow: -1px -1px 5px 0px #fff;
			background-color: #fff;
			border-radius: 4px;
			margin-left: 30px;
			padding: 10px 70px;
		}

		.item h1 {
			font-size: 24px;
			margin: 30px;
			color: #272727;
			width: 120%;
			margin-left: 0px;
		}

		.item p {
			line-height: 30px;
		}
		.item-two {
			margin-top: 200px;
			color: #000;
			width: 34%;
			background-color: #fff;
			border-radius: 4px;
			box-shadow: -1px -1px 5px 0px #fff;
			margin-left: 30px;
			padding: 10px 70px;
		}

		.item-two h1 {
			font-size: 24px;
			margin: 30px;
			color: #272727;
			width: 120%;
			margin-left: 0px;
		}

		.item-two p {
			line-height: 30px;
		}

		.item-new{
			display: flex;
		}

		@media(max-width: 1000px){
			.item-new{
				display: grid;
				flex-direction: column;
			}

			.item {
			margin-top: 400px;
			color: #000;
			width: 70%;
			background-color: #fff;
			border-radius: 4px;
			margin-left: 100px;
			padding: 10px 70px;
		}

		.item h1 {
			font-size: 36px;
			margin: 50px;
			color: #272727;
			width: 120%;
			margin-left: 0px;
		}

		.container {
			background-color: #272727;
			width: 101.2%;
			max-height: 19vh;
			position: absolute;
			top: 0;
			left: 0 color: #000;
		}

		.container h1 {
			text-align: center;
			margin-top: 50px;
			font-size: 40px;
		}

		.item-two {
			margin-top: 80px;
			color: #000;
			width: 70%;
			background-color: #fff;
			border-radius: 4px;
			margin-left: 100px;
			padding: 10px 70px;
		}

		.item-two h1 {
			font-size: 36px;
			margin: 50px;
			color: #272727;
			width: 120%;
			margin-left: 0px;
		}

		}

		@media(max-width: 700px){
			.container h1 {
			text-align: center;
			margin-top: 100px;
			font-size: 40px;
		}
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>What's New?</h1>
	</div>
	<div class="item-new">
		<div class="item">
			<h1>P3LOAD+ Software Now Available Online</h1>
			<hr style="border-color: blue;">

			<p>We are excited to announce that our online tools are now available for purchase on our website as well as
				through our social media accounts! Previously, these tools were available for use free of charge on our
				website, but we have decided to make them available for purchase to help support the continued
				development
				of our software. Our tools have been carefully designed and developed to assist users with a wide range
				of
				tasks, from ethical hacking and cybersecurity to productivity and organization. We are confident that
				they
				will be valuable assets to anyone looking to improve their skills or streamline their workflows. To
				purchase
				our online tools, simply visit our website and select the desired program from the list of available
				options. Once you have completed the purchase process, you will be provided with a download link and
				instructions for installation and use. We would like to emphasize that our software is intended for
				ethical
				and educational purposes only. We do not condone or support illegal activities of any kind, and we
				reserve
				the right to refuse service to anyone who uses our software for malicious purposes. Thank you for your
				continued support, and we look forward to providing you with the best possible online tools and
				resources
				for years to come!</p>
		</div>

		<div class="item-two">
			<h1>P3LOAD+ Software Now Available Online</h1>
			<hr style="border-color: blue;">

			<p>We are excited to announce that our P3LOAD+ software is now available for online use! This powerful
				software, which is designed for cybersecurity purposes, can be accessed and run directly from our
				website. P3LOAD+ is a comprehensive security testing tool that can be used for vulnerability scanning,
				penetration testing, and other security assessments. With its advanced features and intuitive interface,
				P3LOAD+ has become a popular choice for security professionals and businesses around the world. Now,
				with the ability to run P3LOAD+ online, users can easily access and use the software without the need
				for any additional hardware or software installations. This means that users can quickly and easily
				conduct security testing on their websites, applications, and systems from anywhere in the world. To
				learn more about P3LOAD+ and its features, please visit our website at
				https://www.sahmeran.ml/p3load.php. We're excited to offer this new capability to our users and look
				forward to continuing to provide powerful and innovative cybersecurity solutions to our customers. Thank
				you for choosing us for your cybersecurity needs. Stay safe and secure!</p>
		</div>
	</div>
</body>

</html>