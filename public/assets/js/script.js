// function for input only number only work at event keypress
$('.only-number').on('keypress', function(data){

    if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57))
    {
        return false;
    }

    if($('.only-number').val().length > 11)
    {
        return false;
    }

});

$('#no_tlpn').on('keypress',function(data){
    if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57))
    {
        return false;
    }

    if($(this).val().length > 11)
    {
        return false;
    }

})
