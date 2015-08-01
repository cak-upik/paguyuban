$(function() {

    var rules = {
        rules: {
            username: {
//                minlength: 2,
                required: true
            },
            password: {
                required: true
//                email: true
            }
        }
    };

    var validationObj = $.extend(rules, Application.validationRules);

    $('#validation-form').validate(validationObj);

});