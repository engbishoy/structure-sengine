<div class="{{ isset($filter) ? '' : 'd-none' }}">
    <button type="button" class="btn btn-sm btn-icon btn-light me-3" data-bs-toggle="tooltip"
        data-bs-custom-class="tooltip-dark" data-bs-placement="top" title="Filtrer" data-kt-menu-trigger="click"
        data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
        <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
        <span class="svg-icon svg-icon-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path
                        d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"
                        fill="#000000"></path>
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </button>
    <!--begin::Menu 1-->
    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
        <!--begin::Header-->
        <div class="px-7 py-5">
            <div class="fs-5 text-dark fw-bolder">{{ __('core::global.datatable.header.filter_title') }}
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator border-gray-200"></div>
        <!--end::Separator-->
        <!--begin::Content-->
        <div class="px-7 py-5" dt-filter="form" dt-target="_datatable">
            <!--begin::Input group-->
            <div class="mb-10">
                <label class="form-label fs-6 fw-bold">{{ __('core::global.header.filter.status_label') }}:</label>
                <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-kt-select2="true"
                    data-placeholder="{{ __('core::global.header.filter.select_placeholder') }}" data-allow-clear="true"
                    data-table-filter="status" data-hide-search="true" data-select2-id="select2-data-13-z2go"
                    tabindex="-1" aria-hidden="true">
                    <option></option>
                </select>
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-white btn-active-light-primary fw-bold me-2 px-6"
                    data-kt-menu-dismiss="true"
                    dt-filter="reset">{{ __('core::global.header.filter.reset') }}</button>
                <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true"
                    dt-filter="filter">{{ __('core::global.header.filter.submit') }}</button>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Menu 1-->
</div>