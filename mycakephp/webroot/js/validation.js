jQuery.validator.addMethod("regex", function (value, element, param) {
    return value.match(new RegExp("^" + param + "$"));
});
var ALPHA_REGEX = "[a-zA-Z]*";

$(document).ready(function () {
    $("#alldata").validate({
        rules: {
            first_name: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 2,
            },
            age: {
                required: true,
            },
            gender: {
                required: true,
            },
            lName: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 5,
            },
            password: {
                required: true,
                minlength: 5,
            },
            cpassword: {
                required: true,
                minlength: 5,
                equalTo: "#Password",
            },
            email: {
                required: true,
                email: true,
            },
            phone_number: {
                digits: true,
                required: true,
            },
        },
        messages: {
            first_name: {
                regex: "Name should be only in letters",
                required: "Please enter your name",
                minlength: "Name should be at least 2 characters",
            },
            lName: {
                regex: "Name should be only in letters",
                required: "Please enter your name",
                minlength: "Name should be at least 5 characters",
            },
            Passpasswordword: {
                required: "Please fill password",
                minlength: "Password should be atleast 5 characters long",
            },
            cpassword: {
                required: "Please fill password",
                minlength: "Password should be atleast 5 characters long",
                equalTo: "Password not matched",
            },
            email: {
                required: "Email field should not be empty",
                email: "Please enter a valid email format",
            },
            phone_number: {
                required: "please enter your Phone number",
                digits: "Only digits allowed",
            },
            gender: {
                required: "please select your gender",
            },

            submitHandler: function (form) {
                form.submit();
            },
        },
    });
});
///Radio-button validation
$(function () {
    $("#alldata").click(function () {
        var isValid = $("input[name=gender]").is(":checked");
        $("#spnError")[0].style.display = isValid ? "none" : "block";
    });
});
