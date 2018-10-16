function expandCollapseBox(x, val) {
    if (val == 1) {
        document.getElementById(x).style.display = "block";
    }
    else {
        document.getElementById(x).style.display = "none";
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