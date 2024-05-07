-- Active: 1708877752046@@127.0.0.1@3306
CREATE DATABASE prodprov;



CREATE USER 'prodprov'@'localhost' IDENTIFIED BY 'Qmq%3p691';
GRANT ALL PRIVILEGES ON prodprov.* TO 'prodprov'@'localhost';

use prodprov;
