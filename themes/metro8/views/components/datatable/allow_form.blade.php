
<button type="button" @if( $allowform->value==1) style="display:none" @endif class="btn btn-sm btn-light-success me-3 enable" 
    data-action-type="alert" 
    data-action-group="true"
    data-action-method="PUT"
    data-alert-title="swal-update-prompt" 
    data-alert-icon="warning" 
    data-alert-show-cancel="true" 
    data-alert-btn-style="false" 
    data-alert-confirm-text="swal-update-btn-confirm" 
    data-alert-cancel-text="swal-update-btn-discard"
    data-alert-confirm-btn-classes="btn-primary"
    data-alert-cancel-btn-classes="btn-active-light-danger"
    data-action-url="{{ route('option.form.enable',['key'=>'Actualisation_dossier_2022']) }}">
    <i class="fa fa-toggle-on"></i> {{ __('core::global.datatable.header.enable actualisation dossier') }}
</button>




<button type="button" @if( $allowform->value==0) style="display:none" @endif class="btn btn-sm btn-light-danger me-3 disable" 
    data-action-type="alert" 
    data-action-group="true"
    data-action-method="PUT"
    data-alert-title="swal-update-prompt" 
    data-alert-icon="warning" 
    data-alert-show-cancel="true" 
    data-alert-btn-style="false" 
    data-alert-confirm-text="swal-update-btn-confirm" 
    data-alert-cancel-text="swal-update-btn-discard"
    data-alert-confirm-btn-classes="btn-danger"
    data-alert-cancel-btn-classes="btn-active-light-primary"
    data-action-url="{{ route('option.form.disable',['key'=>'Actualisation_dossier_2022']) }}">
    <i class="fa fa-toggle-on"></i> {{ __('core::global.datatable.header.disable actualisation dossier') }}
</button>



