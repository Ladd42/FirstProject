function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: {lat: -24.345, lng: 134.46}  // Australia.
    });

    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer({
        draggable: true,
        map: map,
        panel: document.getElementById('right-panel')
    });


    displayRoute('Aberdeen, Scotland', 'Portlethen, Scotland', directionsService,
        directionsDisplay);
}

function displayRoute(origin, destination, service, display) {
    service.route({
        origin: origin,
        destination: destination,
        waypoints: [{location: 'Torry, Scotland'}, {location: 'Cove Bay, Scotland'}],
        travelMode: 'WALKING',
        avoidTolls: true
    },
}
