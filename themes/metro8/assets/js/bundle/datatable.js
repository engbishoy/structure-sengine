var DataTableFactory = function () {
    var table; // datatable DOM element
    var datatable; //datatable instance
    var rowsSelected = []; // array containing selected rows
    var currentInstance; // current running DataTable instance
    var initDataTable = function (options) {
        datatable = $(table).DataTable($.extend({
            ajax: $(table).attr('data-url'),
            pagingType: "input", // pagination type(bootstrap, bootstrap_full_number or bootstrap_extended)
            language : {
                url: `${php_to_js['base_url']}${php_to_js['backtheme_plugin_path']}/datatables/language/${php_to_js['user_lang_code']}.json`
            },
            processing: true,
            serverSide: true,
            stateSave: true,
            orderCellsTop: true,
            autoWidth: false,
            buttons: [
                { extend: "pdfHtml5", className: "d-none dataTablePdfButton", exportOptions: {columns: ':not([can-print="false"])'} },
                { extend: "excelHtml5", className: "d-none dataTableExcelButton", exportOptions: {columns: ':not([can-print="false"])'} },
                { extend: "csvHtml5", className: "d-none dataTableCsvButton", exportOptions: {columns: ':not([can-print="false"])'} },
                { extend: "print", className: "d-none dataTablePrintButton", exportOptions: {columns: ':not([can-print="false"])'} },
                { extend: "copy", className: "d-none dataTableCopyButton", exportOptions: {columns: ':not([can-print="false"])'} },
            ],
            columnDefs: [
                { targets: 0, searchable: false, orderable: false,
                    render: function(data, type, row){
                        return renderCheckBoxes(row);
                    }
                },
                { targets: 1, visible: false, searchable: false },

                { targets: -1, searchable: false, orderable: false, 
                    render: function(data, type, row){
                        return renderActionsBtns(row);
                    }
                },
            ],
            fnStateLoadParams: function (settings, data) {
                $(`[dt-filter="search"][dt-target="_datatable"]`).val(data.search.search);
            },
            fnDrawCallback: function () {
                $("[data-bs-toggle=tooltip]").tooltip({ trigger: "hover" });

                initiateColumnFilterMenu(datatable);
                handleDataTableCheckBox();
                handleModuleActions(currentInstance);

            },
        }, options));
    }

    // rendering functions
    var renderCheckBoxes = function(row){
        return `<div class='form-check form-check-sm form-check-custom form-check-solid'><input class='form-check-input dt-checkbox' type='checkbox' value=${row.id}></div>`;  
    }
    var renderActionsBtns= function(row){
        var result = `<div class="d-flex justify-content-end flex-shrink-0 p-1">`;
        row.action.forEach(button => {
            if(!button.conditions){
                return;
            }
            result += `<a  href="javascript:;" 
                class="${button.classes}" 
                data-action-btn="true"`;

                result +=  ((button.tooltip.disabled == false) ? `data-bs-toggle="tooltip" data-bs-custom-class="tooltip-${button.tooltip.color}" data-bs-placement="${button.tooltip.placement}"` : ``);
                
                result += `title="${button.title}"
                data-action="${button.action}"
                data-action-type="${button.actionType}"
                data-action-url="${button.url}"
                data-action-method="${button.actionMethod}"`;
                
                result += ((button.actionType  == 'alert') ? `
                data-alert-title="${button.alertOptions.title}"
                data-alert-icon="${button.alertOptions.icon}"
                data-alert-confirm-text="${button.alertOptions.confirmButtonText}"
                data-alert-cancel-text="${button.alertOptions.cancelButtonText}"
                data-alert-confirm-btn-classes="${button.alertOptions.confirmButtonClasses}"
                data-alert-cancel-btn-classes="${button.alertOptions.cancelButtonClasses}"
                data-alert-show-cancel="${button.alertOptions.showCancelButton}"
                data-alert-btn-style="${button.alertOptions.buttonsStyling}"
                ` : ``);
                result += `><i class="${button.icon}"></i></a>`;
        });
        result += `</div>`;
        return result;
    }




    
    // drawing the column filter
    var initiateColumnFilterMenu = function(table){
        var menuContainer = $(`[dt-colvis][dt-target="_datatable"]`);
        $(menuContainer).html('');
        table.columns().eq(0).each( function ( index ) {
            var column = table.column( index );
            var header = column.header();

            if(!($(header).attr('can-toggle') == "false")){
                if(column.visible() == true){
                    var menuItem = `
                    <div class="menu-item">
                        <a href="javascript:;" class="menu-link px-3 toggle-col-menu-item toggle-col-item-active" col-index="${index}">
                            ${$(header).text()} 
                        </a>
                    </div>
                    `;
                    $(menuContainer).append(menuItem);
                }else{
                    var menuItem = `
                    <div class="menu-item">
                        <a href="javascript:;" class="menu-link px-3 toggle-col-menu-item toggle-col-item-inactive" col-index="${index}">
                            ${$(header).text()} 
                        </a>
                    </div>
                    `;
                    $(menuContainer).append(menuItem);
                }
            }
        } );
        colToggle(table, menuContainer);
    }
    // column filter action
    var colToggle = function(table, menuContainer){
        $(menuContainer).find('.toggle-col-menu-item').on('click', function(){
            if($(this).hasClass('toggle-col-item-active')){
                table.column($(this).attr('col-index')).visible(false);
                $(this).removeClass('toggle-col-item-active');
                $(this).addClass('toggle-col-item-inactive')
            }else{
                table.column($(this).attr('col-index')).visible(true);
                $(this).removeClass('toggle-col-item-inactive');
                $(this).addClass('toggle-col-item-active');
            }
        });
    }






    var handleDataTableCheckBox = function(){
        $(table).find('.dt-checkbox').on('click',function(){
            if($(this).is(":checked")){
                if($(this).hasClass('dt-main-checkbox')){
                    $(table).find('tr:not(:first)').addClass('dt-active-row');
                }else{
                    $(this).closest('tr').addClass('dt-active-row');
                }
            }else{
                if($(this).hasClass('dt-main-checkbox')){
                    $(table).find('tr:not(:first)').removeClass('dt-active-row');
                }else{
                    $(this).closest('tr').removeClass('dt-active-row');
                }
            }
            setTimeout(function () {
                toggleToolbars();
            }, 50);
        });
    }

      // data table toolbar toggle on checkbox click
      var toggleToolbars = function (){
        // Select elements
        const toolbarBase = document.querySelector(`[dt-toolbar="base"][dt-target="_datatable"]`);
        const toolbarSelected = document.querySelector(`[dt-toolbar="selected"][dt-target="_datatable"]`);
        const selectedCount = toolbarSelected.querySelector('[dt-selected="selected_count"]');

        // Select refreshed checkbox DOM elements 
        const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]');
    
        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;
        rowsSelected = [];
        // Count checked boxes
        allCheckboxes.forEach(c => {
            if (c.checked) {
                checkedState = true;
                count++;
                rowsSelected.push(c.value);
            }
        });
        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add('d-none');
            toolbarSelected.classList.remove('d-none');
        } else {
            toolbarBase.classList.remove('d-none');
            toolbarSelected.classList.add('d-none');
        }
    }



    // clear toolbar after certain actions (delete, update...)
    var clearToolbar = function() {
        // Select elements
        const toolbarBase = document.querySelector(`[dt-toolbar="base"][dt-target="_datatable"]`);
        const toolbarSelected = document.querySelector(`[dt-toolbar="selected"][dt-target="_datatable"]`);
        toolbarBase.classList.remove('d-none');
        toolbarSelected.classList.add('d-none');
    }

    

    // uncheck the mainCheckBox after group actions
    var uncheckMainCheckBox = function() {
        $(table).find('.dt-main-checkbox').prop('checked', false);
    }



    
    // data table search
    var handleSearch = function () {
        $(`[dt-filter="search"][dt-target="_datatable"]`).on('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // data table filter

    /*
    var handleFilter = function () {
        try {
            // Select filter options
            const filterForm = document.querySelector(`[dt-filter="form"][dt-target="_datatable"]`);
            const filterButton = filterForm.querySelector('[dt-filter="filter"]');
            const resetButton = filterForm.querySelector('[dt-filter="reset"]');
            const selectOptions = filterForm.querySelectorAll('select');

            // Filter datatable on submit
            filterButton.addEventListener('click', function () {
                var filterString = '';

                // Get filter values
                selectOptions.forEach((item, index) => {
                    if (item.value && item.value !== '') {
                        if (index !== 0) {
                            filterString += ' ';
                        }

                        // Build filter value options
                        filterString += item.value;
                    }
                });

                // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
                datatable.search(filterString).draw();
            });

            // Reset datatable
            resetButton.addEventListener('click', function () {
                // Reset filter form
                selectOptions.forEach((item, index) => {
                    // Reset Select2 dropdown --- official docs reference: https://select2.org/programmatic-control/add-select-clear-items
                    $(item).val(null).trigger('change');
                });

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            datatable.search('').draw();
        });
            
        } catch (error) {
            // console.log(error);
        }
    }

    */

    // data table column search (a reviser)
    // var handleColumnSearch = function () {
    //     if (!$('#columnSearchSubmit')) {
    //         return;
    //     }
    //     $('#columnSearchSubmit').on('click', function (e) {
    //         e.preventDefault();
    //         var columnsToSearch = {};
    //         var noColumnSet = true;
    //         $('.columnSearchInput').each(function () {
    //             if ($(this).val() && $(this).val() !== '') {
    //                 noColumnSet = false;
    //                 columnsToSearch[$(this).attr('data-col-index')] = $(this).val();
    //             }
    //         });
    //         for (var columnIndex in columnsToSearch) {
    //             datatable.column(columnIndex).search(columnsToSearch[columnIndex]).draw();
    //         }
    //         if (noColumnSet) {
    //             datatable.columns().search('').draw();
    //         }
    //     });

    //     $('#columnSearchReset').on('click', function (e) {
    //         e.preventDefault();
    //         $('.columnSearchInput').each(function () {
    //             $(this).val(null);
    //         });
    //         datatable.columns().search('').draw();
    //     });
    // }

  







    
    // data table full screen (a reviser)
    var toggleFullScreen = function(){
        $(`[dt-screen-toggle][dt-target="_datatable"]`).on('click', function(){
            $(this).tooltip('hide');
            if($(this).attr('current-state') == 'minimised'){
                $('#kt_aside').addClass('d-none');
                $('#kt_header').addClass('d-none');
                $('#kt_content_container').addClass('container-full-screen');
                $('#fullscreen-icon-1').addClass('d-none');
                $('#fullscreen-icon-2').removeClass('d-none');
                $(this).attr('current-state', 'maximised');
            }else{
                $('#kt_aside').removeClass('d-none');
                $('#kt_header').removeClass('d-none');
                $('#kt_content_container').removeClass('container-full-screen');
                $('#fullscreen-icon-1').removeClass('d-none');
                $('#fullscreen-icon-2').addClass('d-none');
                $(this).attr('current-state', 'minimised');
            }
        });
    }
    // refresh data table
    var refreshBtnHandle = function(){
        $(`[dt-refresh][dt-target="_datatable"]`).on('click',function(){
            $(this).tooltip('hide');
            datatable.ajax.reload(null,false);
        });
    }


    var handleDataTableExport = function(){
        $(`.dt-export-btn[dt-target="_datatable"]`).on('click', function(){
            switch ($(this).attr('export-option')) {
                case "excel":
                    datatable.buttons('.dataTableExcelButton').trigger();
                    break;
                case "pdf":
                    datatable.buttons('.dataTablePdfButton').trigger();
                    break;
                case "csv":
                    datatable.buttons('.dataTableCsvButton').trigger();
                    break;
                case "print":
                    datatable.buttons('.dataTablePrintButton').trigger();
                    break;
                case "copy":
                    datatable.buttons('.dataTableCopyButton').trigger();
                    break;
                default:
                    break;
            }
        });
    }

    var toggleTrashed = function(){
        $(`[dt-toggle-trashed][dt-target="_datatable"]`).on('click', function(){
            $(`[data-action-btn="true"][data-action="add"][data-action-type="modal"][dt-target="_datatable"]`).toggleClass('d-none');
            $(`[dt-toolbar="selected"][dt-target="_datatable"]`).find('.fv-row.default').toggleClass('d-none');
            $(`[dt-toolbar="selected"][dt-target="_datatable"]`).find('.fv-row.trashed').toggleClass('d-none');
            $(`[dt-toggle-default][dt-target="_datatable"]`).toggleClass('d-none');
            $(this).toggleClass('d-none');
            datatable.ajax.url($(this).attr('data-action-url')).load();
        });
    }

    var toggleDefault = function (){
        $(`[dt-toggle-default][dt-target="_datatable"]`).on('click', function(){
            $(`[data-action-btn="true"][data-action="add"][data-action-type="modal"][dt-target="_datatable"]`).toggleClass('d-none');
            $(`[dt-toolbar="selected"][dt-target="_datatable"]`).find('.fv-row.default').toggleClass('d-none');
            $(`[dt-toolbar="selected"][dt-target="_datatable"]`).find('.fv-row.trashed').toggleClass('d-none');
            $(`[dt-toggle-trashed][dt-target="_datatable"]`).toggleClass('d-none');
            $(this).toggleClass('d-none');
            datatable.ajax.url($(this).attr('data-action-url')).load();
        });
    }



    return {

        init: function (options) {
            currentInstance = this;
            table = document.getElementById('_datatable');
            if (!table) {
                return;
            }

            // call to functions
            initDataTable(options);
            handleSearch();
            // handleFilter();
            // handleColumnSearch();
            handleDataTableExport();
            toggleFullScreen();
            refreshBtnHandle();
            toggleTrashed();
            toggleDefault();
        },
        refresh: function () {
            datatable.ajax.reload(null,false);
        },
        clear: function(){
            uncheckMainCheckBox();
            clearToolbar();
        },
        selectedRows: function(){
            return rowsSelected;
        },
        contextType: function(){
            return 'datatable';
        }
    }
}

