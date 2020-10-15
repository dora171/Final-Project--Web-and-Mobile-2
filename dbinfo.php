<!--
Copyright 2017 Dora Tomljenovic <dxt5777>.
#Final Project   
-->
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$localhost = "localhost";
$username = "dxt5777";
$password = "prettybreak";
$dbName = "dxt5777";

$dbLink = mysqli_connect($localhost, $username, $password); //connecting to database

if (!$dbLink) {

    die("Not connected: " . mysqli_connect());
}

mysqli_select_db($dbLink, $dbName);




