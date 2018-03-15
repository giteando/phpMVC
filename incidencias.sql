drop database if exists incidencias;
create database incidencias;
use incidencias;
grant all privileges on concurso.* to root@localhost identified by "";
create table clientes(
id int AUTO_INCREMENT ,
dni varchar(15),
dni_agregado varchar(15),
nombre varchar(15),
apellido1 varchar(15),
apellido2 varchar(15),
primary key(id)
)ENGINE=INNODB DEFAULT CHARACTER SET = utf8;
insert into clientes(dni,dni_agregado,nombre,apellido1,apellido2)
 values("76710524G","76710524H","cris","vaz","caride");
















