$(function() {
    //$('.page-alert').hide();
    //Show alert
    $(document).ready(function(){
        
        //Is autoclosing alert
        var delay = 3000;
        
        var timeOut;
        if(delay != undefined)
        {
            clearTimeout(timeOut);
            timeOut = window.setTimeout(function() {
                    $('.page-alert').slideUp();
                }, delay);
        }
    });
    
    //Close alert
    $('.page-alert .close').click(function(e) {
        e.preventDefault();
        $(this).closest('.page-alert').slideUp();
    });
    
    //Clear all
    $('.clear-page-alerts').click(function(e) {
        e.preventDefault();
        $('.page-alert').slideUp();
    });
});