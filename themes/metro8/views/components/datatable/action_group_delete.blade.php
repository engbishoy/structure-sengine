<div class="menu-item px-2">
    <a class="menu-link px-3 group-actn-menu-btn"
    data-action-btn="true"
    data-action-type="alert" 
    data-action-group="true"
    data-action-method="DELETE"
    data-alert-title="swal-delete-prompt" 
    data-alert-icon="error" 
    data-alert-show-cancel="true" 
    data-alert-btn-style="false" 
    data-alert-confirm-text="swal-delete-btn-confirm" 
    data-alert-cancel-text="swal-delete-btn-discard"
    data-alert-confirm-btn-classes="btn-danger"
    data-alert-cancel-btn-classes="btn-active-light-primary"
    data-toastr-success="toastr-deleted-rows"
    {{ $attributes }}>
    {{ __('core::global.datatable.header.delete') }}</a>
</div>