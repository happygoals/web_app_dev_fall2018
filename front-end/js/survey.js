//Makes Element x viewable to the user and removes the y onject from vision
function expandCollapseBox(x, y) {
	document.getElementById(x).style.display = "block";
	document.getElementById(y).style.display = "none";
}

//Check the current visability of the x element, if visible makes it invisible, and if invisible makes visible
function expandCollapseBoxB(x) {
	if (document.getElementById(x).style.display == "none") {
		document.getElementById(x).style.display = "block";
	} else {
		document.getElementById(x).style.display = "none";
	}
}

//Makes the given object visible to the user.
function expandOnly(x){
	document.getElementById(x).style.display = "block";
}

//Makes the given object invisible to the user!
function collapseOnly(x){
	document.getElementById(x).style.display = "none";
}

//Updates a question dependant upon the combobox given
function updateCombo(x){
	if(document.getElementById("locations13") == document.getElementById(x)){
		var option = document.getElementById(x).options[document.getElementById(x).selectedIndex];
		if(option.value == ""){
			collapseOnly("question13.1");
			return;
		}
		else{
			expandOnly("question13.1");
		}
	}
	else if(document.getElementById("locations14") == document.getElementById(x)){
		var option = document.getElementById(x).options[document.getElementById(x).selectedIndex];
		if(option.value == ""){
			collapseOnly("question14.1");
			return;
		}
		else{
			expandOnly("question14.1");
		}
	}
}

//Disables the submit button if the checkbox is not checked, and reenables it if one is checked
function disable() {
	/* Allows the submit button to be either disabled or enabled */
	document.getElementById("submit").disabled = !document.getElementById("submit").disabled;
}

//Checks that at least one Radio button is checked out of a given radio button group
function isOneCheckedRadio(question) {
  var chx = question.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    if (chx[i].type == 'radio' && chx[i].checked) {
      return true;
    } 
  }
  return false;
}

//Checks that at least one Radio button is checked out of a given check box group
function isOneCheckedCheckbox(question) {
  var chx = question.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    if (chx[i].type == 'checkbox' && chx[i].checked) {
      return true;
    } 
  }
  return false;
}

//Checks that in a selected that a choice has been made, and that it is still not "Choose One"
function isOneCheckedCombo(question){
	var object = question.getElementsByTagName('select');
	var option = object[0].options[object[0].selectedIndex];
	if(option.value == ""){
			return false;
	}
	return true;
}

// Validates Email types
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
 return (false)
}

// Checks to see if a user only selected three options from a checkbox
function KeepCount() {
	var NewCount = 0
	
	if (document.joe.dog.checked) {
		NewCount = NewCount + 1
	}
	
	if (document.joe.cat.checked) {
		NewCount = NewCount + 1
	}
	
	if (document.joe.pig.checked) {
		NewCount = NewCount + 1
	}
	
	if (document.joe.ferret.checked) {
		NewCount = NewCount + 1
	}
	
	if (document.joe.hampster.checked) {
		NewCount = NewCount + 1
	}
	
	if (NewCount == 3) {
		alert('Pick Just Two Please')
		document.joe; return false;
	}
}

// Checks that the form has an answer to all questions, and if so allows the submission process to continue!
// It is important to note that text areas are not part of this validation testing, as we do not expect users
// to give us additional feedback in these cases, as it may be viewed as extra work to do.
function validate() {
	// Checks that Question 1 was completed
	if(isOneCheckedRadio(document.getElementById('question1')) == false){
		alert("You must select an answer for question 1!");
		return false;
	}
	// Checks that Question 2 was completed
	if(isOneCheckedRadio(document.getElementById('question2')) == false){
		alert("You must select an answer for question 2!");
		return false;
	}
	// Checks that Question 3 was completed
	if(isOneCheckedRadio(document.getElementById('question3')) == false){
		alert("You must select an answer for question 3!");
		return false;
	}
	else {
		if(document.getElementById('op3.0.0').checked == true){
			if(isOneCheckedRadio(document.getElementById('question3.2')) == false){
				alert("You must select an answer for question 3.2!");
				return false;
			}
		}
	}
	// Checks that Question 4 was completed
	if(isOneCheckedRadio(document.getElementById('question4')) == false){
		alert("You must select an answer for question 4!");
		return false;
	}
	else {
		if(document.getElementById('op4.0.0').checked == true){
			if(isOneCheckedRadio(document.getElementById('question4.2')) == false){
				alert("You must select an answer for question 4.2!");
				return false;
			}
		}
	}
	// Checks that Question 5 was completed
	if(isOneCheckedRadio(document.getElementById('question5')) == false){
		alert("You must select an answer for question 5!");
		return false;
	}
	// Checks that Question 6 was completed
	if(isOneCheckedRadio(document.getElementById('question6')) == false){
		alert("You must select an answer for question 6!");
		return false;
	}
	// Checks that Question 7 was completed
	if(isOneCheckedRadio(document.getElementById('question7')) == false){
		alert("You must select an answer for question 7!");
		return false;
	}
	// Checks that Question 8 was completed
	if(isOneCheckedRadio(document.getElementById('question8')) == false){
		alert("You must select an answer for question 8!");
		return false;
	}
	// Checks that Question 9 was completed
	if(isOneCheckedCheckbox(document.getElementById('question9')) == false){
		alert("You must select an answer for question 9!");
		return false;
	}
	// Checks that Questions 10 was completed
	if(isOneCheckedCheckbox(document.getElementById('question10')) == false){
		alert("You must select an answer for question 10!");
		return false;
	}
	// Checks that Question 11 was completed
	if(isOneCheckedRadio(document.getElementById('question11')) == false){
		alert("You must select an answer for question 11!");
		return false;
	}
	// Checks that Question 12 was completed
	if(isOneCheckedRadio(document.getElementById('question12')) == false){
		alert("You must select an answer for question 12!");
		return false;
	}
	// Checks that Question 13 was completed
	if(isOneCheckedCombo(document.getElementById('question13')) == false){
		alert("You must select an answer for question 13!");
		return false;
	}
	else{
		if(isOneCheckedCombo(document.getElementById('question13.1')) == false){
			alert("You must select an answer for question 13.1!");
			return false;
		}
	}
	// Checks that Question 14 was completed
	if(isOneCheckedCombo(document.getElementById('question14')) == false){
		alert("You must select an answer for question 14!");
		return false;
	}
	else{
		if(isOneCheckedCombo(document.getElementById('question14.1')) == false){
			alert("You must select an answer for question 14.1!");
			return false;
		}
	}
	// Checks that Question 15 was completed
	if(isOneCheckedRadio(document.getElementById('question15')) == false){
		alert("You must select an answer for question 15!");
		return false;
	}
	// Checks that the Name Field was completed
	if (document.forms.survey.name.value == '') {
		alert("You must provide your name!");
		return false;
	}
	// Checks that the Email Field was completed
	if (!document.forms.survey.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
		alert("You must provide an email adddress!");
		return false;
	}
	// Checks that the Email is a valid Email
	if (ValidateEmail(document.forms.survey.email.value) == false) {
		alert("The email address you provided is Invalid!");
		return false;
	}
}
