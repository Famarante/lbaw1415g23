{include file='admin/header.tpl'}

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

{include file='admin/footer.tpl'}