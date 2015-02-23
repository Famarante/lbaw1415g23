drop table if exists Cliente;
drop table if exists Funcionario;
drop table if exists Area;
drop table if exists Pais;
drop table if exists Fornecedor;

drop table if exists Localizacao;
drop table if exists Tipo;
drop table if exists Musica;
drop table if exists Artista;
drop table if exists Produtora;

drop table if exists Realizador;
drop table if exists Editora;
drop table if exists Categoria;
drop table if exists MeioDePagamento;
drop table if exists Cidade;

drop table if exists Loja;
drop table if exists Compra;
drop table if exists Produto;
drop table if exists Jogo;
drop table if exists Filme;

drop table if exists Livro;
drop table if exists ClienteLoja;
drop table if exists LojaFuncionario;
drop table if exists FuncionarioArea;
drop table if exists CompraProduto;

drop table if exists ProdutoFornecedor;
drop table if exists TipoJogo;
drop table if exists MusicaArtista;
drop table if exists FilmeCategoria;
drop table if exists LivroCategoria;


create table Cliente(
	idCliente number primary key,
	nome nvarchar2(50) not null,
	morada nvarchar2(100),
	NIF number,
	pontos number,
	telemovel nvarchar2(13),
	email nvarchar2(50));

create table Funcionario(
	idFunc number primary key,
	nome nvarchar2(50) not null,
	morada nvarchar2(100),
	NIF number not null,
	telemovel nvarchar2(13) not null,
	email nvarchar2(50));

create table Area(
	idArea number primary key,
	nome nvarchar2(50) not null);

create table Pais(
	idPais number primary key,
	nome nvarchar2(50) not null);

create table Fornecedor(
	idForn number primary key,
	nome nvarchar2(50) not null,
	morada nvarchar2(100),
	NIF number not null,
	telefone nvarchar2(13) not null,
	email nvarchar2(50));

create table Localizacao(
	idLocal number primary key,
	prateleira nvarchar2(20),
	area nvarchar2(20));

create table Tipo(
	idTipo number primary key,
	nome nvarchar2(50) not null);

create table Musica(
	idProduto number primary key);

create table Artista(
	idArtista number primary key,
	nome nvarchar2(50) not null);

create table Produtora(
	idProdutora number primary key,
	nome nvarchar2(50) not null);

create table Realizador(
	idRealizador number primary key,
	nome nvarchar2(50) not null);

create table Editora(
	idEditora number primary key,
	nome nvarchar2(50) not null);

create table Categoria(
	idCategoria number primary key,
	nome nvarchar2(50) not null);

create table MeioDePagamento(
	idMeio number primary key,
	nome nvarchar2(50) not null);

create table Cidade(
	idCidade number primary key,
	nome nvarchar2(50) not null,
	idPais number references Pais(idPais));

create table Loja(
	idLoja number primary key,
	nome nvarchar2(50) not null,
	morada nvarchar2(100),
	idCidade number references Cidade(idCidade));

create table Compra(
	idCompra number primary key,
	codigo number not null,
	data date not null,
	valorInicial real not null,
	valorFinal real not null,
	DescontoCliente real,
	DescontoLoja real,
	fatura nvarchar2(9) not null,
	idCliente number references Cliente(idCliente),
	idMeio number references MeioDePagamento(idMeio),
	registo_de_compra number references Funcionario(idFunc));

create table Produto(
	idProduto number primary key,
	codigo number not null,
	nome nvarchar2(50) not null,
	tipoProduto nvarchar2(20),
	precoFornecedor real not null,
	precoPublico real not null,
	quantidade number,
	idLocal number references Localizacao(idLocal));

create table Jogo(
	idProduto number primary key,
	idProdutora number references Produtora(idProdutora));

create table Filme(
	idProduto number primary key,
	idProdutora number references Produtora(idProdutora),
	idRealizador number references Realizador(idRealizador));

create table Livro(
	idProduto number primary key,
	ISBN number not null,
	idEditora number references Editora(idEditora));

create table ClienteLoja(
	idCliente number references Cliente(idCliente),
	idLoja number references Loja(idLoja),
	constraint pk_cliente_loja primary key (idCliente,idLoja));

create table LojaFuncionario(
	idLoja number references Loja(idLoja),
	idFunc number references Funcionario(idFunc),
	constraint pk_loja_funcionario primary key (idLoja,idFunc));

create table FuncionarioArea(
	idFunc number references Funcionario(idFunc),
	idArea number references Area(idArea),
	constraint pk_funcionario_area primary key (idFunc,idArea));

create table CompraProduto(
	idCompra number references Compra(idCompra),
	idProduto number references Produto(idProduto),
	quantidade number not null,
	constraint pk_compra_produto primary key (idCompra,idProduto));

create table ProdutoFornecedor(
	idProduto number references Produto(idProduto),
	idForn number references Fornecedor(idForn),
	constraint pk_produto_fornecedor primary key (idProduto,idForn));

create table TipoJogo(
	idTipo number references Tipo(idTipo),
	idProduto number references Jogo(idProduto),
	constraint pk_tipo_jogo primary key (idTipo,idProduto));

create table MusicaArtista(
	idProduto number references Musica(idProduto),
	idArtista number references Artista(idArtista),
	constraint pk_musica_artista primary key (idProduto,idArtista));

create table FilmeCategoria(
	idProduto number references Filme(idProduto),
	idCategoria number references Categoria(idCategoria),
	constraint pk_filme_categoria primary key (idProduto,idCategoria));

create table LivroCategoria(
	idProduto number references Livro(idProduto),
	idCategoria number references Categoria(idCategoria));
	constraint pk_livro_categoria primary key (idProduto,idCategoria));
