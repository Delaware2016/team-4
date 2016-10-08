function initMap() {
    var currLoc = {lat:  39.784086, lng: -75.549027};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: currLoc
    });
    var marker = new google.maps.Marker({
        position: currLoc,
        map: map,
        title: 'Some type of event here'
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    var contentString = "hello"; 

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
}