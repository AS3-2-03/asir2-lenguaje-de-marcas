/* https://mariadb.com/kb/en/library/documentation/ */
/* databasea import */
/* $mysql -u user -p < crud.sql */

-- Este es el código para crear la base de datos del proyecto.



CREATE DATABASE IF NOT EXISTS asirmarcas;

use asirmarcas;

CREATE TABLE IF NOT EXISTS blog (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    info VARCHAR(250) NOT NULL,
    img VARCHAR(100)
);


/* insert blog */
INSERT INTO blog (title, info, img)
VALUES ('Titulo 1', 'Informacion inicial','irudia01.png'), ('Titulo 2', 'Segunda informacion','irudia02.jpg'), ('Titulo 3', 'Tercera informacion','irudia03.jpg'); 





CREATE TABLE IF NOT EXISTS user (
    name VARCHAR(100) NOT NULL PRIMARY KEY,
    password VARCHAR(100) NOT NULL
);


/* insert user */ 
-- name / password =  adrian / adrianeibar  y  juan / juaneibar


INSERT INTO user (name, password)
VALUES ('adrian', '$2y$10$F.OkHuuDQfsTXvRrF0SPqeEteLKTTSrpOIw3asdBr4XKI3JjbXIei'),('juan', '$2y$10$6VajaA0D4deyowZ6Jnbt6.4tcMi6f15P9wGV6xFOn1Rb9AJcjf0mG');



CREATE TABLE IF NOT EXISTS registros (
    ciudad VARCHAR(100) NOT NULL PRIMARY KEY,
    latitud VARCHAR(100) NOT NULL,
    longitud VARCHAR(100) NOT NULL
);

INSERT INTO registros (ciudad, latitud, longitud)
VALUES ('Tokyo', '35.6894989','139.6917114'),('Manchester', '53.4809500','-2.2374300');