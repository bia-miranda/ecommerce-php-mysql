create database db_ecommerce
default character set utf8
default collate utf8_general_ci;

use db_ecommerce;

create table tbl_categoria(
id_categoria int primary key auto_increment,
ds_categoria varchar(30) not null
)
default charset utf8;

create table tbl_produtos(
id_produto int primary key auto_increment,
nm_produto varchar(50) not null,
id_categoria int not null,
ds_capa varchar(255) not null,
vl_preco decimal(6,2) not null,
qt_estoque int not null,
ds_prod text not null,
sg_lancamento enum('S','N') not null,
constraint id_categoria foreign key(id_categoria) references tbl_categoria(id_categoria)
)
default charset utf8;

insert into tbl_categoria
values(default, 'Naruto'),
(default, 'One Piece'),
(default, 'Avangers'),
(default, 'Disney'),
(default, 'Friends');

select * from tbl_categoria;

alter table tbl_produtos
add column nm_produto varchar(50) not null after id_produto;
describe tbl_produtos;

insert into tbl_produtos
values(default, 'Funko Pop! Naruto Uzumaki', 1, 'naruto', 99.90, 98, 'Figura Colecionável Funko Pop: NARUTO RASENGAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Funko Pop! Kakashi Hatake', 1,'kakashi' , 99.90, 98, 'Figura Colecionável Funko Pop: KAKASHI HATAKE Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Funko Pop! Mulan', 4, 'mulan', 79.90, 98, 'Figura Colecionável Funko Pop: MULAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Rachael Green', 5, 'rachael' , 69.80,35,'Figura Colecionável Funko Pop: RACHAEL GREEN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Monica Geller', 5, 'monica', 69.80,35,'Figura Colecionável Funko Pop: MONICA GELLER Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Doctor Strange', 3, 'doctor', 109.80,35,'Figura Colecionável Funko Pop: DOCTOR STRANGE Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Iron Man', 3, 'stark' ,109.80,35,'Figura Colecionável Funko Pop: IRON MAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Funko Pop! Luffy', 2, 'luffy',109.80,35,'Figura Colecionável Funko Pop: IRON MAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Zoro', 2, 'zoro' ,109.80,35,'Figura Colecionável Funko Pop: IRON MAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S');

select * from tbl_produtos;

CREATE VIEW vw_produtos as
select tbl_produtos.id_produto, 
tbl_produtos.nm_produto,
tbl_categoria.ds_categoria,
tbl_produtos.vl_preco,
tbl_produtos.ds_capa,
tbl_produtos.ds_prod,
tbl_produtos.sg_lancamento,
tbl_produtos.qt_estoque
from tbl_produtos inner join tbl_categoria on tbl_produtos.id_categoria = tbl_categoria.id_categoria;

select * from vw_produtos;

select nm_produto, ds_capa, vl_preco from vw_produtos where ds_categoria = 'Naruto';

/*CREATE USER 'root'@'localhost' identified with my_sql_native_password by '12345678';*/
/*GRANT ALL PRIVILEGES ON db_ecommerce.* to 'admin'@'localhost' WITH GRANT OPTION; */

drop database db_ecommerce;

CREATE TABLE tbl_usuario(
	id int primary key auto_increment,
    nm_usuario varchar(80) not null,
    ds_email varchar(80) not null,
    ds_senha varchar(6) not null,
    ds_status boolean not null,
    ds_endereco varchar(80) not null,
    ds_cidade varchar(30) not null,
    no_cep char(9) not null
)
default charset utf8;

insert into tbl_usuario
values(default, 'Beatriz', 'beatriz@gmail.com', '123456', 1, 'Rua das Flores', 'Cajamar', '07790980'),
(default, 'Gabriel', 'gabriel@gmail.com', '654321', 0, 'Rua dos Amores', 'Cajamar', '07790981'),
(default, 'Mariana', 'mariana@gmail.com', '123456', 0, 'Rua das Pitangueiras', 'Lapa', '07790982');

select * from tbl_usuario;

select * from tbl_produtos;

select * from vw_produtos where nm_produto like '%naruto%';

select * from tbl_usuario;
select * from tbl_produtos;

	update tbl_produtos
    set ds_capa = 'kakashi.jpg'
    where id_produto = 2;
    
    update tbl_produtos
    set ds_capa = 'mulan.jpg'
    where id_produto = 3;
    
     update tbl_produtos
    set ds_capa = 'rachael.jpg'
    where id_produto = 4;
    
     update tbl_produtos
    set ds_capa = 'monica.jpg'
    where id_produto = 5;
    
     update tbl_produtos
    set ds_capa = 'doctor.jpg'
    where id_produto = 6;
    
     update tbl_produtos
    set ds_capa = 'stark.jpg'
    where id_produto = 7;

 update tbl_produtos
    set ds_capa = 'luffy.jpg'
    where id_produto = 8;
    
     update tbl_produtos
    set ds_capa = 'zoro.jpg'
    where id_produto = 9;
    
        delete from tbl_produtos where id_produto = 13;
        select * from tbl_produtos;
        
        select ds_capa from tbl_produtos where id_produto=1;
    
    
    create table tbl_venda(
    id_venda int(11) primary key auto_increment,
    no_ticket varchar(13) not null,
    id_cliente int(11) not null,
    id_produto int(11) not null,
    qt_itens int(11) not null,
    vl_item decimal(10,2) not null,
    vl_total_item decimal(10,2) generated always as ((qt_itens * vl_item)) virtual,
    dt_venda date not null
    );
    
    insert into tbl_venda(no_ticket, id_cliente, id_produto, qt_itens, vl_item, dt_venda)
    values(12345678910, 2, 2, 2, 52.90, '2023-10-01');
    
    create view vwVenda
    as select
		tbl_venda.no_ticket,
		tbl_venda.id_cliente,
		tbl_venda.dt_venda,
		tbl_venda.qt_itens,
		tbl_venda.vl_total_item,
        tbl_produtos.nm_produto,
        tbl_produtos.ds_capa
	from tbl_venda inner join tbl_produtos 
    on tbl_venda.id_produto = tbl_produtos.id_produto;
    
    drop table tbl_venda;

select * from vwvenda;
drop vwvenda;
