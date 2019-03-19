/*	The function loops through all form elements (except type='submit') and extract their values
 *	shows confirmation dialog box with a message that include all form elements values
 *	prevents submitting the form when user click cancel button.
 */
function confirmForm(){
	postalCode = document.querySelector('input[name=postalcode]');
	if (!isValid(postalCode.value)){
		event.preventDefault();
		postalCode.classList.toggle('is-invalid');
		return
	} 
	
	// Extract form elements values and append them to ouput variable
	var output = 'Are you sure you want to submit below information? \n \n'
	for(i = 0; i < document.forms[0].length; i++){
		if (document.forms[0][i].type != 'submit'){
			output += document.forms[0][i].name.toUpperCase() + ": " + document.forms[0][i].value + "\n"
		}
	}

	// Show confirmation dialog box
	if (!confirm(output)) {
		
		// Prevent form submision when user click cancel
		event.preventDefault();
	}
}


function isValid(inputValue){
	var pattern = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/;
	return pattern.test(inputValue)
}

function toggleP(name){
	document.querySelector('input[name=' + name + '] + small').classList.toggle('hide')
}