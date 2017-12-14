//getting all input text objects
var rno = document.forms["slogin"]["roll_no"];
var pass = document.forms["slogin"]["pass"];
var comname = document.forms["glogin"]["cname"];
var email = document.forms["glogin"]["email"];

//getting all error display objects
var rno_error = document.getElementById("rno_error");
var pass_error = document.getElementById("pass_error");
var comname_error = document.getElementById("comname_error");
var email_error = document.getElementById("email_error");

//setting all event listeners
rno.addEventListener("blur", rnoVerify, true);
pass.addEventListener("blur", passVerify, true);
email.addEventListener("blur", emailVerify, true);
comname.addEventListener("blur", cnameVerify, true);

//Validations for student login
function studentlogin() {
  if (rno.value == "") {
    rno_error.textContent = "Roll No. is required for login";
  }
  if (pass.value == "") {
    pass_error.textContent = "Password is required for login";
  }

  return false;
}

//event handler functions
function rnoVerify() {
  if (rno.value != "") {
    rno_error.innerHTML = "";
    return true;
  }
}
function passVerify() {
  if (pass.value != "") {
    pass_error.innerHTML = "";
    return true;
  }
}

//Validation for guest login
function guestlogin() {
  if (comname.value == "") {
    comname_error.textContent = "Your Company Name is required for login";
  }
  if (email.value == "") {
    email_error.textContent = "Your email id is required for login";
  }

  return false;
}
//event handler functions
function cnameVerify() {
  if (comname.value != "") {
    comname_error.innerHTML = "";
    return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email_error.innerHTML = "";
    return true;
  }
}
//changing field without input
function rnoy() {
  var rno = document.forms["slogin"]["roll_no"].value;
  if (rno == "") {
    rno_error.textContent = "Roll No. is required to login";

    console.log("hello");
  }
  return false;
  var rno = document.forms["slogin"]["roll_no"].value;
  if (rno != "") {
    rno_error.innerHTML = "";
    return true;
  }
}

function comnamea() {
  var comname = document.forms["glogin"]["cname"].value;
  if (comname == "") {
    comname_error.textContent = "Your Company Name is required for login";
    console.log("makad");
  }

  return false;
}

function emaily() {
  if (email.value == "") {
    email_error.textContent = "your email id is required for login";
  }

  return false;
}
