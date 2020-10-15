<!--
Copyright 2017 Dora Tomljenovic <dxt5777>.
#Final Project   
-->
<?php
$pageName = 'Map';
include 'includes/head.php';
?>
<div id="main">
    <section id="section-map" class="global-container"> 

        <h1 class="map-title">Map</h1> 

        <p class="maps"> While our trip to Venice with friends, we have chosen the best places where tourists can go. Each place 
            where we went is marked on the this map. The most visited place in the city of Venice is the main Square in Venice St.Mark's's
            square. The other squires in Venice are not named as "Piazza", other squares are named "Campi". To have better view on each image I had
            located each place where we had been and provide the name in case if you would like to go there.
        </p>

        <div class="row">
            <div class="column">
                <img src="images/fenice.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="images/carneval.png" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="images/santalucia.png" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="images/food2.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            </div>
        </div>

        <div id="myMaps" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                    <img src="images/fenice.png" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                    <img src="images/carneval.png" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                    <img src="images/santalucia.png" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                    <img src="images/food2.png" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>


                <div class="column">
                    <img class="demo cursor" src="images/fenice.png" style="width:100%" onclick="currentSlide(1)" alt="Venice">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/carneval.png" style="width:100%" onclick="currentSlide(2)" alt="Carneval">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/santalucia.png" style="width:100%" onclick="currentSlide(3)" alt="Santa Lucia">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/food2.png" style="width:100%" onclick="currentSlide(4)" alt="Food">
                </div>
            </div>
        </div>

        <br><br>

    </section>

</div>    

<?php include 'includes/footer.php'; ?>