<!DOCTYPE html>
<html>
<head>
  <meta name="description" class="content" content="Your Destination for Quality Hacker Software Solutions,Use online hacker software">  
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
  <title>Home</title>
  <style>
  select {
  font-family: "DejaVu Sans Mono", monospace;
  color: #fff;
  background-color: gray;
  border: none;
  border-radius: 4px;
  padding: 0.5rem;
  margin-right: 1rem;
}

option {
  background-color: #000000;
  color: #32CD32;
  border: none;
}

  body {
 


 a {
  text-decoration: underline;
}


  font-family: "DejaVu Sans Mono", monospace;
  font-size: 16px;
  line-height: 1.5;
  margin: 0;
  background-color: #000000; 
  color: #32CD32; 
}

header {
  background-color: #000000;
  color: red;
  text-align: center;
  padding: 7rem;
  margin: 5px;
  box-shadow: none;
}

li a {
  color: #32CD32;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 1px;
  transition: all 0.2s ease-in-out;
  position: relative;
  list-style: none;
  display: inline-block;
  font-family: "DejaVu Sans Mono", monospace;
}

li a:hover {
  opacity: 0.7;
}

li a:active {
  color: #32CD32;
}

main h1 {
  font-size: 3rem;
  text-align: center;
  margin-top: 3rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: red;
  text-shadow: none;
  font-family: "DejaVu Sans Mono", monospace;
}


li{
  list-style: none;
}
main li {
  font-size: 1.5rem;
  margin-bottom: 1.5rem;
  margin-right: 1rem;
  box-shadow: none;
  transition: all 0.2s ease-in-out;
  border-radius: 5px;
  background-color: #000;
  padding: 10px;
  color: #32CD32;
  max-width: 80%;
  text-align: center;
  font-family: "DejaVu Sans Mono", monospace;
}

main li:hover {
  transform: translateY(-3px);
  box-shadow: none;
}

main a {
  color: #32CD32;
  text-decoration: none;
}

main a:hover {
  color: #fff;
}

.navbar ul li a{
  color: #fff;
  margin-left: 20px;
}

.navbar{
  margin-left: 35px;
}

.content{
  background-color: #fff;
  padding: 50px 10px;
  width: 50%;
  margin-top: 70px;
  position: relative;
  left: 25%;
  border-radius: 10px;
}

footer {
  background-color: #333;
  color: #fff;
  position: relative;
  text-align: center;
  padding: 1rem;
  font-size: 1rem;
  box-shadow: none;
}

.credit {
  font-size: 0.8rem;
  color: #32CD32;
  text-align: center;
  margin-top: 2rem;
  font-family: "DejaVu Sans Mono", monospace;
}

footer{
  margin-top: 150px;
}

option{
  color: #fff;
}

.container ul li{
  display: flex;
  padding: 5px 16px;
  justify-content: center;
}

.container ul{
  position: absolute;
  top: 10px;
  left: 10px;
  justify-content: center;
  text-align: center;
  text-align: center;
}

.container{
  display: flex;
}

form{
  position: absolute;
  top: 25px;
  left: 80%;
}

.container ul{
  display: flex;
}

.container ul li a{
  text-align: center;
  color: #fff;
}

.hamburger{
  display: none;
}

.container #icon{
  color: #fff;
  font-size: 60px;
  cursor: pointer;
  position: absolute;
  left: 10%;
  display: none;
  top: 25px;
  margin-right: 4px;
}
@media(max-width: 1000px){
  .hamburger{
        display: block;
        cursor: pointer;
    }

    .hamburger.active :nth-child(2){
        opacity: 0;
    }

    .hamburger.active :nth-child(1){
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active :nth-child(3){
        transform: translateY(-8px) rotate(-45deg);
    }

    .container #icon{
        display: block;
    }

    .container ul{
        position: fixed;
        top: 130px;
        left: -120%;
        margin: 0;
        width: 100%;
        z-index: 9999;
        height: 100vh;
        border-bottom: 2px solid rgba(0,0,0,0.6);
        background-color: blue;
        flex-direction: column;
        gap: 0;
        transition: 0.5s all;
    }

    .container ul li{
      position: relative;
      bottom: 580px;
    }

    .container ul li a{
      margin: 30px;
      margin-left: -30px;
      font-size: 30px;
    }

    .container ul li{
        display: block;
    }

    .container ul.show{
        left: 0;
    }

  form{
  position: absolute;
  top: 25px;
  left: 60%;
}

.content{
  background-color: #fff;
  padding: 50px 10px;
  width: 83%;
  margin-top: 70px;
  position: relative;
  left: 5%;
  border-radius: 10px;
}

.navbar ul li a{
  color: #fff;
  margin-left: 20px;
}

header {
  background-color: #000000;
  color: red;
  text-align: center;
  justify-content: center;
  margin-left: -50px;
  align-items: center;
  width: 80%;
  box-shadow: none;
}

select{
  font-size: 30px;
}

.navbar{
  margin-left: 35px;
}

footer{
  margin-top: 540px;
}

main li {
  font-size: 2rem;
  margin-bottom: 1.5rem;
  margin-right: 1rem;
  box-shadow: none;
  transition: all 0.2s ease-in-out;
  border-radius: 5px;
  background-color: #000;
  padding: 15px;
  color: #32CD32;
  max-width: 80%;
  text-align: center;
  font-family: "DejaVu Sans Mono", monospace;
}
}

  </style>
</head>
<body>
  <header>
    <h1>Your Destination for Quality Hacker Software Solutions</h1>
    <nav>
      <div class="item">
      <div class="container">
      <ul >
        <li><a href="https://www.sahmeran.ml/eng/about.php"><i class="fas fa-user" style="margin-right: 10px;"></i>About Us</a></li>
        <li><a href="https://www.sahmeran.ml/eng/contact.php"><i class="fas fa-phone" style="margin-right: 10px;"></i>Contact</a></li>
        <li><a href="https://www.sahmeran.ml/eng/freehackertool.php"><i class="fa-brands fa-hackerrank"></i> Free Hacker Tool</a></li>
        <li><a href="https://www.sahmeran.ml/eng/onlinetool.php"><i class="fa-solid fa-wrench"></i> Online Tool</a></li>
        <li><a href="https://www.sahmeran.ml/eng/news.php"><i class="fa-solid fa-newspaper"></i> NEWS</a></li>
        <li><a href="https://www.sahmeran.ml/eng/advertising.html"><i class="fas fa-ad"></i> Advertising</a></li>
       <li>
       </ul>

       <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
       </div>
       <label id="icon">
        <i class="fas fa-bars"></i>
       </label>
       <div style="float:right;">
          <form>
            <select onchange="location = this.value;">
              <option value="" selected disabled hidden>English</option>
            
              <option value="https://www.sahmeran.ml/tr/index.html">Türkçe</option>
              <option value="https://www.sahmeran.ml/az/index.html">Azərbaycanca</option>
            </select>
          </form>
        </div>
       </div>
       </div>
      </li>
    
  </nav>
</header>
  <main>
    <h1>Hack Store</h1>
    <div class="content">
    <div class="navbar">
    <ul>
      <li><a href="https://www.sahmeran.ml/eng/vocatus.php">Vocatus </a></li>
      <li><a href="https://www.sahmeran.ml/eng/ransium.php">RANSIUM </a></li>
      <li><a href="https://www.sahmeran.ml/eng/hashmax.php">HASHMAX </a></li>
      <li><a href="https://www.sahmeran.ml/eng/portium.php">PORTIUM </a></li>
      <li><a href="https://www.sahmeran.ml/eng/p3load.php">P3LOAD+ </a></li>
    </ul>
    </div>
    </div>
  </main>
  <footer>
    <p>This site is created by Sahmeran. Everything on this site is protected. The privacy of our users is our top priority.</p>
  </footer>

  <script>
    $(document).ready(function(){
      $("#icon").click(function(){
        $("ul").toggleClass("show")
      })
    })
  </script>
</body>
</html>
