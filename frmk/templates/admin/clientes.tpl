{include file='admin/header.tpl'}
<script src="{$BASE_URL}javascript/admin/clients.js"></script>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Clientes
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="container-fluid">

            <div class="row">

                <div class="dual-list list-left col-md-5">
                    <h3 class="text-center">Lista de Clientes</h3>
                    <div class="well text-right client-list">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                    <input type="text" name="SearchDualList" class="form-control" placeholder="search" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="btn-group">
                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group" id="unbanned-clients">
                        </ul>
                    </div>
                </div>

                <div class="list-arrows col-md-2 text-center">
                    <div class="row">
                    <button class="btn btn-default btn-sm move-left">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>

                    <button class="btn btn-default btn-sm move-right">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-labeled btn-danger" id="remove-button">
                    <span class="btn-label"><i class="glyphicon glyphicon-trash"></i></span>Remover</button>
                    </div>
                </div>

                <div class="dual-list list-right col-md-5">
                    <h3 class="text-center">Lista de Clientes Suspensos</h3>
                    <div class="well client-list">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="btn-group">
                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" name="SearchDualList" class="form-control" placeholder="search" />
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group" id="banned-clients">
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

{include file='admin/footer.tpl'}