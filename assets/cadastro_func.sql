CREATE DATABASE cadastro_func;
USE cadastro_func;

DROP DATABASE cadastro_func;

CREATE TABLE tb_funcionarios (
Id integer primary key auto_increment,
nome varchar(100),
telefone varchar(11),
cpf varchar(14),
email varchar(150),
salario decimal(10,2)
);

