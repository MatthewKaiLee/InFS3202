function getSelectedPlace() {
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		var myObj = JSON.parse(this.responseText);
    		document.getElementById("frame").src = "https://www.youtube.com/embed/" + (myObj.items)[0].id.videoId;
    		document.getElementById("frame").height = (myObj.items)[0].snippet.thumbnails.high.height;
    		document.getElementById("frame").width = (myObj.items)[0].snippet.thumbnails.high.width;
    	}
    };
    xmlhttp.open("GET", "youtubedata.php?place=" + document.getElementById("place").value, true);
    xmlhttp.send();
}