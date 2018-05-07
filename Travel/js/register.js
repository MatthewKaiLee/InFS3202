function checkValidRegister() {
	if(document.forms["registerinfo"]["fname"].value == "") {
		alert("Please enter your first name!");
		$("errfname").innerHTML = "Please enter your first name!";
		document.forms["registerinfo"]["fname"].focus();
		return false;
	} else {
		if(document.forms["registerinfo"]["fname"].value.length > 20) {
			alert("Your first name might be a bit long!");
			document.forms["registerinfo"]["fname"].focus();
			return false;
		}
	}
	if(document.forms["registerinfo"]["lname"].value == "") {
		alert("Please enter your last name!");
		document.forms["registerinfo"]["lname"].focus();
		return false;
	} else {
		if(document.forms["registerinfo"]["lname"].value.length > 20) {
			alert("Your last name might be a bit long!");
			document.forms["registerinfo"]["lname"].focus();
			return false;
		}
	}
	if(document.forms["registerinfo"]["username"].value == "") {
		alert("Please enter your username!");
		document.forms["registerinfo"]["username"].focus();
		return false;
	} else {
		if(document.forms["registerinfo"]["username"].value.length < 3 ||document.forms["registerinfo"]["username"].value.length > 20) {
			alert("Your username should be between 3 and 20 characters!");
			document.forms["registerinfo"]["username"].focus();
			return false;
		}
	}
	if(!checkPassword(document.forms["registerinfo"]["password"].value, document.forms["registerinfo"]["confirmpassword"].value)) {	
		return false;
	}

	if(!checkEmail(document.forms["registerinfo"]["email"].value)) {
		return false;
	}
	return true;
}

function checkPassword(password1, password2) {
	if(password1 == '') {
		alert("password cannot be empty!");
		return false;
	}
	if(password2 == '') {
		alert("comfirmpassword cannot be empty!");
		return false;
	}
	if(password1.length < 5 || password1.length > 18) {
		alert("the length of password can only between5 and 18!");
		return false;
	}
	if(password1 != password2) {
		alert("password and the comfirm password are not the same!");
		return false;
	}
	return true;
}

function checkEmail(email) {
	var regular = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(regular.test(email)) {
		return true;
	}
	alert("email is invalid!");
	return false;
}