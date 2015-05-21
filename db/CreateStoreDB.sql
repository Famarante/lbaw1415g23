DROP SCHEMA IF EXISTS loja CASCADE; 
CREATE SCHEMA loja; 
SET SCHEMA 'loja';

DROP TABLE IF EXISTS Pais;
DROP TABLE IF EXISTS Localidade;
DROP TABLE IF EXISTS CodigoPostal;
DROP TABLE IF EXISTS Morada;
DROP TABLE IF EXISTS Utilizador;
DROP TABLE IF EXISTS Administrador;
DROP TABLE IF EXISTS Cliente;
DROP TABLE IF EXISTS MoradasCliente;
DROP TABLE IF EXISTS Marca;
DROP TABLE IF EXISTS Modelo;
DROP TABLE IF EXISTS Versao;
DROP TABLE IF EXISTS Cor;
DROP TABLE IF EXISTS Categoria;
DROP TABLE IF EXISTS Produto;
DROP TABLE IF EXISTS Comentario;
DROP TABLE IF EXISTS Feedback;
DROP TABLE IF EXISTS EstadoEncomenda;
DROP TABLE IF EXISTS Encomenda;
DROP TABLE IF EXISTS Fatura;
DROP TABLE IF EXISTS LinhaFatura;

CREATE TABLE Pais(
	idPais SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL
);

CREATE TABLE Localidade(
	idLocalidade SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL,
	idPais SERIAL REFERENCES Pais(idPais)
);

CREATE TABLE CodigoPostal(
	idCodigoPostal SERIAL PRIMARY KEY,
	codigo VARCHAR NOT NULL,
	idLocalidade SERIAL REFERENCES Localidade(idLocalidade)
);

CREATE TABLE Morada(
	idMorada SERIAL PRIMARY KEY,
	rua VARCHAR NOT NULL,
	idCodigoPostal SERIAL REFERENCES CodigoPostal(idCodigoPostal)
);

CREATE TABLE Utilizador(
	idUtilizador SERIAL PRIMARY KEY,
	username VARCHAR NOT NULL UNIQUE,
	password VARCHAR NOT NULL
);

CREATE TABLE Administrador(
	PRIMARY KEY(idAdministrador),
	idAdministrador SERIAL REFERENCES Utilizador(idUtilizador)
);

CREATE TABLE Cliente(
	email VARCHAR NOT NULL UNIQUE,
	nif INTEGER NOT NULL UNIQUE,
	nome VARCHAR NOT NULL,
	telemovel INTEGER,
	suspenso BOOLEAN DEFAULT FALSE,
	PRIMARY KEY(idCliente),
	idCliente SERIAL REFERENCES Utilizador(idUtilizador)
);

CREATE TABLE MoradasCliente(
	PRIMARY KEY(idMorada, idCliente),
	idMorada SERIAL REFERENCES Morada(idMorada),
	idCliente SERIAL REFERENCES Cliente(idCliente)
);

CREATE TABLE Marca(
	idMarca SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL UNIQUE
);

CREATE TABLE Modelo(
	idModelo SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL,
	idMarca SERIAL REFERENCES Marca(idMarca),
	UNIQUE (nome, idMarca)
);

CREATE TABLE Versao(
	idVersao SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL,
	idModelo SERIAL REFERENCES Modelo(idModelo),
	UNIQUE (nome, idModelo)
);

CREATE TABLE Cor(
	idCor SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL UNIQUE
);

CREATE TABLE Categoria(
	idCategoria SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL UNIQUE,
	idSubcategoria SERIAL REFERENCES Categoria(idCategoria)
);

CREATE TABLE Produto(
	idProduto SERIAL PRIMARY KEY,
	descricao TEXT NOT NULL,
	disponibilidade BOOLEAN NOT NULL,
	nome VARCHAR NOT NULL,
	preco NUMERIC NOT NULL,
	stock INTEGER NOT NULL,
	imagem VARCHAR,
	idCor SERIAL REFERENCES Cor(idCor),
	idVersao SERIAL REFERENCES Versao(idVersao),
	idCategoria SERIAL REFERENCES Categoria(idCategoria)
);

CREATE TABLE Comentario(
	idComentario SERIAL PRIMARY KEY,
	data TIMESTAMP NOT NULL,
	texto TEXT NOT NULL,
	idUtilizador SERIAL REFERENCES Utilizador(idUtilizador),
	idProduto SERIAL REFERENCES Produto(idProduto)
);

CREATE TABLE Feedback(
	rating NUMERIC,
	PRIMARY KEY(idCliente, idProduto),
	idCliente SERIAL REFERENCES Cliente(idCliente),
	idProduto SERIAL REFERENCES Produto(idProduto)
);

CREATE TABLE EstadoEncomenda(
	idEstadoEncomenda SERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL
);

CREATE TABLE Encomenda(
	idEncomenda SERIAL PRIMARY KEY,
	codigoEncomenda INTEGER NOT NULL,
	dataEncomenda TIMESTAMP NOT NULL,
	total NUMERIC NOT NULL,
	idMorada SERIAL REFERENCES Morada(idMorada),
	idCliente SERIAL REFERENCES Cliente(idCliente),
	idEstadoEncomenda SERIAL REFERENCES EstadoEncomenda(idEstadoEncomenda)
);

CREATE TABLE Fatura(
	idFatura SERIAL PRIMARY KEY,
	data TIMESTAMP NOT NULL,
	valor NUMERIC NOT NULL,
	idEncomenda SERIAL REFERENCES Encomenda(idEncomenda)
);

CREATE TABLE LinhaFatura(
	idLinhaFatura SERIAL PRIMARY KEY,
	quantidade INTEGER NOT NULL,
	idProduto SERIAL REFERENCES Produto(idProduto),
	idFatura SERIAL REFERENCES Fatura(idFatura)
);

/*! INDEXES */

CREATE UNIQUE INDEX utiliz ON Utilizador USING btree (username);
CREATE INDEX nomeCli ON Cliente USING btree (nome);
CREATE INDEX precoProd ON Produto USING btree (preco);