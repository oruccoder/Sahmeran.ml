<?php
	if(isset($_GET['file'])) {
		$file = $_GET['file'];
		if(file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename($file).'"');
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
	<title>XƏBƏRLƏR</title>
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
		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 20px;
		}
		h1 {
			font-size: 36px;
			margin-top: 0;
		}
		ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}
		li {
			margin-bottom: 10px;
		}
		a {
			color: green;
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>yeni nə var?</h1>
		<ul>
            <li><a href="introducingournewonlinetoolsforsale.php">Satış üçün Yeni Onlayn Alətlərimizi Təqdim edirik</a></li>
			<li><a href="p3load+softwarenowavailableonline.php">P3LOAD+ Proqramı İndi Onlayn Mövcuddur</a></li>
            
		
            
		</ul>
	</div>
</body>
</html>
