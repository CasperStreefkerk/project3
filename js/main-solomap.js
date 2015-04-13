/**
 * Created by Sven on 7-4-2015.
 */
$(init);

var openedWindow = null;
var counter = 0;
var liCounter = 0;
var statusList = $('#status-list');



/**
 * Init functie wordt geladen.
 */
function init() {
    getData({}, mapDrawing);
    getPlaylist({}, loadPlaylist);

    console.log("Init functie");
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

function getPlaylist(data, successCallback) {
    $.ajax({
        dataType: "json",
        url: 'php/playlist.php',
        data: data,
        success: successCallback
    });
}

function mapDrawing(data) {
    console.log(data);
    // De globale variables binnen de mapDrawing functie.
    // Deze zorgen voor de standaard positie en zoom van de map.
    var myLatlng = new google.maps.LatLng(51.91804109675677, 4.470727443695068);
    var mapOptions = {
        zoom: 16,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Dit zorgt er voor dat er een marker wordt geplaatst wanneer er op de map wordt geklikt.
    // Hiermee wordt er later gecheckt of deze zich bevind binnen een polygon.
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
    });

    // Dit is de foreach loop die alle markers op de map gaat wegschrijven.
    $.each(data, function (index, value) {
        // alle variabelen voor de markers.
        console.log("foreach loop");
        var imgLocation = new google.maps.LatLng(value.latitude, value.longitude);
        var newMarker = new google.maps.Marker({
            position: imgLocation,
            map: map,
            animation: google.maps.Animation.DROP
        });
        var markerContent = "<h3>"+value.location_name+"</h3>" +
                            "<p>"+value.description+"</p>";

        var infowindow = new google.maps.InfoWindow({
            content: markerContent
        });

        setPolygon(value, map);
        windowManager(newMarker, infowindow, map);
        if(liCounter < 4){
            liCounter++;
        }
        var newLi = $('<li>', {text: value.location_name});
        //newLi.css({color: 'red'});
        newLi.addClass('li'+liCounter);
        statusList.append(newLi);
        statusList.children().addClass('list-group-item list-group-item-danger');
    });
}

// Deze functie creeërt bij iedere marker een polygon, waarmee later gecheckt wordt of de persoon binnen het gebied is.
function setPolygon(value, map){
    //alle variabelen voor het creëren van polygonen.
    var square = [
        parseFloat(value.latitude) + 0.000075, parseFloat(value.longitude) - 0.00015,
        parseFloat(value.latitude) + 0.000075, parseFloat(value.longitude) + 0.00015,
        parseFloat(value.latitude) - 0.000075, parseFloat(value.longitude) + 0.00015,
        parseFloat(value.latitude) - 0.000075, parseFloat(value.longitude) - 0.00015
    ];
    var polygon;

    var triangleCoords = [
        new google.maps.LatLng(square[0], square[1]),
        new google.maps.LatLng(square[2], square[3]),
        new google.maps.LatLng(square[4], square[5]),
        new google.maps.LatLng(square[6], square[7]),
        new google.maps.LatLng(square[0], square[1])
    ];

    // Construct the polygon.
    polygon = new google.maps.Polygon({
        paths: triangleCoords,
        strokeColor: '#FF0000',
        fillColor: "red",
        strokeOpacity: 0.8,
        strokeWeight: 2
    });
    google.maps.event.addListener(polygon, 'click', function (e) {
        console.log("Marker Created!");
        var latitude = e.latLng.lat();
        var longitude = e.latLng.lng();

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude),
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP
        });
        console.log(latitude + ', ' + longitude);
        if(polygon.fillColor == 'red'){
            if(google.maps.geometry.poly.containsLocation(e.latLng, polygon)){
                console.log("Inside Polygon");
                polygon.setOptions({strokeColor: 'green', fillColor: 'green'});
                counter++;
                if(value.location_name == $('.li1').text()){
                    $('.li1').removeClass('list-group-item list-group-item-danger');
                    $('.li1').addClass('list-group-item list-group-item-success');
                }
                if(value.location_name == $('.li2').text()){
                    $('.li2').removeClass('list-group-item list-group-item-danger');
                    $('.li2').addClass('list-group-item list-group-item-success');
                }
                if(value.location_name == $('.li3').text()){
                    $('.li3').removeClass('list-group-item list-group-item-danger');
                    $('.li3').addClass('list-group-item list-group-item-success');
                }
                if(value.location_name == $('.li4').text()){
                    $('.li4').removeClass('list-group-item list-group-item-danger');
                    $('.li4').addClass('list-group-item list-group-item-success');
                }
                if(counter == 4){
                    $('#')
                    getPlaylist({}, loadPlaylist);
                }
            }
        }
        // Center of map
        map.panTo(new google.maps.LatLng(latitude, longitude));
    });
    polygon.setMap(map);
}


// Dit zorgt er voor dat er maar op 1 marker tegelijk geklikt kan worden.
// Als er op een tweede marker wordt geklikt, sluit de eerste.
function windowManager(marker, window, map){
    google.maps.event.addListener(marker, 'click', function () {
        if (openedWindow !== null)
            openedWindow.close();
        window.open(map, marker);
        openedWindow = window;
        google.maps.event.addListener(window, 'closeclick', function () {
            openedWindow = null;
        });
        google.maps.event.addListener(map, 'click', function () {
            window.close();
        });
    });
}

function loadPlaylist(data){
    console.log(data);
    if($('#tracks' != "")){
        $.each(data, function(i, value){
            var li = $('<li>', {text: value.track});
            li.addClass('list-group-item list-group-item-danger');
            $('#tracks').append(li);
        });
    }
    if(counter == 4){
        $('#tracks').empty();
        $.each(data, function(i, value){
            var link = '<li><a href="'+value.url +'">' + value.track + '</a></li>';
            $('#tracks').append(link);
            $('#tracks').children().addClass('list-group-item list-group-item-success');
        });
    }
}


