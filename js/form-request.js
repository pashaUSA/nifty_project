$("#requestForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var tel = $("#tel").val();
    var tripName = $("#tripName").val();
	var translator = $("#translator").val();
	var language = $("#language").val();
	var startdate = $("#startdate").val();
	var enddate = $("#enddate").val();
	var number = $("#number").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "submit/request-form.php",
        data: "name=" + name + "&email=" + email + "&tel=" + tel + "&tripName=" + tripName + "&translator=" + translator + "&language=" + language + "&startdate=" + startdate + "&enddate=" + enddate + "&number=" + number + "&message=" + message,
        success : function(text){
            if (text.includes("success")){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#requestForm")[0].reset();
    submitMSG(true, "Message Submitted! Thank you, we will get back to you soon.")
}

function formError(){
    $("#requestForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
