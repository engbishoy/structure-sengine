// global events
const eventContext = 'body';
const modalLoadedEvent = new Event('modalLoaded'); // this event is triggered when the modal form is loaded for form-validation
// global Helper functions

var DataTableInstance;

// default app toastr message
function displayToastrMessage(type, message) {
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    if (type == 'success') {
        toastr.success(message);
    } else if (type == 'error') {
        toastr.error(message);
    }
}



// solution actions
// data table row action listener
var handleModuleActions = function (DataTableInstance=null) {
    $('[data-action-btn="true"]').on('click', function (e) {
        e.preventDefault();
        this.blur();
        switch ($(this).attr('data-action-type').toLowerCase()) {
            case 'modal':
                // call the modal function
                modalAction($(this));
                break;
            case 'alert':
                // call the alert function
                alertAction($(this), DataTableInstance);
                break;
            case 'link':
                window.open($(this).attr('data-action-url'),'_blank');

            default:
                console.error('This Action type doesn\'t exist : ' + $(this).attr('data-action-type'));
                break;
        }
    });
}

// modal action
var modalAction = function (action) {

    $.ajax({
        url: $(action).attr('data-action-url'),
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: $(action).attr('data-action-method') ? $(action).attr('data-action-method').toUpperCase() : "GET",
        beforeSend: function () {
            $('.lds-ring').css("visibility", "visible");
        },
        complete: function () {
            $('.lds-ring').css("visibility", "hidden");
        },
        // return the result
        success: function (result) {
            // calling event
            $('#dt_modal').modal("show");
            $('#dt_modal_content').html(result).show();
            // form loaded now we trigger event
            document.querySelector(eventContext).dispatchEvent(modalLoadedEvent);
        },
    });
}

// alert action
var alertAction = function (action, DataTableInstance) {
    Swal.fire({
        text: php_to_js['messages'][$(action).attr('data-alert-title')],
        icon: $(action).attr('data-alert-icon'),
        showCancelButton: $(action).attr('data-alert-show-cancel') == "true" ? true : false,
        buttonsStyling: $(action).attr('data-alert-btn-style') == "true" ? true : false,
        confirmButtonText: php_to_js['messages'][$(action).attr('data-alert-confirm-text')],
        cancelButtonText: php_to_js['messages'][$(action).attr('data-alert-cancel-text')],
        customClass: {
            confirmButton: 'btn fw-bold ' + $(action).attr('data-alert-confirm-btn-classes'),
            cancelButton: 'btn fw-bold ' + $(action).attr('data-alert-cancel-btn-classes'),
        }
    }).then(function (result) {
        if (result.value) {
            // setting data if action is a group action
            var params = {};
            if ($(action).attr('data-action-group') == "true") {
                if(DataTableInstance && DataTableInstance.contextType() == 'datatable'){
                    params = {
                        ids: DataTableInstance.selectedRows(),
                    }
                }
            }
            $.ajax({
                url: $(action).attr('data-action-url'),
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: $(action).attr('data-action-method') ? $(action).attr('data-action-method').toUpperCase() : "GET",
                data: params,
                success: function (response) {
                    displayToastrMessage('success', response.message);
                    if(DataTableInstance.contextType() == 'datatable'){
                        DataTableInstance.refresh();
                        DataTableInstance.clear();
                    }


                },
                error: function (err) {
                    displayToastrMessage('error', php_to_js['error_occured']);
                    if(DataTableInstance.contextType() == 'datatable'){
                        DataTableInstance.clear();
                    }
                }
            });
        }
    });
}