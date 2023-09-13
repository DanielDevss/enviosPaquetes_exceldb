## Base de datos:

### tabla envios
``` sql
CREATE TABLE envios (
	id int auto_increment primary key, 
    categoria varchar(45) not null,
    paqueteria varchar(45) not null,
    costo varchar(10) not null,
    etr_estimada varchar(155) not null,
    servicio varchar(65) not null,
    peso varchar(65) null
);
```
### tabla usuarios
``` sql
CREATE TABLE usuarios (
	id int auto_increment primary key,
    nombre varchar(65) not null,
    usuario varchar(65) not null,
    clave varchar(155) not null
);
```