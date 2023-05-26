$(function(){
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
});