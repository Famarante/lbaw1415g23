/*! Insert country data into País table */
INSERT INTO "pais" (nome) VALUES ('Portugal'),('Espanha'),('França'),('Alemanha'),('Inglaterra'),('Suiça'),('Itália'),('Bélgica'),('Holanda'),('Rússia');

/*! Insert cities data into Localidade table */
INSERT INTO "localidade" (nome, idpais) VALUES ('Lisboa', 1), ('Porto', 1), ('Coimbra', 1), ('Braga', 1), ('Santarém', 1), ('Évora', 1), ('Faro', 1), ('Castelo Branco', 1), ('Viseu', 1), ('Portalegre', 1);
INSERT INTO "localidade" (nome, idpais) VALUES ('Madrid', 2), ('Barcelona', 2), ('Valência', 2), ('Sevilha', 2), ('Zaragoza', 2), ('Bilbao', 2), ('Málaga', 2), ('Alicante', 2), ('Granada', 2), ('Vigo', 2);

/*! Insert zipcode data into CodigoPostal table */
INSERT INTO "codigopostal" (codigo, idlocalidade) VALUES ('1990-021', 1), ('1050-011', 1), ('1069-413', 1), ('1950-438', 1), ('1300-053', 1), ('1600-016', 1), ('1100-067', 1), ('1200-006', 1), ('1750-039', 1), ('1150-063', 1);
INSERT INTO "codigopostal" (codigo, idlocalidade) VALUES ('4300-005', 2), ('4000-066', 2), ('4150-131', 2), ('4100-138', 2), ('4050-112', 2), ('4099-027', 2), ('4149-071', 2), ('4250-213', 2), ('4300-223', 2), ('4350-164', 2);

/*! Insert street data into Morada table */
INSERT INTO "morada" (rua, idcodigopostal) VALUES ('Avenida do Atlântico, nº 29', 1), ('Avenida António Augusto de Aguiar, nº 120', 2), ('Avenida António Augusto de Aguiar, nº 2041', 3), ('Azinhaga dos Alfinetes, nº 11', 4), ('Bairro do Alvito, nº 113', 5), ('Azinhaga dos Barros, nº 214', 6), ('Beco Azinhal, nº 51', 7), ('Beco dos Aciprestes, nº 312', 8), ('Azinhaga do Beco, nº 101', 9), ('Beco da Bempostinha, nº 87', 10);
INSERT INTO "morada" (rua, idcodigopostal) VALUES ('Avenida Artur de Andrade, nº 95', 11), ('Avenida dos Aliados, nº 401', 12), ('Beco Beneditina, nº 14', 13), ('Avenida da Boavista, nº 3883', 14), ('Avenida da Boavista, nº 84', 15), ('Avenida da Boavista, nº 267', 16), ('Avenida da Boavista, nº 604', 17), ('Avenida França, nº 680', 18), ('Rua do Freixo, 1693', 19), ('Avenida de Fernão de Magalhães, nº 565', 20);

/*! Insert user data into Utilizador table */
INSERT INTO "utilizador" (username,password) VALUES ('xAragao','TBT23CUI2HE'),('AMartins','KBR45NVX0JE'),('EdmundoManso','DVG85ZUM7KC'),('Isa_Faust','NFA84TYZ8BZ'),('talGod','MLU50PHT0RT'),('Gmedeiros','EXR47ZTW5GZ'),('Rafael_Carvalheira','OTM05BDS1BE'),('AlcesteLousa','YCL54NVK1LY'),('HGalindo','ROK96ILS7TS'),('julraposo','SCP35FRK6UW');
INSERT INTO "utilizador" (username,password) VALUES ('teoLampreia','HBU42VTK5WX'),('Fiona_Frade','UQI71WDQ9ZP'),('MReboucas','VUQ42JKB6LE'),('RicardinaGois','DLX44FTF8GH'),('CatiCerqueira','VAN56CBG5LV'),('rAnjos','NSQ84HKJ7SI'),('BVaz','GOK82KIO0CJ'),('deboraleiria','VAD20OYM1UC'),('Zuriel_Bugalho','EOT25GFI8OL'),('jacOuteiro','SUF70ADM3KY');
INSERT INTO "utilizador" (username,password) VALUES ('admin','WED36HLW7EU');

/*! Insert admin data into Administrador table */
INSERT INTO "administrador" (idadministrador) VALUES (21);

/*! Insert client data into Cliente table */
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('xisto_aragao@email.com', 14561852, 'Xisto Aragão', 924457120, 1);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('adelmartins82@email.com', 14774589, 'Adelaide Martins', 914241120, 2);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('edmanso@email.com', 14585122, 'Edmundo Manso', 915112981, 3);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('isabel__faustino@email.com', 14115792, 'Isabel Faustino', 969985432, 4);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('talgodoi@email.com', 14741883, 'Talida Godoi', 932001854, 5);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('gasparmedeiros12@email.com', 14881223, 'Gaspar Medeiros', 910014547, 6);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('rafa_carvaleira@email.com', 14339516, 'Rafael Carvalheira', 926714239, 7);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('alceste_lousa@email.com', 14432978, 'Alceste Lousã', 934561985, 8);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('hugogalindo001@email.com', 14817425, 'Hugo Galindo', 915642316, 9);
INSERT INTO "cliente" (email, nif, nome, telemovel, idcliente) VALUES ('julraposo@email.com', 14741231, 'Júlio Raposo', 927563646, 10);

/*! Insert client address data into MoradasCliente table */
INSERT INTO "moradascliente" (idmorada, idcliente) VALUES (19, 1), (1, 2), (5, 3), (4, 4), (9, 5), (13, 6), (17, 7), (2, 8), (3, 9), (11, 10);

/*! Insert brand data into Marca table */
INSERT INTO "marca" (nome) VALUES ('Acer'), ('ASUS'), ('AMD'), ('MSI'), ('Corsair'), ('Razer'), ('Samsung'), ('Logitech'), ('Seagate'), ('Intel');

/*! Insert models data into Modelo table */
INSERT INTO "modelo" (nome, idmarca) VALUES ('V17 Nitro Black Edition', 1), ('Black 23" 5ms', 1), ('Black 21.5" 6ms', 1), ('Intel Atom 2GB', 1), ('Predator', 1);
INSERT INTO "modelo" (nome, idmarca) VALUES ('290 4GB', 2), ('980 4GB', 2), ('A8-Series APU 4GB', 2), ('STX Virtual 7.1 Channels 24-bit', 2), ('HERO LGA 1150 Intel Z87', 2);
INSERT INTO "modelo" (nome, idmarca) VALUES ('FX-8350 Black Edition Vishera 8-Core 4.0GHz Socket AM3+', 3), ('A10-7850K Kaveri 12 Compute Cores (4 CPU + 8 GPU) 3.7GHz Socket FM2+', 3), ('FX-8320 Vishera 8-Core 3.5GHz (4.0GHz Turbo) Socket AM3+', 3), ('FX-9590 Vishera 4.7GHz Socket AM3+ 8-Core Black Edition', 3), ('Athlon X4 860K Quad-Core 3.7GHz Socket FM2+', 3);

/*! Insert version data into Versao table */
INSERT INTO "versao" (nome, idmodelo) VALUES ('VN7-791G-77JJ', 1), ('H236HLbid', 2), ('G227HQLbi', 3), ('A1-840FHD-197C', 4), ('AG3-605-UR2F', 5);
INSERT INTO "versao" (nome, idmodelo) VALUES ('R9290-DC2OC-4GD5', 6), ('MATRIX-GTX980-P-4GD5', 7), ('M32BF-US008O', 8), ('STX-Virtual-7.1-24b', 9), ('VI-HERO-1150-Z87', 10);
INSERT INTO "versao" (nome, idmodelo) VALUES ('FD8350FRHKBOX', 11), ('AD785KXBJABOX', 12), ('FD8320FRHKBOX', 13), ('FD9590FHHKWOX', 14), ('AD860KXBJABOX', 15);

/*! Insert color data into Cor table */
INSERT INTO "cor" (nome) VALUES ('Indefinido'), ('Preto'), ('Branco'), ('Azul'), ('Vermelho'), ('Verde'), ('Laranja'), ('Cinzento'), ('Amarelo'), ('Rosa');

/*! Insert category data into Categoria table */
INSERT INTO "categoria" (nome) VALUES ('Processadores'), ('Placas gráficas'), ('Monitores'), ('Placas de Som'), ('Tablets'), ('Motherboards'), ('Computadores'), ('Portáteis'), ('Memórias RAM'), ('Ratos');

/*! Insert products data into Produto table */
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'Aspire', 975.99, 20, 2, 1, 8);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'H6 Series', 199.99, 20, 2, 2, 3);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', false, 'G7 Series ', 275.90, 20, 1, 3, 3);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'Iconia Tab', 99.99, 20, 3, 4, 5);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'Desktop PC', 975.99, 20, 1, 5, 7);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'Radeon R9', 405.90, 20, 2, 6, 2);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'GeForce GTX', 790.99, 20, 2, 7, 2);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'Desktop PC', 1199.99, 20, 1, 8, 7);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'Xonar Essence', 79.99, 20, 1, 9, 4);
INSERT INTO "produto" (descricao, disponibilidade, nome, preco, stock, idcor, idversao, idcategoria) VALUES ('Texto com a a descrição do produto', true, 'MAXIMUS VI', 280.00, 20, 2, 10, 6);

/*! Insert comment data into Comentario table */
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-08 12:21:13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus feugiat nibh, eu ullamcorper nisi. Duis laoreet vulputate euismod. Nullam.', 1, 1);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-08 14:01:53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt condimentum justo in posuere. Donec aliquam dapibus nisi, vel laoreet.', 2, 1);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-08 15:12:41', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam felis ipsum, aliquet at massa in, interdum efficitur urna. Duis mi.', 3, 1);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-09 09:28:20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius congue lacinia. Nam in sollicitudin ex. Nullam ultricies mollis lacus.', 4, 2);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-09 16:02:45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut sem sed sem rhoncus pharetra vel sed elit. Pellentesque varius.', 5, 2);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-10 11:34:19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis laoreet lacus, bibendum semper quam. Nam posuere ac velit ac.', 6, 3);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-10 21:58:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In massa eros, tincidunt sed accumsan imperdiet, ultrices eget tellus. Fusce a.', 7, 4);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-11 18:07:32', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum fermentum nulla, et hendrerit dui congue quis. Morbi in orci.', 8, 4);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-11 23:11:10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et justo et libero bibendum eleifend id a nisl. Fusce rutrum.', 9, 4);
INSERT INTO "comentario" (data, texto, idutilizador, idproduto) VALUES ('2015-04-12 00:29:25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin mollis velit quis pellentesque. Sed ut accumsan tortor, et elementum.', 10, 4);

/*! Insert feedback data into Feedback table */
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.5, 1, 2);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.1, 3, 2);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.8, 6, 2);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (1.3, 2, 4);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (2.5, 4, 4);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.0, 1, 6);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.7, 3, 6);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.9, 2, 6);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (5.0, 10, 6);
INSERT INTO "feedback" (rating, idcliente, idproduto) VALUES (4.6, 8, 6);

/*! Insert order state data into EstadoEncomenda table */
INSERT INTO "estadoencomenda" (nome) VALUES ('Recebida'), ('A processar'), ('Processada e pronta a expedir'), ('Enviada'), ('Entregue e finalizada');

/*! Insert order data into Encomenda table */
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1000, '2015-04-10 07:49:00', 2927.97, 19, 1, 1);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1001, '2015-04-10 03:20:34', 179.98, 19, 1, 2);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1002, '2015-04-11 05:46:43', 1584.98, 19, 1, 5);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1003, '2015-04-11 08:00:32', 3151.97, 1, 2, 3);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1004, '2015-04-11 16:55:43', 675.88, 4, 4, 1);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1005, '2015-04-10 02:47:15', 4879.95, 4, 4, 4);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1006, '2015-04-10 03:50:21', 505.89, 9, 5, 2);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1007, '2015-04-10 03:16:12', 4309.86, 2, 8, 1);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1008, '2015-04-11 01:35:38', 3954.95, 3, 9, 5);
INSERT INTO "encomenda" (codigoencomenda, dataencomenda, total, idmorada, idcliente, idestadoencomenda) VALUES (1009, '2015-04-11 01:19:33', 1618.95, 17, 7, 3);

/*! Insert invoice data into Fatura table */
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-10 08:49:00', 2927.97, 1);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-10 04:20:35', 179.98, 2);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-11 07:40:15', 1584.98, 3);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-11 10:05:27', 3151.97, 4);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-11 18:02:12', 675.88, 5);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-10 03:33:19', 4879.95, 6);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-10 05:10:01', 505.89, 7);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-10 06:24:58', 4309.86, 8);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-11 03:40:34', 3954.95, 9);
INSERT INTO "fatura" (data, valor, idencomenda) VALUES ('2015-04-11 02:03:18', 1618.95, 10);

/*! Insert invoice line data into LinhaFatura table */
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (1, 1, 1), (2, 5, 1);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (1, 4, 2), (1, 9, 2);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (2, 7, 3);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (1, 1, 4), (1, 5, 4), (1, 8, 4);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (2, 2, 5), (1, 3, 5);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (5, 5, 6);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (1, 4, 7), (1, 6, 7);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (4, 1, 8), (2, 5, 8);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (5, 7, 9);
INSERT INTO "linhafatura" (quantidade, idproduto, idfatura) VALUES (1, 10, 10), (2, 4, 10), (1, 5, 10), (2, 9, 10);