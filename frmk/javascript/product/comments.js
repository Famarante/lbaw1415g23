$(function () {

    $( document ).ready(function() {
        var idproduto = $('#idproduct').val();
        $.ajax({
            type: "GET",
            url: "../../api/get-comments.php", 
            data: { idproduto : idproduto } ,
            dataType: "json",              
            success: function(response){
                if(response[1].admin != null){
                    for ( var i = 0; i < response[0].length; i++ ) {
                        $('#list-comments').append('<div class="row"><div class="col-sm-10 col-sm-offset-1"><div class="panel panel-default"><div class="panel-heading"><div class="row"><div class="col-md-10"><strong>' + response[0][i].username + '</strong> <span class="text-muted">em ' + response[0][i].data +'</span></div><div class="col-md-2"><button type="button" class="btn btn-labeled btn-sm btn-danger pull-right" data-idcomment="' + response[0][i].idcomentario + '"><span class="btn-label"><i class="fa fa-trash"></i></span>  Remover</button></div></div></span></div><div class="panel-body">' + response[0][i].texto + '</div></div></div></div>');
                    }
                    bind_events();
                }
                else{
                    for ( var i = 0; i < response[0].length; i++ ) {
                        $('#list-comments').append('<div class="row"><div class="col-sm-10 col-sm-offset-1"><div class="panel panel-default"><div class="panel-heading"><strong>' + response[0][i].username + '</strong> <span class="text-muted">em ' + response[0][i].data +'</span></div><div class="panel-body">' + response[0][i].texto + '</div></div></div></div>');
                    }
                }
            }
        });
    });
    var bind_events = function(){
        $('#list-comments button').on("click", function(event){
            var idcomentario = $(this).attr('data-idcomment');
            var $ident = $(this);
            
            $.ajax({
                type: "GET",
                url: "../../api/remove-comment.php", 
                data: { idcomentario : idcomentario } ,
                dataType: "json",              
                success: function(response){  
                    $ident.parent().parent().parent().parent().parent().parent().remove();
                }
            });
        });
    }

});