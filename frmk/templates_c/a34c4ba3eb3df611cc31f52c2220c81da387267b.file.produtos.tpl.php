<?php /* Smarty version Smarty-3.1.15, created on 2015-05-25 16:33:41
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\admin\produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25402555ca08f3731e5-68682639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34c4ba3eb3df611cc31f52c2220c81da387267b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\admin\\produtos.tpl',
      1 => 1432564408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25402555ca08f3731e5-68682639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555ca08f3eb8e4_03472117',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'PRODUTOS' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ca08f3eb8e4_03472117')) {function content_555ca08f3eb8e4_03472117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.twbsPagination.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/swalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/swalert/sweetalert.css">
<script>
    $(function () {
        var maxpages;
        $( document ).ready(function() {                    
            $.ajax({
                type: "GET",
                url: "../../api/get-categories.php",             
                dataType: "json",              
                success: function(response){  
                    for ( var i = 0, l = response.length; i < l; i++ ) {
                        $("#filtro-categoria #todas-categorias").after('<option value="' + response[i].idcategoria + '">' + response[i].nome + '</option>');
                    }
                }
            });
            $.ajax({
                type: "GET",
                url: "../../api/get-brands.php",             
                dataType: "json",              
                success: function(response){  
                    for ( var i = 0, l = response.length; i < l; i++ ) {
                        $("#filtro-marca #todas-marcas").after('<option value="' + response[i].idmarca + '">' + response[i].nome + '</option>');
                    }
                }
            });

            $.ajax({
                type: "GET",
                url: "../../api/get-products.php",             
                dataType: "json",
                success: function(response){
                    maxpages = Math.ceil(response.length/10);

                    $('#product-pagination').twbsPagination({
                        totalPages: maxpages,
                        visiblePages: 5,
                        first: '<i class="fa fa-step-backward"></i>',
                        prev: '<i class="fa fa-caret-left"></i>',
                        next: '<i class="fa fa-caret-right"></i>',
                        last: '<i class="fa fa-step-forward"></i>',
                        onPageClick: function (event, page) {
                            $('#product-page').text('Produtos - Página ' + page);
                        },
                        
                                                            href: '?pagina={{number}}'
                                                            
                                                            });
                }
            });
        });

        $('.update-stock').click(function(){
            var oldStock = parseInt($(this).parent().parent().parent().find('.stock-value').html(), 10);
            $(this).parent().parent().parent().find('.stock-value').html('<form class="form-horizontal" role="form"><div class="form-group"><input type="number" min="0" name="stock" placeholder="Insira o stock do produto" value="' + oldStock + '" class="form-control" required></div></form>');
            $(this).hide();
            $(this).parent().find('.submit-stock').show();
        });
        $('.submit-stock').click(function(){
            var newStock = $(this).parent().parent().parent().find('input').val();
            //console.log($(this).parent().parent().parent().html().find('.idproduto').html());
            var idprod = $(this).parent().parent().parent().find('.idproduto').find('strong').html();
            var $selector = $(this).parent().parent().parent().find('.stock-value');
            $.ajax({
                type: "POST",
                url: "../../api/update-stock.php", 
                data: { stock : newStock , idproduto : idprod },
                dataType: "json",              
                success: function(response){
                    $selector.html(newStock);
                }
            });
            $(this).hide();
            $(this).parent().find('.update-stock').show();
        });
        $('.remove-product').click(function(){
            var oldname = $(this).parent().parent().parent().find('.nomeproduto').html();
            var idprod = $(this).parent().parent().parent().find('.idproduto').find('strong').html();
            var $selector = $(this).parent().parent().parent();
            console.log(oldname, idprod);
            swal({
                title: "Tem a certeza?",   
                text: "Vai remover o produto selecionado!",   
                type: "warning",  
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, remover!",
                closeOnConfirm: false
            }, function(){
                $.ajax({
                    type: "POST",
                    url: "../../api/remove-product.php", 
                    data: { idproduto : idprod },
                    dataType: "json",              
                    success: function(response){
                        swal("Removido!", oldname + " removido com sucesso.", "success");
                        $selector.remove();
                    },
                    error: function(response){
                        swal("Erro!", "Ocorreu um erro a remover " + oldname, "danger");
                    }
                });
            });
        });
    });
</script>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Produtos
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="container-fluid">


            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="input-group" id="adv-search">
                        <input type="text" class="form-control" placeholder="Pesquisar produto" />
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <div class="dropdown dropdown-lg">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="filter">Categoria</label>
                                                <select class="form-control" id="filtro-categoria">
                                                    <option value="0" id="todas-categorias" selected>Todas as categorias</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="filter">Marca</label>
                                                <select class="form-control" id="filtro-marca">
                                                    <option value="0" id="todas-marcas" selected>Todas as marcas</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-desktop fa-5x"></i>
                                </div>

                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['PRODUTOS']->value) {?>
                        <div class="panel-footer">
                            <!--<<div class="row">
<form class="form-inline" role="form">
<div class="form-group col-md-3 col-md-offset-9">
<label class="filter-col" for="pref-perpage">Produtos por página:</label>
<select id="pref-perpage" class="form-control">
<option value="2">2</option>
<option value="5">5</option>
<option selected="selected" value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="30">30</option>
<option value="50">50</option>
</select>            
</div>
</form>
</div>
-->
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1 text-center">ID</th>
                                                <th class="col-md-1">Categoria</th>
                                                <th class="col-md-3">Nome</th>
                                                <th class="col-md-2">Modelo</th>
                                                <th class="col-md-1">Marca</th>
                                                <th class="col-md-1">Preço</th>
                                                <th class="col-md-1">Stock</th>
                                                <th class="text-center col-md-2"></th>
                                            </tr>
                                        </thead>
                                        <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUTOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                                        <tr>
                                            <td class="col-md-1 text-center idproduto"><strong><?php echo $_smarty_tpl->tpl_vars['produto']->value['idproduto'];?>
</strong></td>
                                            <td class="col-md-1"><?php echo $_smarty_tpl->tpl_vars['produto']->value['categoria_nome'];?>
</td>
                                            <td class="col-md-3 nomeproduto"><?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</td>
                                            <td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['produto']->value['modelo_nome'];?>
</td>
                                            <td class="col-md-1"><?php echo $_smarty_tpl->tpl_vars['produto']->value['marca_nome'];?>
</td>
                                            <td class="col-md-1"><?php echo $_smarty_tpl->tpl_vars['produto']->value['preco'];?>
</td>
                                            <td class="col-md-1 stock-value"><?php echo $_smarty_tpl->tpl_vars['produto']->value['stock'];?>
</td>
                                            <td class="text-right col-md-2">
                                                <div class="row">
                                                    <button class="btn btn-xs btn-primary update-stock">
                                                        <i class="fa fa-plus"></i> Actualizar stock
                                                    </button>
                                                    <button class="btn btn-xs btn-warning active submit-stock" hidden>
                                                        <i class="fa fa-check"></i> Guardar stock
                                                    </button>
                                                    <a class='btn btn-info btn-xs' href="edit-produto.php?id=<?php echo $_smarty_tpl->tpl_vars['produto']->value['idproduto'];?>
"><span class="fa fa-pencil"></span> Editar</a> 
                                                    <button class="btn btn-danger btn-xs remove-product"><span class="fa fa-times"></span> Remover</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <ul id="product-pagination" class="pagination pagination">

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php }?>
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
