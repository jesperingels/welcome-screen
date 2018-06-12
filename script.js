/**
 * Created by jesperingels on 16-05-18.
 */
/* //un-comment deze zooi om het weer te laten werken
function getUserData() {
    let request = new XMLHttpRequest();
    request.open('GET', '/welcome-screen/past.php', true);

    request.onload = function () {
        if (request.status >= 200 && request.status < 400) {
            //console.log(request.responseText);
            let data = JSON.parse(request.responseText);
            // Het is gelukt!
            name(data);
            //console.log(request);

        } else {
            console.log('de server is bereikt, maar daarna is er iets misgegaan');
            // De server is bereikt, maar daarna is iets misgegaan
        }
    };
    request.onerror = function () {
        console.log('er kon geen verbinding gemaakt worden met de server');
// Er kon geen verbinding gemaakt worden met de server.
    };
    request.send();
}
getUserData();

function name(jsonData) {

    //for (let i = 0; i < jsonData.length; i++) {
        // i gaat van 0 tot de lengte van jsonData
        // we zoeken ‘nummer i’ uit jsonData en slaan dat item op in object
        let object = jsonData;
        //console.log( object );

    }
}


let inputValue = 'hans';

function work (klant){

    document.getElementById("var_name").innerText = klant;

}

work(inputValue);
