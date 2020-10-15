/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//variables
var heading = "Venetian Food";
var headingSplit = heading.split("");
var element = document.getElementById('str');
function animate() { //function to animate text
headingSplit.length > 0 ? element.innerHTML += headingSplit.shift() : clearTimeout(running); 
var running = setTimeout(animate, 90);
};
