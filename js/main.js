jQuery(document).ready(function($) {
    $('#aweber_type').on('change', function(){
        if ($(this).val() == 'custom') {
            $('#aweber_id_display').show();
        } else {
            $('#aweber_id_display').hide();
        }
    });
    /*
    $(':file').hover(function(){
       $(this).css('cursor', 'pointer');
    });
    */
});



