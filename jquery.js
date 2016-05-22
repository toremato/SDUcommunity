$(function() {	
	var passvalid = false;
	var usernamevalid = false;
	var pass = $("#checkpass");
	valid();
		$("#password").keyup(function() {
			passvalid = false;
			var password = $("#password").val();

			if ($("#passconfirmation").val()!==0) {
				// $("#regform").find('#passconfirmation').prop('disabled', true);
				$("#checkconf").html("fuuuuck");
				$("#checkconf").css({"color":"red"});
				$("#passconfirmation").val("");
			}

			if (password.length==0) {
				// $("#checkpass").html("*");
				pass.html("*");
				$("#checkpass").css({"color":"red"});
			}else {
				if ($("#checkconf").length > 0) {
					// $("#checkconf").html("*");
					// $("#checkconf").css({"color":"red"});
					// $("#passconfirmation").val("");
				}
				$("#checkpass").html(password.length < 6 ? "password is too short!": "password is ok");
				$("#checkpass").css(password.length < 6 ? {"color": "red"}: {"color": "green"});
			}

			if (password.length > 5) {
				$("#regform").find('#passconfirmation').prop('disabled', false);
				$("#passconfirmation").keyup(function(){
					passvalid = false;
					$("#checkpass").html("");
					var password = $("#password").val();
					if (password == $(this).val()) {
						passvalid = true;
						valid();
					}else{
						passvalid = false;
						valid();
					}
					$("#checkconf").html(password==$(this).val() ?"passwords match": "passwords do not match!");
					$("#checkconf").css(password==$(this).val() ? {"color": "green"}: {"color": "red"});
					if ($(this).val()==0) {
						$("#checkconf").html("*");
					}
				});
			}

		});

	// $("#passconfirmation").keyup(function(){
	// 	$("#checkpass").html("");
	// 	var password = $("#password").val();
	// 	if (password == $(this).val()) {
	// 		passvalid = true;
	// 		valid();
	// 	}else{
	// 		passvalid = false;
	// 		valid();
	// 	}
	// 	$("#checkconf").html(password==$(this).val() ?"passwords match": "passwords do not match!");
	// 	$("#checkconf").css(password==$(this).val() ? {"color": "green"}: {"color": "red"});
	// 	if ($(this).val()==0) {
	// 		$("#checkconf").html("*");
	// 	}
	// });

	$("#usernameinput").keyup(function(){
		usernamevalid = false;
		valid();
		var acc = $("#usernameinput").val();
		if (acc.length==0){
			$("#checkusername").html("*");
			$("#checkusername").css({"color":"red"});
			passvalid = false;
		}else{
			if(/^[a-zA-Z0-9]*$/.test(acc) == false){
				$("#checkusername").css({"color":"red"});
				$("#checkusername").html("username contains illegal charachters");			
				usernamevalid = false;
				valid();

			}else{
				if (acc.length<5) {
				    $("#checkusername").css({"color":"red"});
					$("#checkusername").html("username is too short");
				    usernamevalid = false;
				    valid();
				}else{
					var user = $("#usernameinput").val();
					var check = $('#checkusername').html();
		////////// Live username checking by AJAX
					$("#checkusername").load("validation.php",{username: user});
					if(check == "username is ok"){
						$("#checkusername").css({"color":"green"});
						usernamevalid = true;
						valid();
					}else{
						$("#checkusername").css({"color":"red"});
						usernamevalid = false;
						valid();
					}
					$("#checkusername").css({"color":"green"});


				}
			}
		}
	});
	function valid(){
	if(passvalid && usernamevalid){
		$("#regform").find('input[type=submit]').prop('disabled', false);
		$('#register-button').css({"backgroundColor":"orange"})
		// $("#register-button").show();
	}else{
		$("#regform").find('input[type=submit]').prop('disabled', true);
		$('#register-button').css({"backgroundColor":"grey"})
		// $("#register-button").hide();
	}
	}
//////////////////////////// LIVE 
//////////////////////////// 			USERNAME
//////////////////////////// 							VALIDATION 

		// $("#usernameinput").change(function() { 
		// 	var usr = $("#usernameinput").val();
		// 	 $.ajax({  
		// 	    type: "POST",  
		// 	    url: "validation.php",  
		// 	    data: "username="+ usr,  
		// 	    success: function(msg){  
			   
		// 	   $("#usernameinput").ajaxComplete(function(event, request, settings){ 

		// 		if(msg == 1)
		// 		{ 
		// 			$("#checkusername").html('lalalala');
		// 		}  
		// 		else  
		// 		{  
		// 			$("#checkusername").html(msg);
		// 		}  
			   
		// 	   });

		// 	 } 
			   
		// 	  }); 
		// 	 });


		




////////////////////////////////////////
////////////////////////////////////////	
////////////////////////////////////////
});
