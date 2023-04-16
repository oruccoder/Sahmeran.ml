<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<style>
		select {
			font-family: "DejaVu Sans Mono", monospace;
			color: #32CD32;
			background-color: #000000;
			border: none;
			padding: 0.5rem;
			margin-right: 1rem;
		}

		body {
			background-color: #000;
			font-family: monospace;
			font-size: 20px;
		}

		p {
			color: #fff;
			line-height: 30px;
			font-weight: bold;
			font-size: 18px;
			padding: 50px 40px;
			text-align: justify;
		}

		a {
			color: #fff;
			font-size: 24px;
			text-decoration: none;
			display: inline-block;
			margin-right: 10px;
			background-color: #272727;
			color: white;
			padding: 12px 20px;
			border-radius: 10px;
			box-shadow: 2px 2px 5px black;
			transition: all 0.3s ease-in-out;
			font-size: 20px;
			transition: 0.5s all;
			text-decoration: none;
		}

		a:hover {
			transform: scale(1.02);
			box-shadow: 3px 3px 7px black;
		}

		a:hover{
			background-color: #fff;
			color: #000;
		}

		header {
			height: 17vh;
			background-color: #1c1c1c;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		h1 {
			color: red;
			font-size: 30px;
			font-family: monospace;
		}

		main {
			position: relative;
			padding-bottom: 40px;
		}

		.social-links {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 96%;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #4070f4;
			position: relative;
			margin-top: 90px;
			border-radius: 25px 25px 0 25px;
			padding: 30px;
		}

		span{
			margin-right: 40px;
		}

		.card-wrapper {
			display: flex;
			justify-content: center;
			margin-top: 60px;
			flex-wrap: wrap;
			gap: 20px;
			padding: 0 50px;
		}

		.card {
			width: 320px;
			height: 330px;
			border-radius: 25px;
			background-color: #fff;
			display: inline-block;
			opacity: 0;
			transition: opacity .4s linear;
			box-shadow: 2px 2px 5px black;
			position: relative;
			overflow: hidden;
		}

		.active {
			opacity: 1;
		}

		.image-content, 
		.card-content{
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 10px 14px;
		}

		.card-image .card-img{
			height: 100%;
			width: 100%;
			object-fit: cover;
			display: inline-block;
			border-radius: 50%;
		}

		.name{
			font-size: 18px;
			font-weight: 500;
			color: #333;
			margin-top: 10px;
			text-align: center;
		}

		.description{
			font-size: 14px;
			color: #707070;
			text-align: center;
			margin-top: 6px;
			line-height: 20px;
			padding: 0 10px;
		}

		.overlay::before,
		.overlay::after{
			content: " ";
			position: absolute;
			height: 40px;
			width: 40px;
			background-color: red;
			right: 0;
			bottom: -40px;
			background-color: #4070f4;
		}

		.overlay::after{
			border-radius: 0 25px 0 0;
			background-color: #fff;
		}

		.overlay{
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			background-color: #4070f4;
	border-radius: 25px 25px 0 25px;
	}

	@media(max-width: 900px){
		body {
			font-size: 18px;
		}
		.card{
			margin-left: 0px;
			justify-content: center;
			margin: 40px;
			align-items: center;
		}
	}
</style>
</head>
<body>
<header>
<h1>Contact</h1>
</header>
<main>
<div class="container">
<p>If you want to purchase any of our selected products from our website, contact me via Telegram. Click the button below and message me on Telegram. Contact Sahmeran and get the Telegram link to buy applications:</p>
<p>If you would like to purchase any of our hacking software, simply select the desired program from our website and contact us on Telegram. After payment has been made, we will provide you with the software for use. Please note that we do not condone illegal activity and our software is intended for educational and ethical purposes only.</p>

</div>
</div>
<div class="social-links">
<span>Follow us on social media:</span>
<a href="https://t.me/cybercrag/" target="_blank"><i class="fab fa-telegram"></i> Telegram Channel</a>
<a href="https://t.me/sahmeran_b/" target="_blank"><i class="fab fa-telegram"></i> My Telegram Address</a>
<a href="https://instagram.com/cyber_crag?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
<a href="https://www.youtube.com/@cybercrag" target="_blank"><i class="fab fa-youtube"></i> Youtube</a>
</div>
</main>
</body>
</html>