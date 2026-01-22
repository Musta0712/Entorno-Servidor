CREATE DATABASE IF NOT EXISTS pokemoncitos;
USE pokemoncitos;

DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS pokemons_legendarios;

CREATE TABLE pokemons_legendarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    numero_pokedex INT NOT NULL,
    descripcion TEXT,
    ubicacion VARCHAR(255),
    evento VARCHAR(255),
    gen_numero INT,
    gen_region VARCHAR(100),
    gen_nombre VARCHAR(100)
);