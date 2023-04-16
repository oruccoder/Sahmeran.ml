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
			<h2>Tanım</h2>
			<p>Yazılımımız, çeşitli karma algoritmalar kullanarak parolalar için karma değerler üreten Python tabanlı bir programdır. Parolaları güvenli ve verimli bir şekilde toplaması gereken güvenlik uzmanları için tasarlanmış bir komut satırı aracıdır. Yazılımımız, MD5, SHA-1, SHA-256 ve SHA-512 dahil olmak üzere çoklu karma algoritmaları destekler.

</p>
		</section>
		
		<section>
			<h2>Fiyat</h2>
			<p>Ürün fiyatı: <span class="fiyat">3 $</span></p>
		</section>
		
		<section>
			<h2>Özellikler</h2>
			<ul>
				<li>Şifre Girişi: Yazılımımız, komut satırından veya bir dosyadan şifreleri giriş olarak kabul eder. Girdi olarak hem düz metin hem de karma parolaları destekler ve kullanıcıların mevcut parolalar için yeni karmalar oluşturmasına olanak tanır.</li>
				<li>Karma Algoritmalar: Yazılımımız, MD5, SHA-1, SHA-256 ve SHA-512 dahil olmak üzere çoklu karma algoritmaları destekler. Kullanıcılar, her bir şifre girişi için hangi algoritmanın kullanılacağını seçebilir veya aynı anda birden çok algoritma için hash oluşturabilir.</li> 				
                <li>Tuz Üretimi: Yazılımımız, parolalar için, karma işlemine ekstra bir güvenlik katmanı ekleyen tuzlar üretebilir. Saldırganların parolaları kırmasını zorlaştıracak şekilde, tuzlar rastgele oluşturulur ve parolalara hash uygulanmadan önce eklenir.</li>
                <li>Hash Üretimi: Yazılımımız, seçilen hash algoritma(lar)ını kullanarak parolalar için hash değerleri üretir. Hash'ler onaltılık biçimde oluşturulur, bu da onları karşılaştırmayı ve saklamayı kolaylaştırır.</li>
                <li>Çıktı Seçenekleri: Yazılımımız, oluşturulan karmaları düz metin ve JSON dahil olmak üzere çeşitli biçimlerde çıkarır. Ayrıca hash'lerin bir dosyaya çıkarılmasını destekleyerek diğer ekip üyeleriyle paylaşmayı kolaylaştırır.</li>
                <li>Özelleştirme: Yazılımımız son derece özelleştirilebilir olup, kullanıcıların belirli gereksinimlere göre karma sürecini kurmasına olanak tanır. Kullanıcılar, hangi karma algoritmaların kullanılacağını, tuzların oluşturulup oluşturulmayacağını ve hangi çıktı formatının kullanılacağını seçebilir.</li>
			</ul>
		</section>
	</main>
	
	<footer>
		<p>Sahmeran Hacker Web Store © 2023</p>
	</footer>
</body>
</html>
