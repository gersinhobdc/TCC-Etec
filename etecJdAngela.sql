drop database etecJdAngela;

create database etecJdAngela;


use etecJdAngela;

CREATE TABLE login(
id int not null auto_increment,
email varchar(255),
senha varchar(255),
primary key(id));

CREATE TABLE cadastro(
id int not null AUTO_INCREMENT,
nome varchar(255) not null,
email varchar(255) not null,
senha varchar(255) not null,
PRIMARY KEY (id));

CREATE TABLE labs(
id int not null AUTO_INCREMENT,
nmr_Sala int not null,
nivel_pc varchar(255) not null,
PRIMARY KEY (id));

CREATE TABLE patrimonio(
id int not null AUTO_INCREMENT,
nome_prod varchar(255) not null,
quant int not null,
descricao varchar(255),
data_compra date,
fornecedor varchar(255), 
PRIMARY KEY (id));

CREATE TABLE permissao(
id int not null AUTO_INCREMENT,
adm boolean not null,
email varchar(255) not null,
PRIMARY KEY (id));

CREATE TABLE disciplinas(
id int not null AUTO_INCREMENT,
nome_disc varchar(255) not null,
prof_disc varchar(255) not null,
PRIMARY KEY (id));


INSERT INTO `login` (`email`, `senha`) VALUES ('admin', 'admin'); 



SELECT * FROM login 
