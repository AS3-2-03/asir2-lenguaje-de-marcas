

-- código para crear la base de datos del proyecto

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
VALUES ('Titulua 1', 'Hau da informazioa','irudia01.png');