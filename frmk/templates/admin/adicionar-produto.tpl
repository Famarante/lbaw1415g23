{include file='admin/header.tpl'}
<link href="{$BASE_URL}css/fileinput.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/fileinput/fileinput.min.js" type="text/javascript"></script>
<script src="{$BASE_URL}javascript/fileinput/fileinput_locale_pt.js" type="text/javascript"></script>
<script src="{$BASE_URL}javascript/fileinput/fileinput_locale_LANG.js" type="text/javascript"></script>
<script src="{$BASE_URL}javascript/admin/add-product.js" type="text/javascript"></script>
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
                <form class="form-horizontal" role="form" action="{$BASE_URL}actions/products/add-product.php" method="post" id="produto-form" enctype="multipart/form-data">

                    <legend><h2>Novo produto</h2></legend>
                    <fieldset>

                        <!-- Form Name -->


                        <!-- Seleção da categoria -->
                        <div class="form-group" id="categoria-div">
                            <label class="col-md-2 control-label" for="textinput">Categoria</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-categoria" name="categoria" required>
                                    <option value="">(Insira uma categoria)</option>
                                    <option id="outra" value="-1">Outra categoria</option>
                                </select>
                            </div>
                        </div>

                        <!-- Seleção da marca -->
                        <div class="form-group" id="marca-div">
                            <label class="col-md-2 control-label" for="textinput">Marca</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-marca" name="marca" required>
                                    <option value="">(Insira uma marca)</option>
                                    <option id="outra" value="-1">Outra marca</option>
                                </select>
                            </div>
                        </div>

                        <!-- Seleção do modelo -->
                        <div class="form-group" id="modelo-div">
                            <label class="col-md-2 control-label" for="textinput">Modelo</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-modelo" name="modelo" required>
                                    <option value="">(Insira um modelo)</option>
                                    <option id="outra" value="-1">Outro modelo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Seleção de versão -->
                        <div class="form-group" id="modelo-div">
                            <label class="col-md-2 control-label" for="textinput">Versão</label>
                            <div class="col-md-10">
                                <input type="text" placeholder="Versão" class="form-control" name="versão" required>
                            </div>
                        </div>

                        <!-- Seleção da cor -->
                        <div class="form-group" id="cor-div">
                            <label class="col-md-2 control-label" for="textinput">Cor</label>
                            <div class="col-md-10">
                                <select class="form-control" id="select-cor" name="cor" required>
                                    <option value="">(Insira uma cor)</option>
                                    <option id="outra" value="-1">Outra cor</option>
                                </select>
                            </div>
                        </div>

                        <!-- Nome do produto -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textinput">Nome</label>
                            <div class="col-md-10">
                                <input type="text" placeholder="Nome do produto" name="nome" class="form-control" required>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textinput">Preço</label>
                            <div class="col-md-4">
                                <input type="number" step="0.01" min="0.01" name="preço" placeholder="Preço do produto" class="form-control" required>
                            </div>

                            <label class="col-md-2 control-label" for="textinput">Stock</label>
                            <div class="col-md-4">
                                <input type="number" min="0" name="stock" placeholder="Insira o stock do produto" class="form-control" required>
                            </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textinput">Descrição</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" id="descrição" name="descrição" required></textarea>
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