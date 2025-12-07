create table persona (id_persona int auto_increment primary key,
nombre varchar(64) not null, apellidos varchar(128) not null,
fecha_nacimiento date not null, email varchar(256),
telefono varchar(16) not null, direccion varchar(256) not null,
fecha_registro timestamp default current_timestamp
);


create table cliente (id_cliente int auto_increment primary key,
id_persona int not null, constraint fk_persona
foreign key (id_persona) REFERENCES persona(id_persona)
on delete cascade on update cascade
);



create table empleado (id_empleado int auto_increment
primary key, id_persona int not null, username varchar(32) not null,
password varchar(64) not null, constraint fk_empleado
foreign key (id_persona) REFERENCES persona(id_persona)
on delete cascade on update cascade
);



create table marca (id_marca int auto_increment primary key,
nombre varchar(64) not null,
);


create table articulo (id_articulo int auto_increment primary key,
nombre varchar(64) not null,
modelo varchar(64) not null,
descripcion varchar(64)
);


create table articulo_unidad (id_individual int auto_increment primary key,
id_articulo int not null, id_marca int not null,
cpd int, fecha_registro timestamp default
current_timestamp, constraint fk_idmarc
foreign key (id_marca) REFERENCES marca(id_marca)
on delete cascade on update cascade, constraint fk_id_articulo
foreign key (id_articulo) REFERENCES articulo(id_articulo)
on delete cascade on update cascade
);


create table renta (id_renta int auto_increment primary key,
id_cliente int not null, id_emprenta int not null,
fecha_registro timestamp default current_timestamp,
constraint fk_cliente foreign key (id_cliente)
REFERENCES cliente(id_cliente) on delete cascade on update cascade,
constraint fk_emprenta foreign key (id_emprenta)
REFERENCES empleado(id_empleado)
on delete cascade on update cascade
);


create table renta_detalles (id_rentadetalles int
auto_increment primary key, id_renta int not null,
id_articulo int not null, fecha_limite date not null,
idempleado_retorno int, fecha_entregado date,
constraint fk_renta foreign key (id_renta)
REFERENCES renta(id_renta)
on delete cascade on update cascade,
constraint fk_artind foreign key (id_articulo)
REFERENCES articulo_unidad(id_individual)
on delete cascade on update cascade,
constraint fk_empret foreign key (idempleado_retorno)
REFERENCES empleado(id_empleado)
on delete cascade on update cascade
);