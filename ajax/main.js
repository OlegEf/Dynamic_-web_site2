var servResponse = document.querySelector('#response');
// ternarnii operator
// var ter =(money ===200) ? 'deng':'nedeng';
document.form.ourForm.onsubmit = function(e){
	e.preventDefault();

var userInput = document.forms.ourForm_inp.value;
userInput = encodeURIComponent(userInput);
encodeURIComponent
var xhr = new XMLHttpRequest()
// xhr.open('GET', 'form.php?' + 'ourForm_inp=' + userInput);
xhr.open('POST', 'form.php');

// 1variant
// xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// 2variant
var formData = new FormData(document.forms.ourForm);

// xhr.setRequestHeader('Content-Type', 'aplication/x-www-form-urlencoded');
xhr.onreadystatechange = function(){
	if(xhr.readyState === 4 && xhr.status === 200){
			servResponse.textContent = xhr.responseText;
		}
	}


	// xhr.send('ourForm_inp' + userInput);
	// 2variant
	xhr.send(formData);

};