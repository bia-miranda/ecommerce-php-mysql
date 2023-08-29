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
values(default, 'Naruto Uzumaki', 1, 99.90, 98, 'Figura Colecionável Funko Pop: NARUTO RASENGAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Kakashi Hatake', 1, 99.90, 98, 'Figura Colecionável Funko Pop: KAKASHI HATAKE Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'N'),
(default, 'Mulan', 4, 79.90, 98, 'Figura Colecionável Funko Pop: MULAN Tamanho Aproximado: 10 cm de altura Peso Aproximado: 0.200 Kg Fabricante: Funko Inc. Produto 100% Original', 'S');

select * from tbl_produtos;