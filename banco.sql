create database sistemacadastro;

use sistemacadastro;

create table funcionario(
     idfuncionario integer auto_increment primary key,
     nome varchar(50)not null,
     email varchar(50)not null,
     idade integer not null,
     salario double(10,2)not null
);

desc sistemacadastro;

