$(function(){
	var usernamevalid = false;
	var passvalid = false;
	valid();
	var usernameAlert = $("#checkusername");
	var passAlert = $("#checkpass");
	var passConfAlert= $("#checkconf");
	var username= $("#usernameinput");
	var pass = $("#password");
	var passConf= $("#passconfirmation");
	// var = $("");
	// var = $("");
	// var = $("");
	// var = $("");
	// var = $("");
	// var = $("");
/////////////////////////////////////////////////////////////////////////
//////////// Username Validation ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////


	username.keyup(function(){
		if (/^[a-zA-Z0-9]*$/.test(username.val()) == false) {
			usernameAlert.html("illegal characters here");
		}else{
			if (username.val().length<5){
				usernamevalid = false;
				valid();
				if (username.val().length==0) {
					usernameAlert.html("*");
					usernameAlert.css({"color":"red"});
				}else{
					usernameAlert.html("username is too short");
					usernameAlert.css({"color":"red"});
				}
			}else{
				usernameAlert.load("validation.php",{'username':username.val()}, function(responseTxt, statusTxt, xhr){
					if (responseTxt == "username is ok") {
						usernameAlert.css({"color":"green"});
						usernamevalid = true;
						valid();
					}else{
						usernameAlert.css({"color":"red"});
						usernamevalid = false;
						valid();
					}
				});

			}
		}
	});

/////////////////////////////////////////////////////////////////////////
//////////// Password Validation ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////

	pass.keyup(function(){
		passvalid = false;
		valid();
		passConf.val(null);
		passConf.prop('disabled', true);
		passConfAlert.html("*");
		passConfAlert.css({"color":"red"});
		if (/^[a-zA-Z0-9]*$/.test(pass.val()) == false) {
			passAlert.html("illegal characters here");
		}else{
			if (pass.val().length==0) {
				passAlert.html("*");
				passAlert.css({"color":"red"});
			}else{
				if (pass.val().length <6) {
					passAlert.html("password is too short");
					passAlert.css({"color":"red"});
					passConf.prop('disabled', true);
				}else{
					passAlert.html("password is ok");
					passAlert.css({"color":"green"});
					passConf.prop('disabled', false);
				}
			}
		}
	});
/////////////////////////////////////////////////////////////////////////
//////////// Password Confirmation Validation ///////////////////////////
/////////////////////////////////////////////////////////////////////////
	passConf.keyup(function(){
		passAlert.html(null);
		if (pass.val()!==passConf.val()){
			passConfAlert.html("passwords don`t match");
			passConfAlert.css({"color":"red"});
			passvalid = false;
			valid();
		}else{
			passConfAlert.html("passwords are ok");
			passConfAlert.css({"color":"green"});
			passvalid = true;
			valid();
		}
	});











function valid(){
	if(passvalid && usernamevalid){
		$("#regform").find('input[type=submit]').prop('disabled', false);
		$('#register-button').css({"backgroundColor":"orange"})
		// $("#register-button").fadeIn();
	}else{
		$("#regform").find('input[type=submit]').prop('disabled', true);
		$('#register-button').css({"backgroundColor":"grey"})
		// $("#register-button").fadeOut();
	}
	}

});