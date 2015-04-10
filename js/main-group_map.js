$(init);

var openedWindow = null;

function init() {
    getData({}, mapDrawing);
    console.log("Init functie");
}
/**
 * Data wordt met AJAX uit PHP bestand gehaald.
 */
function getData(data, successCallback) {
    $.ajax({
        dataType: "json",
        url: 'php/groupmap_mapdata.php',
        data: data,
        success: successCallback
    });
}

function mapDrawing(data) {
    console.log(data);
    // De globale variables binnen de mapDrawing functie.
    // Deze zorgen voor de standaard positie en zoom van de map.
    var myLatlng = new google.maps.LatLng(51.91710803113037, 4.483875632286072);
    var mapOptions = {
        zoom: 16,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


    // Dit is de foreach loop die alle markers op de map gaat wegschrijven.
    $.each(data, function (index, value) {
        // alle variabelen voor de markers.
        console.log("foreach loop");
        var imgLocation = new google.maps.LatLng(value.latitude, value.longitude);
        var marker = new google.maps.Marker({
            position: imgLocation,
            map: map,
            animation: google.maps.Animation.DROP
        });
        var markerContent = "<h3>"+value.location_name+"</h3>" +
            "<p>"+value.description+"</p>";

        var infowindow = new google.maps.InfoWindow({
            content: markerContent
        });

        // Hier wordt de info gepusht in de div. Als je zelf hardcoded erin wilt zetten moet je dit stukje weghalen.
        //=========================================================================================================
        var headerElement = $('<h3>', {text: value.location_name});
        var p = $('<p>', {text: value.description});
        $('#event-info').append(headerElement, p);
        //=========================================================================================================

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

    });
}
