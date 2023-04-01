create database cadastro;
  use cadastro;
create table produto(
id int (11) not null auto_increment,
código int (11) not null,
produto varchar(80) not null,
descricao varchar (250) not null,
dataa date not null,
valor decimal (10,2) not null,
primary key (id)

)default charset = utf8;
