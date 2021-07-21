<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: welcome.php");
}


?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="handyman 11.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Metrophobic&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>HOME PAGE</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      outline: none;
      box-sizing: border-box;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;

      margin: 0;
      padding: 0;
      width: 99%;
      height: 100vh;
    }

    .home-page {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background-image: url(wall-painter.jpg);
      background-size: cover;
    }

    .overlay {
      width: 100%;
      height: 100%;
      background: linear-gradient(
        180deg,
        rgba(0, 0, 0, 0.68) 0%,
        rgba(239, 239, 239, 0.2225) 99.99%,
        rgba(255, 255, 255, 0.192) 100%
      );
    }

    .nav {
      position: absolute;
      width: 1181px;
      height: 72px;
      z-index: 1000;
      font-size: 1.1rem;

      top: 6.38%;
      left: 50%;
      transform: translateX(-50%);

      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .head1 {
      position: absolute;
      width: 547px;
      height: 35.275%;
      left: 51.95%;
      top: 29.3%;

      font-family: "PT Sans Caption", sans-serif;
      font-style: normal;
      font-weight: 900;
      font-size: 80px;
      line-height: 91px;

      color: #ede7e3;

      text-shadow: -7px 4px 15px rgb(0 0 0 / 75%);
    }

    .head2 {
      position: absolute;
      width: 547px;
      height: 9.44%;
      left: 51.95%;
      top: 69%;

      background-size: 100%;

      font-family: Poppins;
      font-style: normal;
      font-weight: 800;
      font-size: 45px;
      line-height: 67px;
      /* identical to box height */

      text-transform: uppercase;
    }

    .logo {
      width:  273px;
      height: 74px;
      left: 10px;
      top: 0px;

      color: white;

      font-family: "Baloo Chettan 2", cursive;
      font-style: normal;
      font-weight: normal;
      font-size: 50px;
      line-height: 72px;
      /* identical to box height */

      text-shadow: 7px 7px 5px rgba(0, 0, 0, 0.25);
    }
 #logo-1{ 
      position: relative;
      left: -846px;
    top: 1px;
    background-color: rgb(230, 203, 152);
    border-radius: 9px;
    height: 50px;
    width: 50px;
}

    
    #home,
    #login,
    #shop,
    #about,
    #contact,
    #feedback,
    #out,#reg {
      display: inline-block;
      color: rgb(255, 255, 255);
      position: absolute;
      width: 130px;
      text-decoration: none;
      letter-spacing: 2px;
      font-size: 1.2em;
    }
    #home {
      left: -53px;
    }
    #shop {
      left: 84px;
    }

    #login {
      left: 1009px;
    }

    #about {
      left: 222px;
    }

    #contact {
      left:419px;
    }
    #feedback {
      left:600px;
    }
    #reg{
     left: 812px;
    }
    #out{
left: 1165px;
    }
    #home:hover,
    #login:hover,
    #about:hover,
    #shop:hover,
    #contact:hover,
    #feedback:hover,
    #reg:hover, #out:hover{
      font-size: 1.6em;
      width: 160px;
      color: rgb(236, 130, 81);
      text-decoration: underline;
    }

    

    .user {
      height: 85%;
      width: 90%;

      border-radius: 100%;

      background-image: url();
      background-size: cover;
    }

    .page2{
    display: block;
    position: absolute ;
    left: 0;
    top: 100%;

    width: 100%;
    height: 1310px;
    background-image: url(page1.jpg);
    background-size: cover;


}

    .page2-item {
      position: absolute;
      width: 90%;
      height: 73%;
      left: 56px;
      top: 162px;

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .part1,
    .service-box {
      position: absolute;
    }

    .part1 {
      width: 881px;
      height: 54px;

      top: 0;

      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .location {
      position: absolute;
      width: 20%;
      height: 100%;

      top: 0px;

      opacity: 0.7;

      background: rgba(255, 255, 255, 0.7);
      border: 1px solid #444b54;
      box-sizing: border-box;
      border-radius: 8px;

      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }

    #indian-flag {
      display: inline-block;
      height: 24px;
      width: 36px;

      border-radius: 10%;
    }

    #arrow-down {
      display: inline-block;
      height: 38px;
      width: 25px;
    }

    .location > span {
      font-family: Poppins;
      font-style: normal;
      font-weight: bold;
      font-size: 16px;
      line-height: 24px;
      /* identical to box height */

      text-align: center;
      text-transform: capitalize;

      color: #000000;
    }

    .search-bar {
      position: absolute;
      width: 60%;
      height: 100%;
      right: 0;

      opacity: 0.7;

      background: rgba(255, 255, 255, 0.7);
      border: 1px solid #444b54;
      box-sizing: border-box;
      border-radius: 8px;

      display: flex;
      justify-content: center;
      align-items: center;
    }

    .search-bar > img {
      position: absolute;
      left: 30px;
    }

    .search-bar > span {
      position: absolute;
      left: 70px;

      font-family: Poppins;
      font-style: normal;
      font-weight: bold;
      font-size: 20px;
      line-height: 24px;
      /* identical to box height */

      text-align: center;
      text-transform: capitalize;

      color: #000000;
    }

    .service-box {
      bottom: 0px;
      top: 150px;
      width: 100%;
      height: 1000px;

      opacity: 0.8;

      background-color: rgb(240, 234, 234);
      border-radius: 8px;

      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: repeat(2, 1fr);
      grid-gap: 30px;
    }

    .service-box > div {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .service-box > div > img {
      background-color: rgba(165, 165, 165, 0.8);
      text-align: center;

      width: 145px;
      height: 145px;

      font-size: 30px;
    }

    .about {
      display: flex;
      justify-content: center;
      align-items: center;

      height: 40vh;
      width: 100%;
      position: absolute;
      top: 2080px;
      left: 0;

      background-color: black;
      color: rgb(224, 222, 222);
    }

    .grid {
      position: absolute;
      top: 30%;
      width: 80%;
      height: 50%;

      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: repeat(5, 1fr);
      grid-gap: 10px;
    }

    .grid > div {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .grid > div > span {
      text-align: left;
      width: 100%;
      margin-left: 10px;

      font-family: Poppins;
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 118.5%;
      /* identical to box height, or 17px */

      color: #ffffff;
    }

    #sub-head {
      position: absolute;
      top: 7%;
      left: 3%;
       font-size: 5em;
      font-family: Poppins;
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 118.5%;
      /* identical to box height, or 17px */

      color: #ffffff;
    }

    #head {
      font-family: poppins;
      font-style: normal;
      font-weight: 500;
      font-size: 20px;
      line-height: 118.5%;
    }
    .photo{
        position: relative;
       height: 210px;
        width: 200px;
         top: 75px;
         left: 79px;

    }
    .photo2{
       position: relative;
       height: 210px;
        width: 200px;
        bottom: 20px;
         
         left: 79px; }

         .photo:hover ,.photo2:hover , .photo3:hover {
             box-shadow: 7px 7px 4px rgba(17, 17, 17, 0.25); 
             border-radius: 15px;
         }
         .photo3{
       position: relative;
       height: 210px;
        width: 200px;
        bottom: 120px;
         
         left: 79px; }

         .photo:hover ,.photo2:hover {
             box-shadow: 7px 7px 4px rgba(17, 17, 17, 0.25); 
             border-radius: 15px;
         }
         
         #heading1{
        display : block;
        position :absolute ;
        font-family: 'Bebas Neue', cursive;
        font-size : 1.9em ;
        left : 50px ;
        width : 500px ;
        top :20px ;
         }
         #element42{
        
        position : absolute ;
        left : 1000px ;
        width : 400px ;
    }



 p{
   position: absolute;
   display: block;
   left: 45px;
    top: 79px;
    font-family: Poppins;
}

 #icon-1{
  position: relative;
   display: block;
   height: 46px;
    width: 52px;
   top: -100px;
    left:908px;
   
 }
 #icon-2{
  position: relative;
   display: block;
   height: 46px;
    width: 52px;
  top:-100px;
    left: 848px;
  }
 #email-txt{
   position: relative;
   left: 765px;
    top: -60px;
     font-family: Poppins;
 }
 #phone{
  position: relative;
   left: 760px;
    top: -59px;
     font-family: Poppins;

 }
 #our{
  position: relative;
   left:463px;
    top: 33px;
     font-family: Poppins;

 }
 .img69{
   position: relative;
   height: 45px;
    width: 45px;
    left: 214px;
    top: 82px;
    margin: 7px;
}
.imp{
   position: relative;
   top: -208px;
    left: -573px;
    font-size: 2rem;
 }
  </style>
  <body>
    <header>
      <div class="nav">
        <div class="logo"></div>
         <img src="LOGO.png" id="logo-1">
         <a href="homepage.html" id="home">HOME</a>
          <a href="shop home page.html" id="shop">SHOP</a>
          <a href="contact us.html" id="contact">CONTACT</a>
          <a href="aboutus.html" id="about">ABOUT US</a>
          <a href="#" id="feedback">FEEDBACK</a>
          
          <a href="register.php" id="reg">REGISTER</a>
          <a href="Login.php" id="login">LOGIN</a>
          <a href="homepage.php" id="out">LOGOUT</a>
     
        <div class="account">
          <div class="user"></div>
        </div>
      </div>
    </header>

    <main>
      <section class="home-page">
        <div class="overlay">
          <div class="head1">BEST HANDYMAN SERVICES</div>
          <div class="head2">Only one click away</div>
        </div>
      </section>
       <h3 class="imp"><?php echo "Welcome ". $_SESSION['username']?>! </h3> 
      <section class="page2">
        <div class="overlay">
          <div class="page2-item">
            <div class="part1">
              <div class="location">
                <img id="indian-flag" src="indian-flag.jpg" alt="indian-flag" />
                <span>DELHI NCR</span>
                <img id="arrow-down" src="arrow-down.svg" alt="" srcset="" />
              </div>
              <div class="search-bar">
                <img id="search" src="search.svg" alt="" />
                <span>Search for a service</span>
              </div>
            </div>
            <div class="service-box">
            <a href="carpentery services.html" ><img src="carpenter services.jpg" class="photo" id="illu1"></a>
            <a href="appliances service.html" ><img src="appliance repair.jpg" class="photo" id="illu2"></a>
            <a href="house cleaning services.html" ><img src="cleaning services.jpg" class="photo" id="illu3"></a>
            <a href="electrical services.html" ><img src="electric services.jpg" class="photo" id="illu4"></a> 
            <a href="ac repair.html" ><img src="ac repair.jpg" class="photo2" id="illu5"></a>
            <a href="plumber services.html" ><img src="plimbing services.jpg" class="photo2" id="illu6"></a>
            <a href="salon for men.html" ><img src="men hair salon.jpg" class="photo2" id="illu7"></a>
            <a href="salon for women.html" ><img src="women salon.jpg" class="photo2" id="ill8"></a> 
            <a href="pest control services.html" ><img src="pest control services.jpg" class="photo3" id="illu5"></a>
            <a href="architect services.html" ><img src="architect services.png" class="photo3" id="illu6"></a>
            <a href="car repairing services.html" ><img src="car repairing services.jpg" class="photo3" id="illu7"></a>
            <a href="laundry services.html" ><img src="laundry services.jpg" class="photo3" id="ill8"></a>
        </div>



      </section>

       

      <section class="about">
      
      <h1 id="heading1" >Handyman Services</h1>
      <p>Many people can do common household repairs. There are resources on the Internet, as well as do-it-yourself guide books,with <br>instructions about how to complete a wide range of projects. Sometimes the fix-it skill is seen as genetic, and people lacking such<br> skills are said to "lack the handy-man gene".One trend is that fewer homeowners are inclined to do fix-up jobs, perhaps because<br> of time constraints, perhaps because of lack of interest.</p>
  
      <a href="mailto:chetanya.rathi20@vit.edu"> <img src="mail logo.png" id="icon-1"></a> 
    <span id="email-txt">chetanya.rathi20@vit.edu</span>
    <a href="callto:8830451805"><img src="calling logo.png" id="icon-2"></a>
    <span id="phone"> +91 8830451805</span>
    <span id="our">Our Social Media handles</span>
  
    <a href="https://www.linkedin.com/in/chetanya-rathi-b7413b206/"><img src="linkdin logo.png" class="img69"></a>
  <a href="https://github.com/ChetanyaRathi"><img src="githib logo.png" class="img69"></a>
  <a href="https://www.youtube.com/channel/UC3X4G4saNhvXLP8wuDrDAig "><img src="youtube logo.png" class="img69"></a>
  <a href="https://www.facebook.com/chetanya.rathi.303"><img src="facebook logo.png" class="img69"></a>
  <a href="https://www.instagram.com/chetanya.rathi/"><img src="instagram logo.svg" class="img69"></a>
  <a href="https://twitter.com/Chetanya_Rathi"><img src="twitter logo.jpg" class="img69"></a>

    </section>
    </main>

    <footer></footer>
  </body>
</html>