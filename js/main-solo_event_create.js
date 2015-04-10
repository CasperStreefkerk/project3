/**
 * Created by Sven on 7-4-2015.
 */
$(init);

var counter = 0;
var markers = [];

/**
 * Init functie wordt geladen.
 */

function init() {
    setMarkers();
}

function setMarkers() {
    var myLatlng = new google.maps.LatLng(51.91804109675677, 4.470727443695068);
    var mapOptions = {
        zoom: 12,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Dit zorgt er voor dat er een marker wordt geplaatst wanneer er op de map wordt geklikt.
    google.maps.event.addListener(map, "click", function (e) {
        console.log("Marker Created!");
        var latitude = e.latLng.lat();
        var longitude = e.latLng.lng();
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            map: map,
            editable: true,
            animation: google.maps.Animation.DROP
        });
        console.log(latitude + ', ' + longitude);
        markers.push(marker);
        console.log(markers);
        // Center of map
        map.panTo(new google.maps.LatLng(latitude, longitude));
        if(counter < 4){
            counter++;
            console.log(counter);
            if(counter == 1){
                $('#input-latitude1').val(latitude);
                $('#input-longitude1').val(longitude);
            }
            if(counter == 2){
                $('#input-latitude2').val(latitude);
                $('#input-longitude2').val(longitude);
            }
            if(counter == 3){
                $('#input-latitude3').val(latitude);
                $('#input-longitude3').val(longitude);
            }
            if(counter == 4){
                $('#input-latitude4').val(latitude);
                $('#input-longitude4').val(longitude);
            }
        }
    });
}
