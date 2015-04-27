<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 03:14:05
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\codes\401.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9156553d8cb2b858c9-15603208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4afb4f0069ac80b0a5e228b1c80929bb3432deff' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\codes\\401.tpl',
      1 => 1430097243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9156553d8cb2b858c9-15603208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553d8cb2bac2a0_77917598',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d8cb2bac2a0_77917598')) {function content_553d8cb2bac2a0_77917598($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    401 Não Autorizado</h2>
                <div class="error-details">
                    Não tem autorização para aceder a esta página!
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
