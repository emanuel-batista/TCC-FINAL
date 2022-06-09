create database tccdasgostosas;
use tccdasgostosas;

create table usuario(
	ID_USUARIO int not null auto_increment primary key,
	NOME varchar(60) not null,
    USERNAME varchar(15) unique,
    SENHA varchar(15) not null,
    RANKING tinyint(1) not null default(2),
    FOTO varchar(100),
    created_at timestamp

);

create table noticia(
	ID_NOTICIA int(11) not null auto_increment primary key,
    TITULO_NOTICIA varchar(100) not null,
    CONTEUDO_NOTICIA mediumtext not null,
    IMG_NOTICIA varchar(100) not null,
    CATEGORIA_NOTICIA varchar(45) not null,
    PUBLICADO_NOTICIA boolean,
    created_at timestamp,
    id_usuario int(11) not null,
	foreign key (id_usuario) references usuario(id_usuario)
);