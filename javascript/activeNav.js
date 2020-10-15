/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//funtion to make active navigation
window.onload = function () {

    var pagelist = location.href;
    
    console.log(pagelist);

    var topnav = document.getElementsByTagName("a");

    for (var i = 0; i < topnav.length; i++) {

        if (topnav[i].href === pagelist) {

            topnav[i].className = "active";
        }
    }
};



