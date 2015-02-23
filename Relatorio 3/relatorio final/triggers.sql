drop trigger IF EXISTS update_produto;
drop trigger IF EXISTS update_pontos;

-- Quando faz insert no CompraProduto com a quantidade do produto em questao ele actualiza a quantidade na table Produto
create trigger update_produto AFTER INSERT ON CompraProduto BEGIN UPDATE Produto set quantidade = quantidade - NEW.quantidade where idProduto = NEW.idProduto; end;

-- Quando faz insert na tabela Compra actualiza os pontos do cliente consoante o valorFinal da Compra
create trigger update_pontos after insert on Compra BEGIN UPDATE Cliente set pontos = pontos + New.valorFinal*2 where idCliente = NEW.idCliente;end;
