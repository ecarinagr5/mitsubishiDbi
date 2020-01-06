CREATE TABLE contacto (
id int NOT NULL AUTO_INCREMENT,
nombre varchar(255) NOT NULL,
email varchar(255),
telefono varchar(10),
distribuidor varchar(255),
source varchar(255),
medium varchar(255),
campaign varchar(255),
content varchar(255),
term varchar(255),
fecha TIMESTAMP,
fecha2 TIMESTAMP,
msj varchar(255),
id_ws varchar(255),
idLead varchar(255),
idTag int,
PRIMARY KEY (id)
);
