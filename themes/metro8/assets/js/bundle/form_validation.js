var ManageForm = function () {

    var initiateFormValidation = function (form, fields) {
        return FormValidation.formValidation(
            document.getElementById(form),
            {
                fields: fields,
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                    }),
                    icon: new FormValidation.plugins.Icon({
                        // no icons
                    }),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                }
            }
        )
        .on('core.element.validated', function(e){
            // var label = FormValidation.utils.closest(e.element, '.');
            var label = $(e.element).siblings('.control-label');
            if(label){
                if(e.valid){
                    $(label).removeClass('fv-label-invalid');
                    $(label).addClass('fv-label-valid');
                }else{
                    $(label).removeClass('fv-label-valid');
                    $(label).addClass('fv-label-invalid');
                }
            }
        });
    }

    return {
        init: function (form, fields) {

            if(!fields){
                console.error('Fields not specified in form validation');
            }

            var validator = initiateFormValidation(form, fields);

            $('#'+form).find(':submit').on('click', function(){
                var submitButton = $(this);
                if (validator) {
                    validator.validate().then(function (status) {
    
                        if (status == 'Valid') {
                            submitButton.attr('data-kt-indicator', 'on');
    
                            // Disable submit button whilst loading
                            submitButton.disabled = true;
    
                            setTimeout(function() {
                                submitButton.removeAttr('data-kt-indicator');
                                // Enable submit button after loading
                                submitButton.disabled = false;
                                // submit form or ajax
                                $('#'+form).submit();
                            }, 500);   						
                        }else{
                            $('.is-invalid:first').focus();
                        }
                    });
                }
            });
        }
    }
};