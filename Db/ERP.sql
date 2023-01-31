DROP DATABASE erp;
CREATE DATABASE erp;

USE erp;

CREATE TABLE proveedores(
    id_proveedor INTEGER(3) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40),
    cp VARCHAR(6),
    ciudad VARCHAR(20),
    correo VARCHAR(40),
    tlf VARCHAR(14),
    iban VARCHAR(30)
);

CREATE TABLE compras(
    id_compra INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_proveedor INTEGER(3),
    fecha_compra DATETIME,
    precio DECIMAL(9,2),
    coste_logistico DECIMAL(6,2)
);


CREATE TABLE factura_compra(
    id_compra INT(6),
    id_producto VARCHAR(6),
    cantidad INT(4),
    precio_unitario DECIMAL (9,2),
    total DECIMAL (9,2),
    PRIMARY KEY (id_compra,id_producto)
);

CREATE TABLE productos(
    id_producto VARCHAR(6) PRIMARY KEY,
    precio_unitario DECIMAL(9,2),
    pvp DECIMAL(9,2),
    modelo VARCHAR(30),
    marca VARCHAR(30),
    categoria VARCHAR(20),
    descripcion VARCHAR(60),
    stock INT(6)
);

ALTER TABLE productos ADD COLUM final BOOLEAN;

CREATE TABLE factura_venta(
    id_pedido INT(6),
    id_producto VARCHAR (6),
    cantidad INT(4),
    pvp_unitario DECIMAL (9,2),
    total DECIMAL (9,2),
    PRIMARY KEY (id_pedido,id_producto)
);

-- insert into factura values ("1", "p007", 1, "1");
-- insert into factura values ("1", "p008", 1, "1")

CREATE TABLE envio(
    id_pedido INT(6) PRIMARY KEY,
    total DECIMAL(9,2),
    dni_cliente VARCHAR(9),
    coste_envio DECIMAL(5,2),
    tiempo_estimado VARCHAR(30),
    tiempo_real VARCHAR(30),
    fecha_venta DATETIME,
    fecha_envio DATETIME,
    direccion VARCHAR(50)
);

CREATE TABLE clientes(
    dni VARCHAR(9) PRIMARY KEY,
    nombre VARCHAR(30),
    apellido VARCHAR(30),
    correo VARCHAR(40),
    ciudad VARCHAR(30),
    cp VARCHAR(6),
    iban VARCHAR(30),
    tlf VARCHAR(14)
);

CREATE TABLE escandallo(
    id_compuesto VARCHAR(6),
    id_producto VARCHAR(6),
    nombre VARCHAR(30),
    uds INTEGER(3),
    PRIMARY KEY (id_compuesto,id_producto)
);
-- Claves foraneas del proceso de venta
ALTER TABLE envio ADD CONSTRAINT fk_pedidos_dni FOREIGN KEY (dni_cliente) REFERENCES clientes (dni);
ALTER TABLE envio ADD CONSTRAINT fk_factura_idenvio FOREIGN KEY (id_pedido) REFERENCES factura_venta (id_pedido);
ALTER TABLE factura_venta ADD CONSTRAINT factura FOREIGN KEY (id_producto) REFERENCES productos (id_producto);

ALTER TABLE compras ADD CONSTRAINT fk_proveedor FOREIGN KEY (id_proveedor) REFERENCES proveedores (id_proveedor);
-- ALTER TABLE compras ADD CONSTRAINT fk_producto_id FOREIGN KEY (id_producto) REFERENCES productos (id_producto);

--ALTER TABLE factura_compra ADD CONSTRAINT fk_facturacompra_idproducto FOREIGN KEY (id_producto) REFERENCES productos(id_producto);
ALTER TABLE productos ADD CONSTRAINT fk_facturacompra_idproducto FOREIGN KEY (id_producto) REFERENCES factura_compra(id_producto);
ALTER TABLE escandallo ADD CONSTRAINT fk_escandallo_productos FOREIGN KEY (id_compuesto) REFERENCES productos(id_producto);
ALTER TABLE productos ADD CONSTRAINT fk_produtos_escandallo FOREIGN KEY (id_producto) REFERENCES escandallo(id_producto);

ALTER TABLE factura_compra ADD CONSTRAINT fk_facturacompra_idcompra FOREIGN KEY (id_compra) REFERENCES compras(id_compra);

ALTER TABLE clientes ADD CONSTRAINT fk_cppoblaciones_cpclientes FOREIGN KEY (cp) REFERENCES poblaciones(cp);
ALTER TABLE proveedores ADD CONSTRAINT fk_cppoblaciones_cpproveedores FOREIGN KEY (cp) REFERENCES poblaciones(cp);



-- inserts

insert into proveedores values(NULL,"Casaca SL", 28007, "Madrid", "casaca@gmail.com", 733456211, "ES7921000813610123456789");
insert into compras values (NULL,1, 2022-11-22, 1040, 8.30);
insert into factura_compra values (1, 0001, 100, 10.4,  1048.3);
insert into factura_compra values (1, 0002, 100, 20.8,  2080.0);


insert into productos values 
(0001,10.4,  13.2, "EX12", "SUPERMARCA", "Limpieza", "Producto altamente eficaz para quitar manchas", 98 ),
(0002,20.8,  30.50, "EX15", "SUPERMARCA", "Limpieza", "Producto para limpiar madera", 100,0 ),
(1000,5.50,10.50,NULL,NULL,"Produccion","Mano de obra",1000000,0);


insert into clientes values ("35678788C", "Steven", "Piedra", "steven@gmail.com", "Madrid", 28037, "ES7921000813610723462213","629749431");
insert into factura_venta values (1, 0001, 2, 13.2, 26.4);

insert into envio values(1, 26.4, "35678788C", 2, "2 dias", "2 dias", 2022-11-22, 2022-11-23, "Calle Cortada n34 7A" );

create table if not exists usuarios (
    ide_usu int not null auto_increment primary key,
    nom_usu varchar(10) character set utf8 default null,
    com_usu varchar(10) character set utf8 default null,
    unique(nom_usu)
)engine=innoDB default charset=utf8 auto_increment=1;

insert into usuarios (nom_usu, com_usu) values ("usu1", "con1");





