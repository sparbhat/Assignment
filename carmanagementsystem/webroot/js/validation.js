jQuery.validator.addMethod("regex", function (value, element, param) {
    return value.match(new RegExp("^" + param + "$"));
});
var ALPHA_REGEX = "[a-zA-Z]*";

$(document).ready(function () {
    $("#signup-form").validate({
        rules: {
            Name: {
                regex: ALPHA_REGEX,
                required: true,
                minlength: 2,
            },
            password: {
                required: true,
                minlength: 5,
            },
            confirmpassword: {
                required: true,

                equalTo: "#password",
            },
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            Name: {
                regex: "Name should be only in letters",
                required: "Please enter your name",
                minlength: "Name should be at least 2 characters",
            },
            password: {
                required: "Please fill password",
                minlength: "Password should be atleast 5 characters long",
            },
            confirmpassword: {
                required: "Please fill confirm password",

                equalTo: "Password not matched",
            },
            email: {
                required: "Email field should not be empty",
                email: "Please enter a valid email format",
            },

            submitHandler: function (form) {
                form.submit();
            },
        },
    });
});
///Radio-button validation
