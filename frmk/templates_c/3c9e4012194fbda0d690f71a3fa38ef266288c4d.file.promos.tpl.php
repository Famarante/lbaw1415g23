<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 14:52:34
         compiled from "C:\xampp\htdocs\frmk\templates\common\promos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971455743e92be2ef6-18630841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c9e4012194fbda0d690f71a3fa38ef266288c4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\frmk\\templates\\common\\promos.tpl',
      1 => 1433634172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971455743e92be2ef6-18630841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55743e92bf53f0_08859601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55743e92bf53f0_08859601')) {function content_55743e92bf53f0_08859601($_smarty_tpl) {?>﻿<section class="promos">
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
