function moredetails() {
    if (document.getElementById('yes1').checked || document.getElementById('no1').checked) {
        document.getElementById('why-group1').style.visibility = 'visible';
    }
    else{
        document.getElementById('why-group1').style.visibility = 'hidden';
    }
    if (document.getElementById('yes2').checked || document.getElementById('no2').checked) {
        document.getElementById('why-group2').style.visibility = 'visible';
    }
    else{
        document.getElementById('why-group2').style.visibility = 'hidden';
    }
    if (document.forms.chk1.other.checked) {
        document.getElementById('why-group3').style.visibility = 'visible';
    }
    else{
        document.getElementById('why-group3').style.visibility = 'hidden';
    }
}

function validate()
{
	if (document.forms.survey.name.value == '')
	{
		alert("You must provide a user name!");
		return false;
	}
	else if (!document.forms.survey.email.value.match(/.+@.+\.edu$/) || !document.forms.survey.email.value.match(/.+@.+\.com$/))
	{
		alert("You must provide a .edu or .com email adddress!");
		return false;
	}
	return true;
}