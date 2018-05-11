/*function userProfile(username) {
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var xml = this.responseXML;
        	var response = xml.getElementsByTagName("page");
        	console.log(response[0].getElementsByTagName("div"));
            document.getElementById("profile").appendChild(response[0].getElementsByTagName("div"));
        }
    };
    xmlhttp.open("GET", "changePage.php?username=" + username + "&page=userprofile", true);
    xmlhttp.send();
}

function editProfile(username) {
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var xml = this.responseXML;
        	var response = xml.getElementsByTagName("page");
            document.getElementById("profile").innerHTML = response[0].getAttribute("div");
        }
    };
    xmlhttp.open("GET", "changePage.php?username=" + username + "&page=editprofile", true);
    xmlhttp.send();
}

function changePassword(username) {
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var xml = this.responseXML;
        	var response = xml.getElementsByTagName("page");
            document.getElementById("profile").innerHTML = response[0].getAttribute("div");
        }
    };
    xmlhttp.open("GET", "changePage.php?username=" + username + "&page=changepassword", true);
    xmlhttp.send();
}*/

function userProfile() {
    /*(document.getElementById('profile').getElementsByTagName("h3"))[0].innerHTML = "User Profile";
    ((document.getElementById('profile').getElementsByTagName("div"))[0].getElementsByTagName("h4"))[0].innerHTML = "First Name:";
    ((document.getElementById('profile').getElementsByTagName("div"))[0].getElementsByTagName("div"))[0].innerHTML = fname;
    ((document.getElementById('profile').getElementsByTagName("div"))[1].getElementsByTagName("div"))[0].innerHTML = lname;
    ((document.getElementById('profile').getElementsByTagName("div"))[2].getElementsByTagName("div"))[0].innerHTML = username;
    ((document.getElementById('profile').getElementsByTagName("div"))[3].getElementsByTagName("div"))[0].innerHTML = email;*/
    document.getElementById("profile").innerHTML = "";
    document.getElementById("profile").appendChild("<h3>User Profile</h3>");

}

function editProfile() {
    (document.getElementById('profile').getElementsByTagName("h3"))[0].innerHTML = "Edit Profile";
}