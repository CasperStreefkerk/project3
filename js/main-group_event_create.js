/**
 * Created by Sven on 7-4-2015.
 */
$(init);

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
        // Center of map
        map.panTo(new google.maps.LatLng(latitude, longitude));

        $('#input-latitude1').val(latitude);
        $('#input-longitude1').val(longitude);
    })
}