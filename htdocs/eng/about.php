<!DOCTYPE html>
<html>

<head>
    <meta name="description" class="content"
        content="Your Destination for Quality Hacker Software Solutions,Use online hacker software">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>About</title>
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
        }

        .container {
            background-color: #1c1c1c;
            display: grid;
            position: relative;
            max-height: 17vh;
        }

        .container h1 {
            color: red;
            font-size: 38px;
            font-family: monospace;
        }

        h1 {
            padding: 4px 40px;
        }

        .paragraph{
            padding: 50px 40px;
        }

        p{
            color: #fff;
            line-height: 30px;
            font-family: monospace;
            font-weight: bold;
            font-size: 18px;
        }

    .image-content{
    position: relative;
    row-gap: 5px;
    border-radius: 25px 25px 0 25px;
    padding: 25px;
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
.card-image{
    width: 150px;
    height: 150px;
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
}

.description{
    font-size: 14px;
    color: #707070;
    text-align: center;
    margin-top: 6px;
    line-height: 20px;
}
.card{
    width: 320px;
    border-radius: 25px;
    background-color: #fff;
    display: inline-block;
    margin: 0px;
    height: 330px;
    opacity: 0;
    margin-top: 10px;
    margin-left: 195px;
    transition: opacity .4s linear;
}

.active{
    opacity: 1;
}

.card-wrapper{
    margin-top: 100px;
    margin-left: 60px;
}

.creators{
    color: #fff;
    text-align: center;
    font-size: 29px;
}

@media(max-width: 1000px){
    .card{
     width: 700px;
    height: 590px;
    margin-left: 500px;
    justify-content: center;
    margin: 40px;
    align-items: center;
}

.name{
    font-size: 35px;
    font-weight: 500;
    color: #333;
}

.description{
    font-size: 27px;
    color: #707070;
    text-align: center;
    margin-top: 6px;
    line-height: 20px;
}

.image-content, 
.card-content{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 14px;
}

}

@media (max-width: 700px){
    .container {
        background-color: #1c1c1c;
        display: grid;
        flex-direction: column;
        max-height: 17vh;
        }

        .container h1 {
        color: red;
        font-size: 680px;
        font-family: monospace;
        }
}
    </style>
</head>

<body>
    <div class="container">
        <h1>About</h1>
    </div>
    <div class="paragraph">
        <p>Welcome to our site! We are a team of experienced hackers dedicated to providing high-quality hacking tools
            and software to our customers. Our tools are designed with the latest technologies and are constantly
            updated to meet the evolving needs of our clients. We specialize in a range of hacking software, including
            penetration testing tools, malware detection and removal tools, and password cracking tools. Our team is
            made up of skilled and experienced professionals who are passionate about what they do. We work tirelessly
            to ensure that our tools are always at the cutting edge of technology and are easy to use for both beginners
            and experienced hackers. We believe in offering our customers the best possible service and support, and we
            are always available to answer any questions or concerns you may have. We understand that hacking can be a
            sensitive subject, which is why we take privacy and security very seriously. All of our tools and software
            are designed to protect your privacy and keep your information safe. We do not condone or support illegal
            hacking activities, and our tools are intended for legitimate use only. Thank you for considering our
            hacking tools and software. We look forward to working with you and helping you achieve your goals. If you
            have any questions or comments, please feel free to contact us through our contact page.</p>
    </div>
    <div class="creators">
        <h2>Creators</h2>
    </div>

    <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide active">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="cyber.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Şahmeran</h2>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, tenetur!</p>
                        </div>
                    </div>

                    <div class="card swiper-slide active">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="1658236723389.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Oruc</h2>
                            <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, iste!</p>
                        </div>
                    </div>
                    
                </div>
</body>

</html>