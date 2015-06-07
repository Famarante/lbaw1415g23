<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 15:02:56
         compiled from "C:\xampp\htdocs\frmk\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348455744100d007d0-58462042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e220513226e500e8f01b117ef634f98545c98daa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\frmk\\templates\\admin\\admin.tpl',
      1 => 1433634172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348455744100d007d0-58462042',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55744100d80ce9_85727403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55744100d80ce9_85727403')) {function content_55744100d80ce9_85727403($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                    <a href="produtos.php?pagina=1">
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
