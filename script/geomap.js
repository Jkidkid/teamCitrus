//Create the variables that will be used within the map configuration options.
//The latitude and longitude of the center of the map.
//The degree to which the map is zoomed in. This can range from 0 (least zoomed) to 21 and above (most zoomed).
var festivalMapZoom = 16;
//The max and min zoom levels that are allowed.
var festivalMapZoomMax = 21;
var festivalMapZoomMin = 6;

//These options configure the setup of the map.
var festivalMapOptions = {
		  center: {lat: 0, lng: 0},
          zoom: festivalMapZoom,
		  //The type of map. In addition to ROADMAP, the other 'premade' map styles are SATELLITE, TERRAIN and HYBRID.
          mapTypeId: google.maps.MapTypeId.ROADMAP,
		  maxZoom:festivalMapZoomMax,
		  minZoom:festivalMapZoomMin,
		  //Turn off the map controls as we will be adding our own later.
		  panControl: false,
		  mapTypeControl: false,
};

//Create the variable for the main map itself.
var festivalMap;

//When the page loads, the line below calls the function below called 'loadFestivalMap' to load up the map.
google.maps.event.addDomListener(window, 'load', loadFestivalMap);



//THE MAIN FUNCTION THAT IS CALLED WHEN THE WEB PAGE LOADS --------------------------------------------------------------------------------
function loadFestivalMap() {

//The empty map variable ('festivalMap') was created above. The line below creates the map, assigning it to this variable. The line below also loads the map into the div with the id 'festival-map' (see code within the 'body' tags below), and applies the 'festivalMapOptions' (above) to configure this map.
festivalMap = new google.maps.Map(document.getElementById("festival-map"), festivalMapOptions);
if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
          	var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
				festivalMap.setCenter(pos);
				console.log(pos);
			});
		}


//Calls the function below to load up all the map markers.
loadMapMarkers();

}



//Function that loads the map markers.
function loadMapMarkers (){

//GLASTONBURY -----------------


//Setting the position of the Glastonbury map marker.
var markerPositionGlastonbury = new google.maps.LatLng(59.246070, 17.823122);


//Creating the Glastonbury map marker.
markerGlastonbury = new google.maps.Marker({
      //uses the position set above.
	  position: markerPositionGlastonbury,
	  //adds the marker to the map.
      map: festivalMap,
      title: 'Norsborg Getaway',
      icon: 'pins/blue_MarkerB.png'
});

var markerKatrineholm = new google.maps.LatLng(59.313384, 18.110068);


//Creating the Glastonbury map marker.
markerKatrineholm = new google.maps.Marker({
      //uses the position set above.
	  position: markerKatrineholm,
	  //adds the marker to the map.
      map: festivalMap,
      title: 'Katrineholm Hellgate',
      icon: 'pins/red_MarkerC.png',

});


// marker onclick

let clueContainer = document.getElementById("clue");
let button = document.getElementById("b");
google.maps.event.addListener(markerKatrineholm, 'click', function(){
	clueContainer.style.display = "block";
});

clueContainer.addEventListener('click', function() {
	clueContainer.style.display = "none";
});


var markerEskilstuna = new google.maps.LatLng(59.371249, 16.509805);


//Creating the Glastonbury map marker.
markerEskilstuna = new google.maps.Marker({
      //uses the position set above.
	  position: markerEskilstuna,
	  //adds the marker to the map.
      map: festivalMap,
      title: 'E-tuna',
      icon: 'pins/green_MarkerD.png'
});

var markerUppsala = new google.maps.LatLng(59.858564, 17.638927);


//Creating the Glastonbury map marker.
markerUppsala = new google.maps.Marker({
      //uses the position set above.
	  position: markerUppsala,
	  //adds the marker to the map.
      map: festivalMap,
      title: 'Uppsala wonderful',
      icon: 'pins/orange_MarkerE.png'
});
}



function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(callback) {
            showPosition(callback)
        }, function(error) {
            console.log(error)
        });
    }
}
function showPosition(position) {
    markerPositionSELF = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
    markerSELF = new google.maps.Marker({
        position: markerPositionSELF,
        map: festivalMap,
        title: 'Here',
        icon: 'pins/pink_MarkerA.png'
});
}
getLocation();
