<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 19:46:38
         compiled from "C:\xampp\htdocs\frmk\templates\products\ver-produto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2308855744163319ee9-12731991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd2bfbe71f46238be8527d1c84c5f46730fb6ad5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\frmk\\templates\\products\\ver-produto.tpl',
      1 => 1433689518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2308855744163319ee9-12731991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557441633c7fe5_81408456',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'PRODUTO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557441633c7fe5_81408456')) {function content_557441633c7fe5_81408456($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/product/comments.js"></script>

<div class="item-container">	
    <div class="container">	
        <div class="col-md-12">
            <div class="vproduct col-md-4 text-center">
                    <img id="item-display" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/products/<?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value['imagem'];?>
" alt="">
            </div>
            <div class="col-md-8">
                <div class="vproduct-title"><?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value['nome'];?>
</div>
                <div class="vproduct-model"><?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value['modelo_nome'];?>
</div>
                <div class="vproduct-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                <hr>
                <div class="vproduct-price"><?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value['preco'];?>
€</div>
                <?php if ($_smarty_tpl->tpl_vars['PRODUTO']->value['disponibilidade']) {?>
                    <div class="vproduct-stock">Em stock</div>
                <?php } else { ?>
                    <div class="vproduct-nstock">Sem Stock</div>
                <?php }?>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 btn-group cart">
                        <button type="button" class="btn">
                            <i class="fa fa-shopping-cart"></i>
                            Adicionar ao carrinho 
                        </button>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 wishlist">
                        <input type="number" class="form-control" placeholder="Quantidade" step="1" value="1" min="1">
                    </div>
                </div>
            </div>
        </div>

    </div> 
</div>
<div class="container">		
    <div class="col-md-12 vproduct-info">
        <ul id="myTab" class="nav nav-tabs nav_tabs">

            <li class="active"><a href="#description" data-toggle="tab">Descrição</a></li>
            <li><a href="#comments" data-toggle="tab">Comentários</a></li>
            <li><a href="#feedbacks" data-toggle="tab">Feedbacks</a></li>

        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="description">

                <section class="container vproduct-info">
                    <?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value['descricao'];?>

                </section>

            </div>
            <div class="tab-pane fade" id="comments">
                <section class="container">
                    <div class="container">
                        <div class="row">

                        <div class="col-md-12">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <form role="form" id="comment-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/comment.php" method="post">
                                        <textarea class ="form-group" id="add-comment" name="comment" placeholder="Escreva aqui o seu comentário" ></textarea>
                                        <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value['idproduto'];?>
 name="idProduct" />
                                        <input type="hidden" id="date" name="date"/>
                                        <script>document.getElementById("date").value = new Date().toJSON().slice(0,10)</script>
                                        <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Submeter</button>
                                    </form>
                                </div><!-- Status Upload  -->
                            </div><!-- Widget Area -->
                        </div>

                        </div>
                    </div>
                </section>
                <section class="container">
                    
                </section>

            </div>
            <div class="tab-pane fade" id="feedbacks">

            </div>
        </div>
        <hr>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
