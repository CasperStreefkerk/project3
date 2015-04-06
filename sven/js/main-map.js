<!--Volgorde bij programmeren: (allemaal must haves)-->
<!--1.Markers worden vanuit een database ingeladen.   CHECK-->
<!--2.De gebruiker kan de map bekijken inclusief de markers. CHECK-->
<!--3.Als er op een marker geklikt word staat er meer informatie. CHECK-->
<!--4.Onderscheid in markers, bij verschillende activiteiten.-->
<!--5.Er kunnen markers aan de map toegevoegd worden door de admin. IN PROGRESS-->
<!--6.Er word bijgehouden welke plaatsen zijn bezocht en welke niet.-->
<!--Coördinaten Oosterland 51.646238702, 4.035122203 voor testen-->
$(init);
var openedWindow = null;
/**
 * Init functie wordt geladen.
 */
function init() {
    getData({}, setMarkers);
}

/**
 * Data wordt met AJAX uit PHP bestand gehaald.
 */
function getData(data, successCallback) {
    $.ajax({
        dataType: "json",
        url: 'php/mapdata.php',
        data: data,
        success: successCallback
    });
}

function setMarkers(data) {
    console.log(data);
    var myLatlng = new google.maps.LatLng(51.646238702, 4.035122203);
    var mapOptions = {
        zoom: 17,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Dit zorgt er voor dat er een marker wordt geplaatst wanneer er op de map wordt geklikt.
    google.maps.event.addListener(map, "click", function(e){
        console.log("Marker Created!");
        var latitude = e.latLng.lat();
        var longitude = e.latLng.lng();
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            map: map,
            draggable: true,
            editable: true,
            animation: google.maps.Animation.DROP
        });
        console.log( latitude + ', ' + longitude );

        // Center of map
        map.panTo(new google.maps.LatLng(latitude,longitude));
        $('#input-latitude').val(latitude);
        $('#input-longitude').val(longitude);
    });

    // Hier worden alle markers ingeladen vanuit de database.
    $.each(data, function (index, value) {
        // alle variabelen voor de markers.
        var imgLocation = new google.maps.LatLng(value.latitude, value.longitude);

        var newMarker = new google.maps.Marker({
            position: imgLocation,
            map: map,
            animation: google.maps.Animation.DROP
        });

        var markerContent = value.locatie;

        var infowindow = new google.maps.InfoWindow({
            content: markerContent
        });

        // alle variabelen voor het creëren van polygonen.
        var test = [
            parseFloat(value.latitude)+0.00015, parseFloat(value.longitude)-0.00015,
            parseFloat(value.latitude)+0.00015, parseFloat(value.longitude)+0.00015,
            parseFloat(value.latitude)-0.00015, parseFloat(value.longitude)+0.00015,
            parseFloat(value.latitude)-0.00015, parseFloat(value.longitude)-0.00015
        ];
        var polygon;

        var triangleCoords = [
            new google.maps.LatLng(test[0], test[1]),
            new google.maps.LatLng(test[2], test[3]),
            new google.maps.LatLng(test[4], test[5]),
            new google.maps.LatLng(test[6], test[7]),
            new google.maps.LatLng(test[0], test[1])
        ];

        // Construct the polygon.
        polygon = new google.maps.Polygon({
            paths: triangleCoords,
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: 'grey',
            fillOpacity: 0.35
        });

        //containsLocation(value.latitude,value.longitude,Polygon);
        polygon.setMap(map);


        // Dit zorgt er voor dat er maar op 1 marker tegelijk geklikt kan worden.
        // Als er op een tweede marker wordt geklikt, sluit de eerste.
        google.maps.event.addListener(newMarker, 'click', function () {
            if (openedWindow !== null)
                openedWindow.close();
            infowindow.open(map, newMarker);
            openedWindow = infowindow;
            google.maps.event.addListener(infowindow, 'closeclick', function () {
                openedWindow = null;
            });
            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });
        });
    });
}

function createMarker(e){
    console.log("Marker Created!");
    var latitude = e.latLng.lat();
    var longitude = e.latLng.lng();
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
        draggable: true,
        editable: true,
        animation: google.maps.Animation.DROP
    });
    console.log( latitude + ', ' + longitude );

    radius = new google.maps.Circle({map: map,
        radius: 100,
        center: event.latLng,
        fillColor: '#777',
        fillOpacity: 0.1,
        strokeColor: '#AA0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        draggable: true,    // Dragable
        editable: true      // Resizable
    });

    // Center of map
    map.panTo(new google.maps.LatLng(latitude,longitude));
}
google.maps.event.addDomListener(window, 'load', init);

//Gedrag LatLng:
//Latitude + 0,0001 = naar boven
//Latitude - 0,0001 = naar beneden
//Longitude + 0,0001 = naar rechts
//Longitude - 0,0001 = naar links

//24.886436490787712, -70.2685546875 marker locatie:
//marker 1 (25.774252, -80.190262) 24
//marker 2 (18.466465, -66.118292)
//marker 3 (32.321384, -64.75737)
//marker 4 (25.774252, -80.190262)

//var marker1lat = parseFloat(value.latitude)+ 0.0001;
//var marker1long = parseFloat(value.longitude);
//
//var marker2lat = parseFloat(value.latitude)+ 0.00005;
//var marker2long = parseFloat(value.longitude)+ 1;
//
//var marker3lat = parseFloat(value.latitude)- 0.00005;
//var marker3long = parseFloat(value.longitude)+ 1;
//
//var marker4lat = parseFloat(value.latitude)- 0.0001;
//var marker4long = parseFloat(value.longitude);
//
//var marker5lat = parseFloat(value.latitude)- 0.00005;
//var marker5long = parseFloat(value.longitude)- 1;
//
//var marker6lat = parseFloat(value.latitude)+ 0.00005;
//var marker6long = parseFloat(value.longitude)- 1;


