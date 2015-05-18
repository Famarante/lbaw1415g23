<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 02:16:26
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\admin\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7068554f4c9584f318-60897677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45eab366bc9e5accb86304184f7f91296cbd65ea' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\admin\\clientes.tpl',
      1 => 1431303015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7068554f4c9584f318-60897677',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554f4c9587b0d9_81811395',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f4c9587b0d9_81811395')) {function content_554f4c9587b0d9_81811395($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin/clients.js"></script>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Clientes
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="container-fluid">

            <div class="row">

                <div class="dual-list list-left col-md-5">
                    <h3 class="text-center">Lista de Clientes</h3>
                    <div class="well text-right client-list">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                    <input type="text" name="SearchDualList" class="form-control" placeholder="search" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="btn-group">
                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group" id="unbanned-clients">
                        </ul>
                    </div>
                </div>

                <div class="list-arrows col-md-2 text-center">
                    <div class="row">
                    <button class="btn btn-default btn-sm move-left">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>

                    <button class="btn btn-default btn-sm move-right">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-labeled btn-danger" id="remove-button">
                    <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Remover</button>
                    </div>
                </div>

                <div class="dual-list list-right col-md-5">
                    <h3 class="text-center">Lista de Clientes Suspensos</h3>
                    <div class="well client-list">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="btn-group">
                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" name="SearchDualList" class="form-control" placeholder="search" />
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group" id="banned-clients">
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
