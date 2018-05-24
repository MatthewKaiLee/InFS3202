var map = null;
function initMap() {
 map = new google.maps.Map(document.getElementById('map'), {
  center: new google.maps.LatLng(-27.497854, 153.013286),
  zoom: 12
});

}

function getSearchPlace() {
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myObj = this.responseXML;
        if(myObj.getElementsByTagName("status")[0].childNodes[0].nodeValue == "OK") {
          map.setCenter(new google.maps.LatLng(myObj.getElementsByTagName("lat")[0].childNodes[0].nodeValue, myObj.getElementsByTagName("lng")[0].childNodes[0].nodeValue));
          map.setZoom(8);
        }
      }
    };
    var text = document.getElementById("Googleplace").value;
    var result = "";
    for(var i = 0; i < text.length; i++) {
      if((text[i] >= 65 && text[i] <= 90) || (text[i] >= 97 && text[i] <= 122)) {
        result += text[i];
      } else {
        result += '+';
      }
    }
    xmlhttp.open("GET", "googlePlace.php?query="+text, true);
    xmlhttp.send();
}