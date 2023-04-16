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
			<h2>Təsvir</h2>
			<p>Portium işləyən xidmətləri müəyyən etmək üçün veb serverləri və portları skan edən Windows əsaslı proqramdır. Bu, şəbəkələrinin təhlükəsiz olmasını təmin etməli olan şəbəkə administratorları və təhlükəsizlik mütəxəssisləri üçün nəzərdə tutulmuş istifadəçi dostu bir vasitədir. Portiumun interfeysi naviqasiya üçün asandır və xidmət adları, portlar və protokollar daxil olmaqla işləyən xidmətlər haqqında ətraflı məlumat verir.

</p>
		</section>
		
		<section>
			<h2>Qiymət</h2>
			<p>Məhsulun qiyməti: <span class="fiyat">8 $</span></p>
		</section>
		
		<section>
			<h2>Spesifikasiyalar</h2>
			<ul>
				<li>Port Skanı: Portium istifadəçilərə işləyən xidmətləri müəyyən etmək üçün veb serverlərdə xüsusi portları skan etməyə imkan verir. İstifadəçilər ayrı-ayrı portları və ya port diapazonlarını skan edə və tapılan hər bir xidmət haqqında ətraflı məlumat əldə edə bilərlər.</li>
				<li>Xidmətin aşkarlanması: Portium HTTP, FTP, SMTP, SSH və s. daxil olmaqla veb serverlərdə işləyən müxtəlif xidmətləri aşkar edə bilər. O, xidmət adı, port nömrəsi və istifadə olunan protokol daxil olmaqla, tapılan hər bir xidmət haqqında ətraflı məlumat verir.</li> 				
                <li>Fərdiləşdirmə: Portium yüksək dərəcədə fərdiləşdirilə bilər, istifadəçilərə xüsusi tələblər əsasında skanlar qurmağa imkan verir. İstifadəçilər xüsusi portları və ya port diapazonlarını skan etməyi seçə və həmçinin hansı protokolların skan ediləcəyini təyin edə bilərlər.</li>
                <li>Hesabat: Portium veb serverlərdə aşkar edilmiş xidmətlər haqqında ətraflı hesabatlar yaradır. Hesabatlar CSV və PDF daxil olmaqla müxtəlif formatlarda ixrac edilə bilər ki, bu da digər komanda üzvləri ilə məlumat mübadiləsini asanlaşdırır.</li>
                <li>Təhlükəsizlik: Portium təhlükəsizlik nəzərə alınmaqla hazırlanmışdır. O, heç bir şəxsi və ya həssas məlumat toplamır və heç bir xarici serverlə əlaqə saxlamır. Bütün skanlar istifadəçinin kompüterində lokal olaraq həyata keçirilir və heç bir həssas məlumatın üzə çıxmamasını təmin edir.</li>
			</ul>
		</section>
	</main>
	
	<footer>
		<p>Sahmeran Hacker Web Store © 2023</p>
	</footer>
</body>
</html>
