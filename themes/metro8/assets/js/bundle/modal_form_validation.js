var ManageModalForm = function () {
    var validator; // form validator instance
    var modal; // modal instance
    
    var initiateFormValidation = function (form, fields) {
        return FormValidation.formValidation(
            form,
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



    var handleForm = function (form, DataTableInstance) {
        // find items
        let submitButton = form.querySelector('#dt_modal_submit');
        let cancelButton = form.querySelector('#dt_modal_cancel');
        let closeButton = form.querySelector('#dt_modal_close');
        let expandButton = form.querySelector('#dt_modal_fullscreen');

		// Action buttons & refresh listeners
		submitButton.addEventListener('click', function (e) {
			e.preventDefault();
			// Validate form before submit
			if (validator) {
				validator.validate().then(function (status) {

					if (status == 'Valid') {
						submitButton.setAttribute('data-kt-indicator', 'on');

						// Disable submit button whilst loading
						submitButton.disabled = true;

						setTimeout(function() {
							submitButton.removeAttribute('data-kt-indicator');
                            // Enable submit button after loading
                            submitButton.disabled = false;
                            // submit form or ajax
                            sendForm(form, DataTableInstance);
						}, 500);   						
					}else{
                        $('.is-invalid:first').focus();
                    }
				});
			}
		});

        cancelButton.addEventListener('click', function (e) {
            e.preventDefault();
            form.reset();
        });

		closeButton.addEventListener('click', function(e){
			e.preventDefault();
            modal.hide();
		});

        expandButton.addEventListener('click', function(e){
			e.preventDefault();
            var icon = $('#fullscreen-icon');
            var modalDialog = $('#modalDialog');
            if(icon.hasClass('fa-expand')){
                modalDialog.addClass('modal-fullscreen');
                modalDialog.removeClass('modal-xl');
                icon.addClass('fa-compress');
                icon.removeClass('fa-expand');
            }else{
                modalDialog.removeClass('modal-fullscreen');
                modalDialog.addClass('modal-xl');
                icon.removeClass('fa-compress');
                icon.addClass('fa-expand');
            }
		});
    }

    var sendForm = function(form, DataTableInstance){

        //editor get data
        if(typeof(editor) != "undefined" && editor !== null) {
            $('#editor').text(editor.getData());
    
        }
    

    
        let formData = new FormData(form);


        // ids group 
        if(DataTableInstance && DataTableInstance.contextType() == 'datatable' && DataTableInstance.selectedRows()){
        DataTableInstance.selectedRows().forEach(val => {
            formData.append(`ids[]`, val);
        });
        DataTableInstance.clear();        
        }


        
        if(php_to_js['ajax_params']['dt_modal_request_type'].toUpperCase() == "PUT"){
            formData.append('_method', 'PUT');
        }
            

        $.ajax({
            url: php_to_js['ajax_params']['dt_modal_submit_url'],
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            contentType: false,
            processData: false,
            type: "POST",
            data: formData,
            success: function (response) {
                if(DataTableInstance){
                    DataTableInstance.refresh();
                }
                modal.hide();
                displayToastrMessage("success", response.message);
            },
            error: function (response) {
                if(response.status == 422){
                    displayValidationError(response.responseJSON.errors);
                }else{
                    displayToastrMessage("error",php_to_js['error_occured']);
                }
            }
        });
    }

    var  displayValidationError = function(errors){
        var container = document.getElementById('error-messages-list');
        container.innerHTML = '';
        for(const item in errors){
            let li = document.createElement("li");
            li.appendChild(document.createTextNode(errors[item]));
            container.appendChild(li);
        }
        // displaying the alert
        var alertContainer = document.getElementById('errors-alert-wrapper');
        alertContainer.classList.remove('d-none');
        setTimeout(function(){
            alertContainer.classList.add('d-none');
        }, 8000);
    }


    return {
        init: function (DataTableInstance = null, fields) {
            if(!fields){
                console.error('Fields not specified in form validation');
            }
            // initiation
            modal = new bootstrap.Modal(document.querySelector('#dt_modal'));
            // Listen to modal loaded
            document.querySelector(eventContext).addEventListener('modalLoaded', function(){
                form = document.querySelector('#dt_modal_form');
                validator = initiateFormValidation(form, fields);
                handleForm(form, DataTableInstance);
            });
        }
    }
}