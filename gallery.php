<!--
Copyright 2017 Dora Tomljenovic <dxt5777>.
#Final Project   
-->
<?php
$pageName = 'Gallery';
include 'includes/head.php';
?>

<div id="main" class="global-container">

    <section id="section-gallery"> 

        <h1 class="photos-title"> Pictures </h1>

        <p class="photos"> In the city of Venice there was a lot of opportunity for taking photos. Picture come from the place
            where tourists can gather and take a picture. If you are lucky, you will be asked to take a photo with young Italians
            who drink and eat on the street right before they are going out to have a fun. You can see from the photos a beautifully
            view from the bridge, streets of Venice, gondola ride during the night, the church of San Simeon Piccolo.
        </p>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="images/street.JPG" style="width:100%">
                <div class="text">Venice Street</div>
            </div>

            <div class="mySlides fade">
                <img src="images/bridge.JPG" style="width:100%">
                <div class="text">View from the bridge</div>
            </div>

            <div class="mySlides fade">
                <img src="images/traffic.JPG" style="width:100%">
                <div class="text">San Simeone Piccolo</div>
            </div>

            <div class="mySlides fade">
                <img src="images/gondola.JPG" style="width:100%">
                <div class="text">Gondola</div>
            </div>

            <div class="mySlides fade">
                <img src="images/night.JPG" style="width:100%">
                <div class="text">Gondola ride at night</div>
            </div>

            <div class="mySlides fade">
                <img src="images/monument.JPG" style="width:100%">
                <div class="text">Street musician welcoming tourists</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span> 
        </div>

        <br><br>
    </section>

</div>

<?php include 'includes/footer.php'; ?>