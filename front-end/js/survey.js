function expandCollapseBox(x, y) {
	document.getElementById(x).style.display = "block";
	document.getElementById(y).style.display = "none";
}

function expandCollapseBoxB(x) {
	if (document.getElementById(x).style.display == "none") {
		document.getElementById(x).style.display = "block";
	} else {
		document.getElementById(x).style.display = "none";
	}
}

function disable() {
	/* Allows the submit button to be either disabled or enabled */
	document.getElementById("submit").disabled = !document.getElementById("submit").disabled;
}

function isOneCheckedRadio(x) {
  // All <input> tags...
  var form = x;
  var chx = x.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    // If you have more than one radio group, also check the name attribute
    // for the one you want as in && chx[i].name == 'choose'
    // Return true from the function on first match of a checked item
    if (chx[i].type == 'radio' && chx[i].checked) {
      return true;
    } 
  }
  // End of the loop, return false
  return false;
}

function isOneCheckedCheckbox(x) {
  // All <input> tags...
  var form = x;
  var chx = x.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    // If you have more than one radio group, also check the name attribute
    // for the one you want as in && chx[i].name == 'choose'
    // Return true from the function on first match of a checked item
    if (chx[i].type == 'checkbox' && chx[i].checked) {
      return true;
    } 
  }
  // End of the loop, return false
  return false;
}

function validate() {
	// Checks all Question 1 inputs
	if(isOneCheckedRadio(document.getElementById('question1')) == false){
		alert("You must select an answer for question 1!");
		return false;
	}
	else {
		if(document.getElementById('yes1').checked == true){
			if(isOneCheckedRadio(document.getElementById('question1.2')) == false){
				alert("You must select an answer for question 1's sub-question!");
				return false;
			}
		}
	}
	// Checks all Question2 inputs
	if(isOneCheckedRadio(document.getElementById('question2')) == false){
		alert("You must select an answer for question 2!");
		return false;
	}
	else {
		if(document.getElementById('yes2').checked == true){
			if(isOneCheckedRadio(document.getElementById('question2.2')) == false){
				alert("You must select an answer for question 2's sub-question!");
				return false;
			}
		}
	}
	// Checks all Question3 inputs
		if(isOneCheckedRadio(document.getElementById('question3')) == false){
		alert("You must select an answer for question 3!");
		return false;
	}
	//Check all Question4 inputs
	if(isOneCheckedCheckbox(document.getElementById('question4')) == false){
		alert("You must select an answer for question 4!");
		return false;
	}
	//Check all Question5 inputs
	if(isOneCheckedRadio(document.getElementById('question5')) == false){
		alert("You must select an answer for question 5!");
		return false;
	}
	//Check all Question6 inputs
	if(isOneCheckedRadio(document.getElementById('question6')) == false){
		alert("You must select an answer for question 6!");
		return false;
	}
	//Check Name and Email inputs
	if (document.forms.survey.name.value == '') {
		alert("You must provide your name!");
		return false;
	} else if (!document.forms.survey.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
		alert("You must provide a your email adddress!");
		return false;
	}
	return true;
}