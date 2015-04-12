
/*!Produtos de uma categoria dentro de um intervalo de preço*/
SELECT p.idproduto, p.descricao, p.disponibilidade, p.nome, p.preco, p.idcor, p.idversao, p.idcategoria
	FROM produto p
		WHERE p.idcategoria = 3 AND p.preco > 5::numeric AND p.preco < 1000::numeric
		ORDER BY p.preco;
  
  
 /*!Utilizadores com encomendas pendentes*/
SELECT utilizador.username, encomenda.idencomenda
	FROM utilizador, cliente, encomenda
		WHERE cliente.idcliente = encomenda.idcliente AND cliente.idcliente = utilizador.idutilizador AND encomenda.idestadoencomenda < 5
		ORDER BY utilizador.username;

  
  /*!ver lista de paises*/
SELECT pais.idpais, pais.nome
	FROM pais;
   
   
/*!Ver produtos de uma categoria*/  
SELECT produto.idproduto, produto.descricao, produto.disponibilidade, produto.nome, produto.preco, produto.idcor, produto.idversao, produto.idcategoria
	FROM produto
		WHERE produto.idcategoria = 3;
		

/*!clientes com morada num determinado pais*/
SELECT DISTINCT utilizador.username, cliente.nome, localidade.nome AS localidade
	FROM utilizador
		JOIN cliente ON utilizador.idutilizador = cliente.idcliente
		JOIN moradascliente ON cliente.idcliente = moradascliente.idcliente
		JOIN morada ON moradascliente.idmorada = morada.idmorada
		JOIN codigopostal ON morada.idcodigopostal = codigopostal.idcodigopostal
		JOIN localidade ON codigopostal.idlocalidade = localidade.idlocalidade
		JOIN pais ON localidade.idpais = pais.idpais
			WHERE pais.nome::text = 'Portugal'::text
		ORDER BY localidade.nome;
		
		
/*!feedback+user para certo produto*/
SELECT DISTINCT produto.nome, utilizador.username, comentario.texto
	FROM utilizador, produto, comentario
		WHERE comentario.idutilizador = utilizador.idutilizador AND comentario.idproduto = produto.idproduto AND produto.idproduto = 3;
		

/*!todos os produtos de uma certa marca*/
SELECT produto.nome
	FROM produto
		JOIN versao ON produto.idversao = versao.idversao
		JOIN modelo ON versao.idmodelo = modelo.idmodelo
		JOIN marca ON modelo.idmarca = marca.idmarca
			WHERE marca.nome::text = 'Acer'::text;
			
			
/*!top x clientes com mais encomendas*/
SELECT cliente.nome, count(cliente.nome) AS numencomendas
	FROM cliente
		JOIN encomenda ON cliente.idcliente = encomenda.idcliente
		GROUP BY cliente.nome
		ORDER BY count(cliente.nome) DESC
	LIMIT 3;
	
	
/*!top x produtos mais vendidos*/
SELECT produto.nome AS produto, versao.nome AS versao, modelo.nome AS modelo, marca.nome AS marca, sum(linhafatura.quantidade) AS qtvendida
	FROM produto
		JOIN linhafatura ON produto.idproduto = linhafatura.idproduto
		JOIN versao ON versao.idversao = produto.idversao
		JOIN modelo ON modelo.idmodelo = versao.idmodelo
		JOIN marca ON marca.idmarca = modelo.idmarca
		GROUP BY produto.nome, versao.nome, modelo.nome, marca.nome
		ORDER BY sum(linhafatura.quantidade) DESC, produto.nome
	LIMIT 5;
	
	
/*!Todos os usernames dos clientes*/
SELECT utilizador.username
	FROM utilizador
		JOIN cliente ON cliente.idcliente = utilizador.idutilizador;