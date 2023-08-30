create database divida;
use divida;

create table cadastro(
id_cad int primary key auto_increment, 
descricao varchar(300), 
valor decimal(10, 2),
totalVendas  decimal(10, 2)
); 

SELECT SUM(valor) as total FROM cadastro;



drop table cadastro;
select * from cadastro;
drop database divida;

alter table cadastro drop column registro_vendas;
alter table cadastro drop column totalVendas;