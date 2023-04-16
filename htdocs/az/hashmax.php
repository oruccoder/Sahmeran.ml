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
			<h2>Təsvir</h2>
			<p>proqramımız müxtəlif hash alqoritmlərindən istifadə edərək parollar üçün hash dəyərləri yaradan Python əsaslı proqramdır. Bu, parolları təhlükəsiz və səmərəli şəkildə hash etməli olan təhlükəsizlik mütəxəssisləri üçün nəzərdə tutulmuş komanda xətti vasitəsidir. Proqramımız MD5, SHA-1, SHA-256 və SHA-512 daxil olmaqla bir çox hash alqoritmlərini dəstəkləyir.

</p>
		</section>
		
		<section>
			<h2>Qiymət</h2>
			<p>Məhsulun qiyməti: <span class="fiyat">3 $</span></p>
		</section>
		
		<section>
			<h2>Spesifikasiyalar</h2>
			<ul>
				<li>Parolun daxil edilməsi: Proqram təminatımız parolları ya komanda xətti, ya da fayldan daxiletmə kimi qəbul edir. O, istifadəçilərə mövcud parollar üçün yeni heşlər yaratmağa imkan verən giriş kimi həm açıq mətn, həm də hashed parolları dəstəkləyir.</li>
				<li>Hashing alqoritmləri: Proqramımız MD5, SHA-1, SHA-256 və SHA-512 daxil olmaqla çoxsaylı hashing alqoritmlərini dəstəkləyir. İstifadəçilər hər bir parol daxil edilməsi üçün hansı alqoritmdən istifadə edəcəyini seçə və ya birdən çox alqoritm üçün hash yarada bilər.</li> 	
                <li>Duz Yaradılması: Proqramımız parollar üçün duzlar yarada bilər ki, bu da hashing prosesinə əlavə təhlükəsizlik qatını əlavə edir. Duzlar təsadüfi olaraq yaradılır və parollara hashing edilməzdən əvvəl əlavə edilir, bu da təcavüzkarların parolları sındırmasını çətinləşdirir.</li>
                <li>Hash Generation: Proqramımız seçilmiş hash alqoritm(lər)indən istifadə edərək parollar üçün hash dəyərləri yaradır. Haşlar onaltılıq formatda yaradılır ki, bu da onları müqayisə etməyi və saxlamağı asanlaşdırır.</li>
                <li>Çıxış Seçimləri: Proqram təminatımız yaradılan hashləri müxtəlif formatlarda, o cümlədən açıq mətn və JSON-da çıxarır. O, həmçinin hashlərin fayla çıxarılmasını dəstəkləyir və onları digər komanda üzvləri ilə paylaşmağı asanlaşdırır.</li>
                <li>Fərdiləşdirmə: Proqram təminatımız yüksək səviyyədə fərdiləşdirilə bilir və istifadəçilərə xüsusi tələblər əsasında hashing prosesini qurmağa imkan verir. İstifadəçilər hansı hashing alqoritm(lər)dən istifadə edəcəyini, duzların yaradılıb-yaratılmayacağını və hansı çıxış formatından istifadə edəcəyini seçə bilərlər.</li>
			</ul>
		</section>
	</main>
	
	<footer>
		<p>Sahmeran Hacker Web Store © 2023</p>
	</footer>
</body>
</html>
