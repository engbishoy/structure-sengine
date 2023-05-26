@props(['group'])
<div class="card-toolbar">
    <div class="d-flex justify-content-end" dt-toolbar="base" dt-target="_datatable">
        {{ $slot }}
    </div>
    <div class="d-flex justify-content-end align-items-center d-none" dt-toolbar="selected" dt-target="_datatable">
        <div class="fw-bolder me-5">
            <span class="me-2" dt-selected="selected_count"></span>{{ __('core::global.datatable.header.selected') }}</div>
        <div class="d-flex flex-row">
            {{ $group }}
        </div>
    
    </div>       
</div>