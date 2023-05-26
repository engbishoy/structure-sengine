$(function(){
    mediaQuery();
    $(window).resize(function(){
        mediaQuery();
    });
});
function mediaQuery(){
    if(window.innerWidth >= 1068){
        $('#header-container').css('flex-direction','row');
        $('#header-container').removeClass('justify-content-center');
        showTextButtons();
    }
    else if(window.innerWidth >= 992 && window.innerWidth <= 1067 ){
        $('#header-container').css('flex-direction','row-reverse');
        $('#header-container').addClass('justify-content-center');
        showTextButtons();
    }else if(window.innerWidth >= 773 && window.innerWidth <= 991){
        $('#header-container').css('flex-direction','row');
        $('#header-container').removeClass('justify-content-center');
        showTextButtons();
    }else if (window.innerWidth >= 768 && window.innerWidth <= 772){
        $('#header-container').css('flex-direction','row-reverse');
        $('#header-container').addClass('justify-content-center');
        showTextButtons();
    }else if (window.innerWidth >= 733 && window.innerWidth <= 767){
        $('#header-container').css('flex-direction','row');
        $('#header-container').removeClass('justify-content-center');
        showTextButtons();
    }else if(window.innerWidth >= 527 && window.innerWidth <= 732){
        $('#header-container').css('flex-direction','row-reverse');
        $('#header-container').addClass('justify-content-center');
        showTextButtons();
    }else if(window.innerWidth <= 526){
        $('#header-container').css('flex-direction','row-reverse');
        $('#header-container').addClass('justify-content-center');
        hideTextButtons();
    }
}

function hideTextButtons(){
    $('#dt_header_add').addClass('btn-icon');
    $('#dt_header_add').find('.data-action-name').hide();
    $('#dt_header_export').addClass('btn-icon');
    $('#dt_header_export').find('.data-action-name').hide();
    $('#dt_header_columns').addClass('btn-icon');
    $('#dt_header_columns').find('.data-action-name').hide();
}

function showTextButtons(){
    $('#dt_header_add').removeClass('btn-icon');
    $('#dt_header_add').find('.data-action-name').show();
    $('#dt_header_export').removeClass('btn-icon');
    $('#dt_header_export').find('.data-action-name').show();
    $('#dt_header_columns').removeClass('btn-icon');
    $('#dt_header_columns').find('.data-action-name').show();
}