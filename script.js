var x = document.getElementById("tampilkan");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    document.getElementById('long').value = position.coords.longitude;
    document.getElementById('lat').value = position.coords.latitude;
    document.getElementById('latlong').value = (position.coords.latitude +","+ position.coords.longitude)
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}

// Copy
// function copy_text() {
//     document.getElementById("latlong").select();
//     document.execCommand("copy");
//     alert("Lokasi berhasil di Copy");
// }

function copy_text() {
    var copyText = document.getElementById("latlong");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);
    
  }

  function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "<i class='fa-regular fa-clipboard text-warning'></i>";
  }


//   Map
var map = null;
function showlocation() {
// One-shot position request.
navigator.geolocation.getCurrentPosition(callback);
}

function callback(position) {

var lat = position.coords.latitude;
var lon = position.coords.longitude;

document.getElementById('lat').innerHTML = lat;
document.getElementById('long').innerHTML = lon;

var latLong = new google.maps.LatLng(lat, lon);

var marker = new google.maps.Marker({
position: latLong
});

marker.setMap(map);
map.setZoom(8);
map.setCenter(marker.getPosition());
}

google.maps.event.addDomListener(window, 'load', initMap);
function initMap() {
var mapOptions = {
    center: new google.maps.LatLng(0, 0),
    zoom: 1,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
    map = new google.maps.Map(document.getElementById("map-canvas"),
    mapOptions);
}

