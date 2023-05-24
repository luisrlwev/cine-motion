$("#FormContacto").validator().on("submit", function(event) {
	if (event.isDefaultPrevented()) {
		// handle the invalid form...
		formErrorContacto();
        submitMSGContacto(false, "Por favor llene todos los campos requeridos");
    } else {
    	// everything looks good!
        event.preventDefault();
        submitFormConacto();
    }
});

function submitFormConacto() {
	// Initiate Variables With Form Content
	var name = $("#name").val();
	var email = $("#email").val();
    var subject = $("#subject").val();
	var message = $("#message").val();

    $.ajax({
    	type: "POST",
    	url: "php/contacto-contacto.php",
    	data: "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
    	success: function(text) {
    		if (text == "success") {
    			formSuccessContacto();
    		} else {
    			formErrorContacto();
                submitMSGContacto(false, text);
            }
        }
    });
}

function formSuccessContacto() {
	$("#FormContacto");
    submitMSGContacto(true, "¡Mensaje Enviado!");
    document.getElementById("FormContacto").reset();
}

function formErrorContacto() {
	$("#FormContacto").addClass('animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
		$(this).removeClass();
	});
}

function submitMSGContacto(valid, msg) {
	if (valid) {
        var msgClasses = "h5 text-center fadeIn animated text-success";
	} else {
		var msgClasses = "h5 text-center text-danger";
	} $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}