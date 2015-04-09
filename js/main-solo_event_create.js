/**
 * Created by Sven on 7-4-2015.
 */
$(init);

function init(){
    mapping();
}

function mapping(){
        console.log('hoi');
        // De globale variables binnen de mapDrawing functie.
        // Deze zorgen voor de standaard positie en zoom van de map.
        var myLatlng = new google.maps.LatLng(51.91804109675677, 4.470727443695068);
        var mapOptions = {
            zoom: 16,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}