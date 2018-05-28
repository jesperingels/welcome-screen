/**
 * Created by jesperingels on 16-05-18.
 */

let inputValue = document.getElementById("userInput").value;

function name (klant){

    document.getElementById("name").textContent = klant;

}

name(inputValue);