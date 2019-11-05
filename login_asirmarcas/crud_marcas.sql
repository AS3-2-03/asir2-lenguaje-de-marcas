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
VALUES ('Titulo 1', 'Informacion inicial','irudia1.png'), ('Titulo 2', 'Segunda informacion','irudia2.jpg'); 



/*

CREATE TABLE IF NOT EXISTS user (
    name VARCHAR(100) NOT NULL PRIMARY KEY,
    password VARCHAR(100) NOT NULL,
);
*/




/* insert user */ 
-- name / password =  adrian / adrianeibar  y  juan / juaneibar
/*
INSERT INTO user (name, password)
VALUES ('adrian', '$2y$10$F.OkHuuDQfsTXvRrF0SPqeEteLKTTSrpOIw3asdBr4XKI3JjbXIei'),('juan', '$2y$10$6VajaA0D4deyowZ6Jnbt6.4tcMi6f15P9wGV6xFOn1Rb9AJcjf0mG');


*/