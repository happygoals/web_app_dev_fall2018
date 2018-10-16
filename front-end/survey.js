function moredetails() {
    /* Pops up a text area on the first question */
    if (document.getElementById('yes1').checked || document.getElementById('no1').checked) {
        document.getElementById('why-group1').style.visibility = 'visible';
    }
    else{
        document.getElementById('why-group1').style.visibility = 'hidden';
    }
     /* Pops up a text area on the second question */
    if (document.getElementById('yes2').checked || document.getElementById('no2').checked) {
        document.getElementById('why-group2').style.visibility = 'visible';
    }
    else{
        document.getElementById('why-group2').style.visibility = 'hidden';
    }
     /* Pops up a text area on the fourth question question */
    if (document.forms.chk1.other.checked) {
        document.getElementById('why-group3').style.visibility = 'visible';
    }
    else{
        document.getElementById('why-group3').style.visibility = 'hidden';
    }
}

function disable()
{   
    /* Allows the submit button to be either disabled or enabled */
    document.getElementById("submit").disabled = !document.getElementById("submit").disabled;
}

function validate()
{
	if (document.forms.survey.name.value == '')
	{
		alert("You must provide a user name!");
		return false;
	}
	else if (!document.forms.survey.email.value.match(/.+@.+\.edu$/))
	{
		alert("You must provide a .edu or .com email adddress!");
		return false;
	}
	return true;
}