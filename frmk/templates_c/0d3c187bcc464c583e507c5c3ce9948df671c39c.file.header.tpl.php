<?php /* Smarty version Smarty-3.1.15, created on 2015-05-21 13:46:06
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10221553d2d4e4dc130-59104823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3c187bcc464c583e507c5c3ce9948df671c39c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\common\\header.tpl',
      1 => 1432208743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10221553d2d4e4dc130-59104823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553d2d4e5539f9_38481868',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d2d4e5539f9_38481868')) {function content_553d2d4e5539f9_38481868($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>0100Tech - Loja Online</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/error-messages.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/font-awesome.min.css" rel="stylesheet">
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.min.js"></script>
        <Script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/login.js"></Script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/error-messages.js"></script>
        <script>
            var activeEl = -1;
            $(function() {
                var items = $('.btn-nav');
                $( items[activeEl] ).addClass('active');
                $( ".btn-nav" ).click(function() {
                    $( items[activeEl] ).removeClass('active');
                    $( this ).addClass('active');
                    activeEl = $( ".btn-nav" ).index( this );
                });
            });
        </script>
    </head>
    <body>

        <header id="header">

            <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ('common/header_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ('common/header_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <h1>Logo</h1>
                        </div>
                        <div class="col-md-7 nopad">
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" placeholder="Pesquisar" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-right nopad">
                            <button type="button" class="btn btn-default btn-lg shopping-cart" data-toggle="modal" data-target="#cart-modal">
                                <div class="vcenter"><span id="qtd-products">20</span>&nbsp;Itens&nbsp;-&nbsp;<span id="price-products">preçooooo</span><i class="fa fa-shopping-cart"></i></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <button type="button" class="btn btn-nav">
                                    <span class="fa fa-home"></span>
                                    <p>Página Inicial</p>
                                </button>
                            </div>
                            <div class="btn-group dropdown dropdown-large">
                                <button type="button dropdown-toggle" class="btn btn-nav" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="glyphicon glyphicon-cd"></span>
                                    <p>Consumíveis</p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-large row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Glyphicons</li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Dropdowns</li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Aligninment options</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Disabled menu items</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Button groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Button toolbar</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Nesting</a></li>
                                            <li><a href="#">Vertical variation</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Button dropdowns</li>
                                            <li><a href="#">Single button dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Input groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Checkboxes and radio addons</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Navs</li>
                                            <li><a href="#">Tabs</a></li>
                                            <li><a href="#">Pills</a></li>
                                            <li><a href="#">Justified</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Navbar</li>
                                            <li><a href="#">Default navbar</a></li>
                                            <li><a href="#">Buttons</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Non-nav links</a></li>
                                            <li><a href="#">Component alignment</a></li>
                                            <li><a href="#">Fixed to top</a></li>
                                            <li><a href="#">Fixed to bottom</a></li>
                                            <li><a href="#">Static top</a></li>
                                            <li><a href="#">Inverted navbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group dropdown dropdown-large">
                                <button type="button" class="btn btn-nav">
                                    <span class="fa fa-desktop"></span>
                                    <p>Computadores</p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-large row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Glyphicons</li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Dropdowns</li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Aligninment options</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Disabled menu items</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Button groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Button toolbar</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Nesting</a></li>
                                            <li><a href="#">Vertical variation</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Button dropdowns</li>
                                            <li><a href="#">Single button dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Input groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Checkboxes and radio addons</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Navs</li>
                                            <li><a href="#">Tabs</a></li>
                                            <li><a href="#">Pills</a></li>
                                            <li><a href="#">Justified</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Navbar</li>
                                            <li><a href="#">Default navbar</a></li>
                                            <li><a href="#">Buttons</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Non-nav links</a></li>
                                            <li><a href="#">Component alignment</a></li>
                                            <li><a href="#">Fixed to top</a></li>
                                            <li><a href="#">Fixed to bottom</a></li>
                                            <li><a href="#">Static top</a></li>
                                            <li><a href="#">Inverted navbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group dropdown dropdown-large">
                                <button type="button" class="btn btn-nav">
                                    <span class="fa fa-hdd-o"></span>
                                    <p>Componentes</p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-large row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Glyphicons</li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Dropdowns</li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Aligninment options</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Disabled menu items</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Button groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Button toolbar</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Nesting</a></li>
                                            <li><a href="#">Vertical variation</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Button dropdowns</li>
                                            <li><a href="#">Single button dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Input groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Checkboxes and radio addons</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Navs</li>
                                            <li><a href="#">Tabs</a></li>
                                            <li><a href="#">Pills</a></li>
                                            <li><a href="#">Justified</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Navbar</li>
                                            <li><a href="#">Default navbar</a></li>
                                            <li><a href="#">Buttons</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Non-nav links</a></li>
                                            <li><a href="#">Component alignment</a></li>
                                            <li><a href="#">Fixed to top</a></li>
                                            <li><a href="#">Fixed to bottom</a></li>
                                            <li><a href="#">Static top</a></li>
                                            <li><a href="#">Inverted navbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group dropdown dropdown-large">
                                <button type="button" class="btn btn-nav">
                                    <span class="fa fa-keyboard-o"></span>
                                    <p>Periféricos</p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-large row nopad">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Glyphicons</li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Dropdowns</li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Aligninment options</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Disabled menu items</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Button groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Button toolbar</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Nesting</a></li>
                                            <li><a href="#">Vertical variation</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Button dropdowns</li>
                                            <li><a href="#">Single button dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Input groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Checkboxes and radio addons</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Navs</li>
                                            <li><a href="#">Tabs</a></li>
                                            <li><a href="#">Pills</a></li>
                                            <li><a href="#">Justified</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Navbar</li>
                                            <li><a href="#">Default navbar</a></li>
                                            <li><a href="#">Buttons</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Non-nav links</a></li>
                                            <li><a href="#">Component alignment</a></li>
                                            <li><a href="#">Fixed to top</a></li>
                                            <li><a href="#">Fixed to bottom</a></li>
                                            <li><a href="#">Static top</a></li>
                                            <li><a href="#">Inverted navbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group dropdown dropdown-large">
                                <button type="button" class="btn btn-nav">
                                    <span class="fa fa-wifi"></span>
                                    <p>Redes</p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-large row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Glyphicons</li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Dropdowns</li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Aligninment options</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Disabled menu items</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Button groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Button toolbar</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Nesting</a></li>
                                            <li><a href="#">Vertical variation</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Button dropdowns</li>
                                            <li><a href="#">Single button dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Input groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Checkboxes and radio addons</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Navs</li>
                                            <li><a href="#">Tabs</a></li>
                                            <li><a href="#">Pills</a></li>
                                            <li><a href="#">Justified</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Navbar</li>
                                            <li><a href="#">Default navbar</a></li>
                                            <li><a href="#">Buttons</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Non-nav links</a></li>
                                            <li><a href="#">Component alignment</a></li>
                                            <li><a href="#">Fixed to top</a></li>
                                            <li><a href="#">Fixed to bottom</a></li>
                                            <li><a href="#">Static top</a></li>
                                            <li><a href="#">Inverted navbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group dropdown dropdown-large">
                                <button type="button" class="btn btn-nav">
                                    <span class="fa fa-gamepad"></span>
                                    <p>Gaming</p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-large row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Glyphicons</li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Dropdowns</li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Aligninment options</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Disabled menu items</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Button groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Button toolbar</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Nesting</a></li>
                                            <li><a href="#">Vertical variation</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Button dropdowns</li>
                                            <li><a href="#">Single button dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Input groups</li>
                                            <li><a href="#">Basic example</a></li>
                                            <li><a href="#">Sizing</a></li>
                                            <li><a href="#">Checkboxes and radio addons</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Navs</li>
                                            <li><a href="#">Tabs</a></li>
                                            <li><a href="#">Pills</a></li>
                                            <li><a href="#">Justified</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Navbar</li>
                                            <li><a href="#">Default navbar</a></li>
                                            <li><a href="#">Buttons</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Non-nav links</a></li>
                                            <li><a href="#">Component alignment</a></li>
                                            <li><a href="#">Fixed to top</a></li>
                                            <li><a href="#">Fixed to bottom</a></li>
                                            <li><a href="#">Static top</a></li>
                                            <li><a href="#">Inverted navbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
        </header><?php }} ?>
