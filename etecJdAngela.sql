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




INSERT INTO `login` (`email`, `senha`) VALUES ('admin', 'admin'); 



SELECT * FROM login 
