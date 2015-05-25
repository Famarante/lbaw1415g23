{include file='admin/header.tpl'}
<link href="{$BASE_URL}css/fileinput.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/fileinput/fileinput.min.js" type="text/javascript"></script>
<script src="{$BASE_URL}javascript/fileinput/fileinput_locale_pt.js" type="text/javascript"></script>
<script src="{$BASE_URL}javascript/fileinput/fileinput_locale_LANG.js" type="text/javascript"></script>
<script>
$(function () {

    $("#input-imagem").fileinput({
         initialPreview: [
        "<img src='{$BASE_URL}images/products/{$PRODUTO.imagem}' class='file-preview-image' alt='{$PRODUTO.nome}' title='{$PRODUTO.nome}'>",
        ],
        language: "pt",
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
                    if(response[i].idmodelo == {$PRODUTO.idmodelo})
                        $("#select-modelo #outra").before('<option value="' + response[i].idmodelo + '" selected>' + response[i].nome + '</option>');
                    else
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
                    if(response[i].idcategoria == {$PRODUTO.idcategoria})
                        $("#select-categoria #outra").before('<option value="' + response[i].idcategoria + '" selected>' + response[i].nome + '</option>');
                    else
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
                    if(response[i].idmarca == {$PRODUTO.idmarca})
                        $("#select-marca #outra").before('<option value="' + response[i].idmarca + '" selected>' + response[i].nome + '</option>');
                    else
                        $("#select-marca #outra").before('<option value="' + response[i].idmarca + '">' + response[i].nome + '</option>');
                }
            }
        });
        $.ajax({
            type: "POST",
            url: "../../api/get-models.php",
            data: { idmarca : {$PRODUTO.idmarca} },
            dataType: "json",              
            success: function(response){  
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    if(response[i].idmodelo == {$PRODUTO.idmodelo})
                        $("#select-modelo #outra").before('<option value="' + response[i].idmodelo + '" selected>' + response[i].nome + '</option>');
                    else
                        $("#select-modelo #outra").before('<option value="' + response[i].idmodelo + '">' + response[i].nome + '</option>');
                }
            },
        });
        $.ajax({
            type: "GET",
            url: "../../api/get-colors.php",             
            dataType: "json",              
            success: function(response){  
                for ( var i = 0, l = response.length; i < l; i++ ) {
                    if(response[i].idcor == {$PRODUTO.idcor})
                        $("#select-cor #outra").before('<option value="' + response[i].idcor + '" selected>' + response[i].nome + '</option>');
                    else
                        $("#select-cor #outra").before('<option value="' + response[i].idcor + '">' + response[i].nome + '</option>');
                }
            }
        });
    });


});
</script>
<div id="page-wrapper">

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="error-message">

                    {foreach $ERROR_MESSAGES as $error}
                    <div class="oaerror danger page-alert">
                        <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>ERRO</strong> - {$error}
                    </div>
                    {/foreach}
                </div>
                <div class="success-message">

                    {foreach $SUCCESS_MESSAGES as $success}
                    <div class="oaerror success page-alert">
                        <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>SUCESSO</strong> - {$success}
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" role="form" action="{$BASE_URL}actions/products/edit-product.php" method="post" id="produto-form" enctype="multipart/form-data">

                    <legend><h2>Editar produto</h2></legend>
                    <fieldset>
                        <div class="form-group" hidden>
                            <input type="text" name="idproduto" class="form-control" value="{$PRODUTO.idproduto}">
                        </div>
                        <!-- Form Name -->


                        <!-- Seleção da categoria -->
                        <div class="form-group" id="categoria-div">
                            <label class="col-md-2 control-label" for="textinput">Categoria</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-categoria" name="categoria" required>
                                    <option value="" hidden></option>
                                    <option id="outra" value="-1">Outra categoria</option>
                                </select>
                            </div>
                        </div>

                        <!-- Seleção da marca -->
                        <div class="form-group" id="marca-div">
                            <label class="col-md-2 control-label" for="textinput">Marca</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-marca" name="marca" disabled>
                                    <option value="" hidden></option>
                                    <option id="outra" value="-1">Outra marca</option>
                                </select>
                            </div>
                        </div>

                        <!-- Seleção do modelo -->
                        <div class="form-group" id="modelo-div">
                            <label class="col-md-2 control-label" for="textinput">Modelo</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-modelo" name="modelo" disabled>
                                    <option value="" hidden></option>
                                    <option id="outra" value="-1">Outro modelo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Seleção de versão -->
                        <div class="form-group" id="modelo-div">
                            <label class="col-md-2 control-label" for="textinput">Versão</label>
                            <div class="col-md-10">
                                <input type="text" placeholder="Versão" class="form-control" name="versão" value="{$PRODUTO.versao_nome}" disabled>
                            </div>
                        </div>

                        <!-- Seleção da cor -->
                        <div class="form-group" id="cor-div">
                            <label class="col-md-2 control-label" for="textinput">Cor</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-cor" name="cor" disabled>
                                    <option value="" hidden></option>
                                    <option id="outra" value="-1">Outra cor</option>
                                </select>
                            </div>
                        </div>

                        <!-- Nome do produto -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textinput">Nome</label>
                            <div class="col-md-10">
                                <input type="text" placeholder="Nome do produto" name="nome" class="form-control" value="{$PRODUTO.nome}" required>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textinput">Preço</label>
                            <div class="col-md-4">
                                <input type="number" step="0.01" min="0.01" name="preço" placeholder="Preço do produto" class="form-control" value="{$PRODUTO.preco}" required>
                            </div>

                            <label class="col-md-2 control-label" for="textinput">Stock</label>
                            <div class="col-md-4">
                                <input type="number" min="0" name="stock" placeholder="Insira o stock do produto" class="form-control" value="{$PRODUTO.stock}" required>
                            </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textinput">Descrição</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" id="descrição" name="descrição" required>{$PRODUTO.descricao}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div><!-- /.col-lg-12 -->
            <div class="col-md-4">
                <!-- Form Name -->
                <legend><h2>Upload de imagem</h2></legend>

                <input id="input-imagem" name="imagem" type="file" accept="image/*" form="produto-form">
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>

{include file='admin/footer.tpl'}