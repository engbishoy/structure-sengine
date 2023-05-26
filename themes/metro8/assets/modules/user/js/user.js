// document ready
$(function () {
    // initiating data table
    var DataTableInstance = new DataTableFactory();
    DataTableInstance.init({
        dt_id : '_datatable',
        columns: [
            { data: 'selectRow', name: 'selectRow' },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at', 
                render: function(data, type, row){
                    return new Date(row.created_at).toLocaleDateString();
                } 
            },
            { data: 'action', name: 'action' },
        ],
    });
    // initiating modal form management
    var ManageModalFormInstance = new ManageModalForm();
    ManageModalFormInstance.init(DataTableInstance,{
        'name': {
            validators: {
                notEmpty: {
                    message: 'User name is required'
                }
            }
        },
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
                    message: 'The password must have at least 8 characters'
                },
            }
        },
    });
});