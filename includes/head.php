<!--
Copyright 2017 Dora Tomljenovic <dxt5777>.
#Final Project

Created on : Oct 2, 2017, 3:36:20 PM
Author     : Dora Tomljenovic

-->

<!DOCTYPE html>
<html lang="en" <?php
if ($pageName == 'Food') {

    echo 'class="food"';
}
?>
    <head>

        <title><?php echo $pageName; ?></title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS  -->
        <link rel="stylesheet" type="text/css" href="css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>

        <?php
        if ($pageName == 'Map') {

            echo '<link rel="stylesheet" type="text/css" href="css/maps.css"/>';
        } if ($pageName == 'Gallery') {

            echo '<link rel="stylesheet" type="text/css" href="css/gallery.css"/>';
        }
        ?>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/queries.css"/>

        <script src="js/activeNav.js" type="text/javascript"></script>
        <script src="js/nav.js" type="text/javascript"></script>
        <!-- FONTS  -->
        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

    </head>
    <body 
    <?php
    if ($pageName == 'Food') {

        echo 'onload="animate()"';
    }
    ?>>
            <?php
            if ($pageName == 'Venice') {

                echo '<div id="wrapper">';
            }
            ?>

        <!-- NAVIGATION  -->       
        <div id="container">
            <div class="topnav" id="myTopnav">
                <a href="index.php">Home</a>
                <a href="history.php">History</a>
                <a href="food.php">Food</a>
                <a href="culture.php">Culture</a>
                <a href="gallery.php">Gallery</a>
                <a href="map.php">Map</a>
                <a href="people.php">People</a>
                <a href="architecture.php">Architecture</a>
                <a href="comments.php">Comments</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        