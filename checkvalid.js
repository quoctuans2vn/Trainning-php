var emlPtt = /(?:[A-Za-z0-9]+[._]?[A-Za-z0-9]+)+\@(?:[A-Za-z]+[0-9]*)(?:(\.\w+))+?(?:(?!\1)\.\w+)?/m;
var agePtt = /\d{1,3}/m;
$(document).ready(function(){
	$("form").submit(function(event){
		
		if(checkInput() & checkEmail() & checkAge() & checkPass()){
			return true;
		}
		else{
			$("input[type='text'][id!='email'][id!='age']").on("input",checkInput);
			$("#email").on("input",checkEmail);
			$("#age").on("input",checkAge);
			$("#pass").on("input",checkPass);
			return false;
		}
	});
});

function checkInput(){
	var usrInput = $("input[type='text'][id!='email'][id!='age']");
	usrInput.each(function(){
		$(this).toggleClass("form-valid",$(this).val().trim() != "");
		$(this).toggleClass("form-invalid",$(this).val().trim() == "");
		$(this).parent().find(".invalid-feedback").toggleClass("alert-invalid",$(this).val().trim() == "");
	});
	for (var i = 0; i < usrInput.length; i++){
		if (usrInput[i].value.trim() == ""){
			return false;
		}
	}
	return true;
}
function checkEmail(){
	var emltext = $("#email").val().trim();
	var obj = emlPtt.exec(emltext);
	var condition = (emlPtt.test(emltext) && obj[0] == obj.input);
	$("#email").toggleClass("form-valid",condition);
	$("#email").toggleClass("form-invalid",!condition);
	$("#email").parent().find(".invalid-feedback").toggleClass("alert-invalid",!condition);
	return condition;
}
function checkAge(){
	var ageusr = $("#age").val().trim();
	var obj = agePtt.exec(ageusr);
	var condition = (agePtt.test(ageusr) && obj[0] == obj.input);
	$("#age").toggleClass("form-valid",condition);
	$("#age").toggleClass("form-invalid",!condition);
	$("#age").parent().find(".invalid-feedback").toggleClass("alert-invalid",!condition);
	return condition;
}
function checkPass(){
	var condition = ($("#pass").val().length >= 8);
	$("#pass").toggleClass("form-valid",condition);
	$("#pass").toggleClass("form-invalid",!condition);
	$("#pass").parent().find(".invalid-feedback").toggleClass("alert-invalid",!condition);
	return condition;
}
