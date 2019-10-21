const user = document.getElementById('user');
const pass = document.getElementById('pass');
const submit = document.getElementById('submit');

submit.addEventListener('click', ($event)=>{
	$event.preventDefault();
	if(user.value == ""){
		user.style.border = 'thin solid red';
	}
	else if(pass.value == ""){
		pass.style.border = 'thin solid red';
	}
	else{
		user.style.color = green;
		pass.style.color = green;
	}
});