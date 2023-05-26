$(function(){

    

    var ManageFormInstance = new ManageForm();
    ManageFormInstance.init( 'login_form', {
        'email': {
            validators: {
                notEmpty: {
                    message: 'email adress is required'
                },
                emailAddress: {
                    message: 'The input is not a valid email address'
                }
            }
        },
        'password': {
            validators: {
                notEmpty: {
                    message: 'the password is required'
                },
                stringLength: {
                    min: 8,
                    message: 'The password must have at least 6 characters'
                },
            }
        },
    });
});