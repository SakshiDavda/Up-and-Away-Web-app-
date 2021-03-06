<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset='UTF-8'/>
    <title>Up and Away Adventures</title>
    <!-- STYLES !-->
    <link rel="stylesheet" href="style.css"/>
    <!-- FONTS !-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <!-- JQUERY FILE !-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JS FILE !-->
    <script src="script.js"></script>
    
  </head>
  <body>
    <header>
        <!-- NAVIGATION !-->
        <nav>
            <ul>
                <li><a href="index.php"><img src="img/logo.jpg" alt="Up-and-Away-logo"/></a></li>
            </ul>
            <ul>
                <li><a href="product-index.html">Products</a></li>
                <li><a href="Adventures.html">Adventures</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <ul>
                
                <li><a href='login.php'>LogIn</a></li>
                 
            </ul>
        </nav>
        <!-- HERO SECTION !-->
        <section class="home-hero">
            <div>
                <h1>Gear for your ADVENTURE.</h1>
                <a href="product-index.html" class="button-large">View Products</a>
            </div>
            <img src="img/arrow.png" alt="arrow" class="arrow" />
        </section>
    </header>
    <!-- STORIES !-->
    <section class="story-intro">
        <div>
            <h2>We make so you can adventure. </h2>
            <h3>We are a small store that sells hiking and adventuring gear for you. We are committed to helping all men and women live to their full potential, experiencing the wild alongside their hiker pals!</h3>
        </div>
    </section>
    <section class="featured-stories stories">
        <div>
            <div class="cover" style="background-image: url(img/MountainHome.jpg)"></div>
            <div class="details">
                <a href="MountainHome.html">
                    <h3>Mountain Adventures &rarr;</h3>
                </a>
            </div>
        </div>
        <div>
            <div class="cover" style="background-image: url(img/WaterHome.jpg)"></div>
            <div class="details">
                <a href="WaterHome.html">
                    <h3>Water Adventures &rarr;</h3>
                </a>
            </div>
        </div>
        <div>
            <div class="cover" style="background-image: url(img/AirHome.jpg)"></div>
            <div class="details">
                <a href="AirHome.html">
                    <h3>Air Adventures &rarr;</h3>
                </a>
            </div>
        </div>
    </section>
    <!-- BOTTOM CTA !-->
    <section class="cta">
        <h2>Buy a product and start exploring!</h2>
        <ul>
            <li><a href="MountainGear.html">Mountain</a></li>
            <li><a href="WaterGear.html">water</a></li>
            <li><a href="AirGear.html">air</a></li>

        </ul>
        <a href="product-index.html" class="viewall">VIEW ALL PRODUCTS</a>
    </section>
    <!-- FOOTER !-->
    <footer>
        <ul>
            <li><a href="#">Fit Guide</a></li>
            <li><a href="#">Shipping &amp; Returns</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
    </footer>
  </body>
</html>