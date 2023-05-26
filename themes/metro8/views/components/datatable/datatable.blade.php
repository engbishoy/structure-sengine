<div id="kt_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer mt-5">
    <div class="table-responsive">
        <table id="_datatable"
            class="table table-full-width align-middle table-row-bordered fs-6 gy-4 gs-3 dataTable no-footer"
            role="grid" {{ $attributes }} data-order="{{ $dataOrder }}" data-page-length="{{ $dataPageLength }}">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0" role="row">
                    <th class="w-10px pe-2" col-exclude="true" style="width: 29.5px;" can-toggle="false"
                        can-print="false">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input dt-checkbox dt-main-checkbox" type="checkbox"
                                data-kt-check="true" data-kt-check-target="#_datatable .form-check-input">
                        </div>
                    </th>

                    <th>
                        ID
                    </th>

                    {{ $slot }}

                    <th class="min-w-70px action-buttons" can-toggle="false" can-print="false" style="width: 150px;">
                        {{ __('core::global.datatable.columns.actions') }}
                    </th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
        </table>
    </div>
</div>