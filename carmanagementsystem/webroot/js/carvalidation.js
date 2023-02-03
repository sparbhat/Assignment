jQuery.validator.addMethod("regex", function (value, element, param) {
    return value.match(new RegExp("^" + param + "$"));
});
var ALPHA_REGEX = "[a-zA-Z]*";
var NEW_REGEX = "[a-zA-Z0-9_]*";

$(document).ready(function () {
    $("#signup-form").validate({
        rules: {
            Name: {
                regex: NEW_REGEX,
                required: true,
                minlength: 2,
            },
            Make: {
                required: true,
                range: [2000, 2023],
                digits: true,
            },
            Model: {
                required: true,
                minlength: 5,
            },
            Color: {
                required: true,
                regex: NEW_REGEX,
            },
            Description: {
                required: true,
            },
            image_file: {
                required: true,
            },
        },
        messages: {
            Name: {
                regex: "Name should be only in letters",
                required: "Please enter Car name",
                minlength: "Car Name should be at least 2 characters",
            },
            Make: {
                required: "Please enter year.",
                range: "Please enter year between 2000-2023",
                digits: "Please enter year between 2000-2023",
            },
            Model: {
                required: "This field is required.",
            },
            Color: {
                required: "Please enter color",
                regex: "Number not allowed",
            },
            Description: {
                required: "This field is required.Please enter description",
            },
            image_file: {
                required: "Please upload image",
            },

            submitHandler: function (form) {
                form.submit();
            },
        },
    });
});
///Radio-button validation
