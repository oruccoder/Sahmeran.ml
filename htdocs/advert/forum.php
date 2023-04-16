<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$features = $_POST['features'];
	$language = $_POST['language'];
	$author = $_POST['author'];

	$data = "Ürün İsmi: $name\nFiyatı: $price\nAçıklama: $description\nÖzellikler: $features\nYazılım Dili: $language\nYazan: $author\n\n";

	$i = 0;
	do {
		$file_name = "forum" . ($i == 0 ? "" : $i) . ".txt";
		$file_path = dirname(__FILE__) . "/" . $file_name;
		$i++;
	} while (file_exists($file_path));
	
	$file = fopen($file_path, "w");
	fwrite($file, $data);
	fclose($file);

	
	header("Location: https://sahmeran.ml/advert/succes.php");
	exit();
}
?>
