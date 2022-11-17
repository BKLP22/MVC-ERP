DROP DATABASE erp;
CREATE DATABASE erp;

USE erp;

CREATE TABLE proveedores(
    id_proveedor VARCHAR(3) PRIMARY KEY,
    nombre VARCHAR(40),
    cp VARCHAR(6),
    ciudad VARCHAR(20),
    correo VARCHAR(40),
    tlf VARCHAR(14),
    iban VARCHAR(30)
);

CREATE TABLE compras(
    id_compra INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_proveedor VARCHAR(3),
    fecha_compra DATETIME,
    precio DECIMAL(9,2),
    coste_logistico DECIMAL(6,2)
);


CREATE TABLE factura_compra(
    id_compra INT(6),
    id_producto VARCHAR(6),
    cantidad INT(4),
    pvp_unitario DECIMAL (9,2),
    total DECIMAL (9,2),
    PRIMARY KEY (id_compra,id_producto)
);

CREATE TABLE productos(
    id_producto VARCHAR(6) PRIMARY KEY,
    pvp DECIMAL(9,2),
    modelo VARCHAR(30),
    marca VARCHAR(30),
    categoria VARCHAR(20),
    descripcion VARCHAR(60),
    coste_total DECIMAL(9,2),
    stock INT(6)
);


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
    id_pedido INT(6) AUTO_INCREMENT PRIMARY KEY,
    total DECIMAL(9,2),
    dni_cliente VARCHAR(9),
    coste_envio DECIMAL(5,2),
    tiempo_estimado DATETIME,
    tiempo_real DATETIME,
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

ALTER TABLE compras ADD CONSTRAINT fk_proveedor FOREIGN KEY (id_proveedor) REFERENCES proveedores (id_proveedor);
ALTER TABLE compras ADD CONSTRAINT fk_producto_id FOREIGN KEY (id_producto) REFERENCES productos (id_producto);
ALTER TABLE factura_venta ADD CONSTRAINT factura FOREIGN KEY (id_producto) REFERENCES productos (id_producto);
ALTER TABLE envio ADD CONSTRAINT fk_pedidos_dni FOREIGN KEY (dni_cliente) REFERENCES clientes (dni);
ALTER TABLE factura_venta ADD CONSTRAINT fk_factura_idenvio FOREIGN KEY (id_pedido) REFERENCES envio (id_pedido);
ALTER TABLE factura_compra ADD CONSTRAINT fk_facturacompra_idproducto FOREIGN KEY (id_producto) REFERENCES productos(id_producto);
ALTER TABLE factura_compra ADD CONSTRAINT fk_facturacompra_idcompra FOREIGN KEY (id_compra) REFERENCES compras(id_compra);


-- NOS SOBRAN LOS ID DE LAS FACTURAS;


