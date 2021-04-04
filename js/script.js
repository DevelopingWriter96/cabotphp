"use strict";

var test = location.href;
console.log(test);

var resultsArray = test.split('/');
console.log(resultsArray);


var numberOfParts = resultsArray.length;
console.log(numberOfParts);

var pieceIwant = resultsArray[numberOfParts - 1];
console.log('>>>>>>>>>'+pieceIwant);

var test2 = document.querySelectorAll("ul#primaryNav li a");
console.log(test2);
console.log(test2[0].getAttribute("href"));


function toggleMenu(){
    
    document.getElementById("primaryNav").classList.toggle("hide");
}