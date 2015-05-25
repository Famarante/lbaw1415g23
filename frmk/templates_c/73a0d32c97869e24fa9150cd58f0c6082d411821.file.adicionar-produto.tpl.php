<?php /* Smarty version Smarty-3.1.15, created on 2015-05-25 00:09:54
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\admin\adicionar-produto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12505555ca165935d22-02934708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a0d32c97869e24fa9150cd58f0c6082d411821' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\admin\\adicionar-produto.tpl',
      1 => 1432492157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12505555ca165935d22-02934708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555ca1659368b1_91726459',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ca1659368b1_91726459')) {function content_555ca1659368b1_91726459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/fileinput.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/fileinput/fileinput.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/fileinput/fileinput_locale_pt.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/fileinput/fileinput_locale_LANG.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin/add-product.js" type="text/javascript"></script>
<div id="page-wrapper">

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="error-message">

                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                    <div class="oaerror danger page-alert">
                        <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>ERRO</strong> - <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                    <?php } ?>
                </div>
                <div class="success-message">

                    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
                    <div class="oaerror success page-alert">
                        <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>SUCESSO</strong> - <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/add-product.php" method="post" id="produto-form" enctype="multipart/form-data">

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

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
