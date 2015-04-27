<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 03:32:55
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\common\promos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23175553d915ceefbd4-63592277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '603de53ac5833b75e6db55a5662343143abfcd2a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\common\\promos.tpl',
      1 => 1430098369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23175553d915ceefbd4-63592277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553d915cef2a35_06046873',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d915cef2a35_06046873')) {function content_553d915cef2a35_06046873($_smarty_tpl) {?>﻿<section class="promos">
	<div class="container nopad">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators fontsize1" hidden>
				<li data-target="Rato" data-slide-to="0" class="active"></li>
				<li data-target="Portatil" data-slide-to="1"></li>
				<li data-target="PG" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item imgCarousel active">
					<img class="imgCarousel center-block" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/Rato.jpg" alt="...">
					<div class="carousel-caption promo-text">
						PROMOÇÃO - 39.90€
					</div>
				</div>
				<div class="item imgCarousel">
					<img class="imgCarousel center-block" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/Portatil.jpg" alt="...">
					<div class="carousel-caption">
					...
					</div>
				</div>
				<div class="item imgCarousel">
					<img class="imgCarousel center-block" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/PG.jpg" alt="...">
					<div class="carousel-caption">
					...
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section><?php }} ?>
