// JavaScript Document

//Validación con jQuery

$(document).ready(function() {
	var searchBoxes = $(".text");
	var inputUsername = $("#username");
	var reqUsername = $("#req-username");
	var inputPassword1 = $("#password1");
	var reqPassword1 = $("#req-password1");
	var inputPassword2 = $("#password2");
	var reqPassword2 = $("#req-password2");
	var inputEmail = $("#email");
	var reqEmail = $("#req-email");
	
	//funciones de validación
	
	function validateUsername(){
		if(inputUsername.val().length < 4){
			reqUsername.addClass("error");
			inputUsername.addClass("error");
			return false;
		} else if (inputUsername.val().match(/^[a-zA-z]+$/)){
			reqUsername.addClass("error");
			inputUsername.addClass("error");
			return false;
		}else{
			reqUsername.removeClass("error");
			inputUsername.removeClass("error");
			return true;
		}
	}
	
	function validatePassword1(){
		if(inputPassword1.val().length < 5 || inputPassword1.val().length > 12){
			reqPassword1.addClass("error");
			inputPassword1.addClass("error");
			return false;
		} else if (!inputPassword1.val().match(/^[0-9a-zA-Z]+$/)){
			reqPassword1.addClass("error");
			inputPassword1.addClass("error");
			return false;
		}else{
			reqPassword1.removeClass("error");
			inputPassword1.removeClass("error");
			return true;
		}
	}
	
	function validatePassword2(){
		if(inputPassword1.val() != inputPassword2.val()){
			reqPassword2.addClass("error");
			inputPassword2.addClass("error");
			return false;
		}else{
			reqPassword2.removeClass("error");
			inputPassword2.removeClass("error");
			return true;
		}
	}
	
	function validateEmail(){
		if(inputEmail.val().length == 0){
			reqEmail.addClass("error");
			inputEmail.addClass("error");
			return false;
		} else if (!inputEmail.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)){
			reqEmail.addClass("error");
			inputEmail.addClass("error");
			return false;
		}else{
			reqEmail.removeClass("error");
			inputEmail.removeClass("error");
			return true;
		}
	}
	
	inputUsername.blur(validateUsername);
	inputPassword1.blur(validatePassword1);
	inputPassword2.blur(validatePassword2);
	inputEmail.blur(validateEmail)
	
	$("#form1").submit(function(){
		if(validateUsername() & validatePassword1() & validatePassword2() & validateEmail()){
			return true;
		}else{
			return false;
		}
	});
	
    
});