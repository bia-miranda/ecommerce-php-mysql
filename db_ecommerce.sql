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
values(default, 'Funko Pop! Naruto Uzumaki', 1, , 99.90, 98, 'Figura Colecionável Funko Pop: NARUTO RASENGAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Funko Pop! Kakashi Hatake', 1, , 99.90, 98, 'Figura Colecionável Funko Pop: KAKASHI HATAKE Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Funko Pop! Mulan', 4, , 79.90, 98, 'Figura Colecionável Funko Pop: MULAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Rachael Green', 5, , 69.80,35,'Figura Colecionável Funko Pop: RACHAEL GREEN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Monica Geller', 5, , 69.80,35,'Figura Colecionável Funko Pop: MONICA GELLER Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Doctor Strange', 4, , 109.80,35,'Figura Colecionável Funko Pop: DOCTOR STRANGE Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Iron Man', 4, ,109.80,35,'Figura Colecionável Funko Pop: IRON MAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Funko Pop! Luffy', 4, ,109.80,35,'Figura Colecionável Funko Pop: IRON MAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S'),
(default, 'Funko Pop! Zoro', 4, ,109.80,35,'Figura Colecionável Funko Pop: IRON MAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S');

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

/*CREATE USER 'root'@'localhost' identified with my_sql_native_password by '12345678';*/
/*GRANT ALL PRIVILEGES ON db_ecommerce.* to 'admin'@'localhost' WITH GRANT OPTION; */

drop database db_ecommerce;
