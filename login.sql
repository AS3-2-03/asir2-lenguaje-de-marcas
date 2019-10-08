/*https://mariadb.com/kb/en/library///*/
/*crear database*/
CREATE DATABASE IF NOT EXISTS login;

use login;

CREATE TABLE IF NOT EXISTS users (
    user varchar(50) NOT NULL PRIMARY KEY,
    pass varchar(250)
);

/*insert*/
INSERT INTO users (user, pass)
VALUES ('adrian', '$2y$10$F.OkHuuDQfsTXvRrF0SPqeEteLKTTSrpOIw3asdBr4XKI3JjbXIei'),
('juan', '$2y$10$6VajaA0D4deyowZ6Jnbt6.4tcMi6f15P9wGV6xFOn1Rb9AJcjf0mG');






/*repositorio de github: https://github.com/zmwebdev/unieibar-asir2-web*/
/*información en w3schools: https://www.w3schools.com/php/php_mysql_select.asp*/
/*información en w3schools: https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_oo*/