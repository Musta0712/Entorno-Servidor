use pokemoncitos;

create table if not exists pokemonLegendario (
	ubicacion varchar(255),
	evento varchar(255) unique,
	nombre varchar(50),
	numeroPokedex int primary key,
	descripcion varchar(255),
	tipos varchar(255),
	atques varchar(255)
);


create table if not exists usuario (
	id int primary key auto_increment,
	nombreUsuario varchar(255) unique,
	email varchar(255) unique,
	password varchar(255) not null
);