function rno(){
	
  var rno = document.forms["Personal"]["rno"].value;
  if (rno == "") {
    rno_error.textContent = "Roll No. is required for login";  
  }
  
  return false;
}