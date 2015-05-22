<?php /* Smarty version Smarty-3.1.15, created on 2015-05-21 18:29:50
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22303554f474f5c3fb7-85193305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655d14cf9ecafc1fe78bc1e736e25e24b3ab07e6' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\admin\\admin.tpl',
      1 => 1432225789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22303554f474f5c3fb7-85193305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554f474f5eda72_82759663',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f474f5eda72_82759663')) {function content_554f474f5eda72_82759663($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>
    $(function () {
        $( document ).ready(function() {                    
            $.ajax({
                type: "GET",
                url: "../../api/get-clients.php",             
                dataType: "json",              
                success: function(response){  
                    $("#num-clientes").html(response.length);
                }
            });
            $.ajax({
                type: "GET",
                url: "../../api/get-products.php",             
                dataType: "json",              
                success: function(response){  
                    $("#num-produtos").html(response.length);
                }
            });
        });
    });
</script>

<div id="page-wrapper">

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    0100Tech <small>Painel de administração</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-md-9 text-right">
                                <div class="huge" id="num-clientes"></div>
                                <div>Clientes</div>
                            </div>
                        </div>
                    </div>
                    <a href="clientes.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver em detalhe</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa fa-desktop fa-5x"></i>
                            </div>
                            <div class="col-md-9 text-right">
                                <div class="huge" id="num-produtos"></div>
                                <div>Produtos</div>
                            </div>
                        </div>
                    </div>
                    <a href="produtos.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver em detalhe</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-md-9 text-right">
                                <div class="huge" id="num-encomendas-pendentes">124</div>
                                <div>Encomendas pendentes</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Ver em detalhe</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-md-9 text-right">
                                <div class="huge" id="num-comentarios">13</div>
                                <div>Comentários</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Ver em detalhe</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
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
