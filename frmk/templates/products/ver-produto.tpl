{include file='common/header.tpl'}

<div class="item-container">	
    <div class="container">	
        <div class="col-md-12">
            <div class="vproduct col-md-4 text-center">
                    <img id="item-display" src="{$BASE_URL}/images/products/{$PRODUTO.imagem}" alt="">
            </div>
            <div class="col-md-8">
                <div class="vproduct-title">{$PRODUTO.nome}</div>
                <div class="vproduct-model">{$PRODUTO.modelo_nome}</div>
                <div class="vproduct-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                <hr>
                <div class="vproduct-price">{$PRODUTO.preco}€</div>
                {IF $PRODUTO.disponibilidade}
                    <div class="vproduct-stock">Em stock</div>
                {ELSE}
                    <div class="vproduct-nstock">Sem Stock</div>
                {/IF}
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
                    {$PRODUTO.descricao}
                </section>

            </div>
            <div class="tab-pane fade" id="comments">

                <section class="container">
                    <div class="container">
                        <div class="row">

                        <div class="col-md-12">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <form>
                                        <textarea id="add-comment" placeholder="Escreva aqui o seu comentário" ></textarea>
                                        
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


{include file='common/footer.tpl'}