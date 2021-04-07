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

var i;

for (i=0; i<test2.length; i++) {
    var myPage = test2[i].getAttribute("href");
console.log(myPage);

if(pieceIwant === myPage) {
    test2[i].className="parent";
    alert("Match Found! " + myPage);
}
}

function toggleMenu(){
    
    document.getElementById("primaryNav").classList.toggle("hide");
}