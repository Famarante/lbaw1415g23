$(function () {

    $("#input-imagem").fileinput({
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "Escolher imagem",
        browseIcon: '<i class="glyphicon glyphicon-picture"></i>',
        removeClass: "btn btn-danger",
        removeLabel: "Remover",
        removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
        showUpload: false
    });
    $( "#select-categoria" ).change(function () {
        if($( "#select-categoria option:selected").val() == -1){
            $("#categoria-div").after('<div class="form-group" id="nova-categoria"><label class="col-md-2 control-label" for="textinput">Outra categoria</label><div class="col-md-10"><input type="text" name="nova-categoria" placeholder="Insira a nova categoria" class="form-control"></div></div>');
        }
        else{
            $("#nova-categoria").remove();
        }
    });

    $( "#select-marca" ).change(function () {
        if($( "#select-marca option:selected").val() == -1){
            $("#marca-div").after('<div class="form-group" id="nova-marca"><label class="col-md-2 control-label" for="textinput">Outra marca</label><div class="col-md-10"><input type="text" name="nova-marca" placeholder="Insira a nova marca" class="form-control" required></div></div>');
        }
        else if (!$( "#select-marca option:selected").val()){
            $("#select-modelo #outra").prevAll().each(function(){
                if($(this).val() != "")
                    $(this).remove();
            });
        }
        else{
            $("#nova-marca").remove();
        }

        var idmar = $( "#select-marca option:selected").val();

        $.ajax({
            type: "POST",
            url: "../../api/get-models.php",
            data: { idmarca : idmar },
            dataType: "json",              
            success: function(response){  
                $("#select-modelo #outra").prevAll().each(function(){
                    if($(this).val() != "")
                        $(this).remove();
                });
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    $("#select-modelo #outra").before('<option value="' + response[i].idmodelo + '">' + response[i].nome + '</option>');
                }
            },
        });
    });

    $( "#select-modelo" ).change(function () {
        if($( "#select-modelo option:selected").val() == -1){
            $("#modelo-div").after('<div class="form-group" id="novo-modelo"><label class="col-md-2 control-label" for="textinput">Outro modelo</label><div class="col-md-10"><input type="text" name="novo-modelo" placeholder="Insira um novo modelo" class="form-control" required></div></div>');
        }
        else{
            $("#novo-modelo").remove();
        }

        var idmar = $( "#select-marca option:selected").val();
        if(!idmar){
            $.ajax({
                type: "POST",
                url: "../../api/get-models.php",
                data: { idmarca : idmar },
                dataType: "json",              
                success: function(response){  
                    $("#select-modelo #outra").prevAll().each(function(){
                        if($(this).val() != "")
                            $(this).remove();
                    });
                    for ( var i = 0, l = response.length; i < l; i++ ) {
                        $("#select-modelo #outra").before('<option value="' + response[i].idmodelo + '">' + response[i].nome + '</option>');
                    }
                },
            });
        }
    });

    $( "#select-cor" ).change(function () {
        if($( "#select-cor option:selected").val() == -1){
            $("#cor-div").after('<div class="form-group" id="nova-cor"><label class="col-md-2 control-label" for="textinput">Outra cor</label><div class="col-md-10"><input type="text" name="nova-cor" placeholder="Insira uma nova cor" class="form-control" required></div></div>');
        }
        else{
            $("#nova-cor").remove();
        }
    });

    $( document ).ready(function() {                    
        $.ajax({
            type: "GET",
            url: "../../api/get-categories.php",             
            dataType: "json",              
            success: function(response){  
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    $("#select-categoria #outra").before('<option value="' + response[i].idcategoria + '">' + response[i].nome + '</option>');
                }
            }
        });
        $.ajax({
            type: "GET",
            url: "../../api/get-brands.php",             
            dataType: "json",              
            success: function(response){  
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    $("#select-marca #outra").before('<option value="' + response[i].idmarca + '">' + response[i].nome + '</option>');
                }
            }
        });
        $.ajax({
            type: "GET",
            url: "../../api/get-colors.php",             
            dataType: "json",              
            success: function(response){  
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    $("#select-cor #outra").before('<option value="' + response[i].idcor + '">' + response[i].nome + '</option>');
                }
            }
        });
    });


});