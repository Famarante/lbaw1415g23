<?php /* Smarty version Smarty-3.1.15, created on 2015-05-10 21:57:45
         compiled from "C:\xampp\htdocs\xampp\frmk_loja\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29488554fb839811752-03402798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4521f1946282f05a885797aabc0831321a9f0ded' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\common\\footer.tpl',
      1 => 1430097984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29488554fb839811752-03402798',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554fb839815624_53477146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554fb839815624_53477146')) {function content_554fb839815624_53477146($_smarty_tpl) {?>	<section id="modal-cart">
   		<div class="modal fade" role="dialog" id="cart-modal" tabindex="-1" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Carrinho de Compras</h4>
						</div>
						<div class="modal-body">
							<table class="table table-striped">
								<tr>
									<th>Quantidade</th>
									<th>Produto</th>
									<th>Preço</th>
									<th></th>
								</tr>
								<tr>
									<td>3</td>
									<td>Ventoinha</td>
									<td>30,00€</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Memoria Kingston</td>
									<td>60,00€</td>
									<td></td>
								</tr>
								<tr>
									<td>1</td>
									<td>Monitor Sharp</td>
									<td>99,99€</td>
									<td></td>
								</tr>
							</table>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
						<button type="button" class="btn btn-primary">Carrinho</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</section>

  </body>
</html>
<?php }} ?>
