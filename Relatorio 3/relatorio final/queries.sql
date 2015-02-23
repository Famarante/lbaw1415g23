--1) lista crescente dos funcionarios que atenderam mais clientes

--Araujo Santos|5|4
--Mariana Melo|2|6


select * from (select f.nome, f.idFunc, COUNT(1) n from Funcionario as f, Compra as c where f.idFunc = registo_de_compra group by registo_de_compra) as t order by n ASC;

--2) lista crescente dos funcionarios que venderam mais produtos

--Araujo Santos|5|6
--Mariana Melo|2|17

select * from (select f.nome, f.idFunc, SUM(quantidade) n from Funcionario as f, Compra as c,CompraProduto as cp where f.idFunc = registo_de_compra AND cp.idCompra = c.idCompra  group by f.idFunc) as t order by n DESC;


--3) Lista crescente dos funcionarios que fizeram vendas com maior lucro


select * from (select f.nome, f.idFunc, sum(valorFinal) n from Funcionario as f, Compra as c where f.idFunc = registo_de_compra group by registo_de_compra) as t order by n ASC;

--Mariana Melo|2|75.0
--Araujo Santos|5|101.0


--4) Lista crescente dos funcionários que mais facturaram em 2013

--Mariana Melo|2|30.0
--Araujo Santos|5|83.0

select * from (select f.nome, f.idFunc, sum(valorFinal) n from Funcionario as f, Compra as c where f.idFunc = registo_de_compra AND data LIKE "%2013%" group by registo_de_compra) as t order by n ASC;

--5) Lista decrescente de lojas por lucro no ano de 2013

--Radio Markt Coimbra|3|101.0
--Radio Markt Lisboa|2|75.0

select l.nome,l.idLoja,sum(valorFinal) n from Loja as l,Compra as c, LojaFuncionario as lf, Funcionario as f where f.idFunc = registo_de_compra AND l.idLoja = lf.idLoja AND f.idFunc = lf.idFunc GROUP BY l.nome ;

--6) Lista decrescente dos meios de pagamento mais usados


select * from (select pa.nome, c.idMeio, count(1) n from MeioDePagamento as pa, Compra as c where pa.idMeio = c.idMeio group by c.idMeio) as t order by n desc;

--Multibanco|3|5
--Dinheiro|1|4
--Cheque|2|1

-- 9 e 10 são bastante semelhantes so muda de um count para um sum

--7) Lista decrescente dos meios de pagamento mais rentáveis

select * from (select pa.nome, c.idMeio, sum(valorFinal) n from MeioDePagamento as pa, Compra as c where pa.idMeio = c.idMeio group by c.idMeio) as t order by n desc;

--Multibanco|3|101.0
--Dinheiro|1|60.0
--Cheque|2|15.0

--8) Lista ordenada alfabeticamente dos filmes por realizador

--Clint Eastwood|12 anos de escravo|7
--James Cameron|007: Goldeneye|4
--Steven Spielberg|American Hustle|6
--Woody Allen|Lobo de Wall Street|1

select r.nome ,p.nome, p.idProduto from Produto as p, Realizador as R,Filme as f where p.idProduto = f.idProduto AND f.idRealizador = r.idRealizador ORDER BY r.nome;


--9) Lista os filmes e livros com a mesma categoria ordenados por nome

--3|4|007: Goldeneye
--3|6|American Hustle
--3|3|Hunger Games 4

select idCategoria,idProduto,nome from LivroCat where idCategoria = (select idCategoria from LivroCat INTERSECT select idCategoria from FilmeCat) UNION select idCategoria,idProduto,nome from FilmeCat where idCategoria = (select idCategoria from LivroCat INTERSECT select idCategoria from FilmeCat) ORDER BY nome;


//CREATE VIEW LIVRO, FILME

CREATE VIEW LivroCat AS select distinct idCategoria, p.idProduto, p.nome from Produto as p, LivroCategoria NATURAL JOIN Livro where p.idProduto = LivroCategoria.idProduto;


CREATE VIEW FilmeCat AS select distinct idCategoria, p.idProduto, p.nome from Produto as p, FilmeCategoria NATURAL JOIN Filme where p.idProduto = FilmeCategoria.idProduto;

