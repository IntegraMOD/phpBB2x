CREATE DATABASE if not exists integrabb;
use integrabb;
CREATE SCHEMA if not exists integrabb;
CREATE USER 'integrabb' IDENTIFIED BY 'integrabb';
GRANT ALL PRIVILEGES ON integrabb.* TO integrabb;
FLUSH PRIVILEGES;
