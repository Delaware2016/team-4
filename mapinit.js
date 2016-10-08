var eventMarker = function (long,lat,mark,info) { // instantiate new "class" in JS for event marker 
      this.latitude=lat;
      this.longitude=long;
      // this.name="";
      // this.Description="";
      this.marker = mark;
      this.infoWindow = info; 
};

function initMap() {
  
    var latitudes = [39.784086,39.788194,39.780740];
    var longitudes = [-75.549027,-75.545310,-75.544199];
    var i = 0;
    var currLoc = {lat:  latitudes[i], lng: longitudes[i]};
      
    var markers = [];
    
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: currLoc
    });

    var marker;
    
    
    for(i = 0; i<latitudes.length;i++){ // for loop for a bunch of new markers 
      currLoc = {lat:  latitudes[i], lng: longitudes[i]};
      
      marker = new google.maps.Marker({ 
        position: currLoc,
        map: map,
        title: 'Some type of event here'
      });
      
      var contentString = "hello";  
      
      // var infoWindow = new google.maps.InfoWindow({
    //    content: contentString
      // });
      
      marker.addListener('click',function(){new google.maps.InfoWindow({content: contentString}).open(map,this)});
      
      // markers[i] = marker;
      //markers.push(new eventMarker(latitudes[i],longitudes[i],marker,infoWindow));
      markers.push(marker);
    }
    
  
    //marker.addListener('click', function() {
    //    infowindow.open(map, marker);
    //});
  
    

    
}