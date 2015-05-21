$(function () {

    $('body').on('click', '.list-group .list-group-item', function () {
        $(this).toggleClass('active');
    });
    $('.list-arrows button').click(function () {
        var $button = $(this), actives = '';
        if ($button.hasClass('move-left')) {
            actives = $('.list-right ul li.active');
            actives.clone().appendTo('.list-left ul');
            actives.remove();
            var idArray = [];
            actives.each(function(){
                idArray.push($(this).val());
            });
            if(idArray.length > 0){
                $.ajax({
                    type: "POST",
                    url: "../../api/ban-clients.php",
                    data: { idArray:idArray },
                    dataType: "json",
                    complete: function(response){  
                        //$("#responsecontainer").html(response); 
                    }
                });
            }
        } else if ($button.hasClass('move-right')) {
            actives = $('.list-left ul li.active');
            actives.clone().appendTo('.list-right ul');
            actives.remove();
            var idArray = [];
            actives.each(function(){
                idArray.push($(this).val());

            })
            if(idArray.length > 0){
                $.ajax({
                    type: "POST",
                    url: "../../api/ban-clients.php",
                    data: { idArray:idArray },
                    dataType: "json",
                    complete: function(response){  
                        //$("#responsecontainer").html(response); 
                    }
                });
            }
        }
    });
    $('#remove-button').click(function () {
        var actives = '';
        actives = $('.list-right ul li.active');
        actives.remove();
        var idArray = [];
        actives.each(function(){
            idArray.push($(this).val());
        });
        if(idArray.length > 0){
            $.ajax({
                type: "POST",
                url: "../../api/remove-clients.php",
                data: { idArray:idArray },
                dataType: "json",
                complete: function(response){  
                    //$("#responsecontainer").html(response); 
                }
            });
        }
    });
    $('.dual-list .selector').click(function () {
        var $checkBox = $(this);
        if (!$checkBox.hasClass('selected')) {
            $checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active');
            $checkBox.children('i').removeClass('glyphicon-unchecked').addClass('glyphicon-check');
        } else {
            $checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active');
            $checkBox.children('i').removeClass('glyphicon-check').addClass('glyphicon-unchecked');
        }
    });
    $('[name="SearchDualList"]').keyup(function (e) {
        var code = e.keyCode || e.which;
        if (code == '9') return;
        if (code == '27') $(this).val(null);
        var $rows = $(this).closest('.dual-list').find('.list-group li');
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function () {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });

    $( document ).ready(function() {                    
        $.ajax({
            type: "GET",
            url: "../../api/get-clients.php",             
            dataType: "json",              
            success: function(response){  
                console.log(response);
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    if(response[i].suspenso)
                        $('#banned-clients').append('<li class="list-group-item" value="' + response[i].idutilizador + '">' + 'ID: ' + response[i].idutilizador + ' - ' + response[i].username + '</li>');
                    else
                        $('#unbanned-clients').append('<li class="list-group-item" value="' + response[i].idutilizador + '">' + 'ID: ' + response[i].idutilizador + ' - ' + response[i].username + '</li>');
                }
            }
        });
    });

});