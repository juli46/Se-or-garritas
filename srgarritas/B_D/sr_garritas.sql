create database sr_garritas;
 use sr_garritas;
CREATE TABLE agendar_cita(
id_agendar_cita int auto_increment primary key,
nombres varchar(60),
apellidos varchar(60),
correo_electronico varchar(60) unique,
telefono varchar (20),
fecha date,
hora time,
total_pagar decimal,
especificacion varchar(60));


CREATE TABLE cliente (
  id_cliente int(4) primary key auto_increment,
  documento varchar(10) NOT NULL,
  nombre varchar(60) NOT NULL,
  apellido1 varchar(60) NOT NULL,
  apellido2 varchar(60) NOT NULL,
  direccion varchar(60) NOT NULL,
  celular int(10) NOT NULL,
  correo_electronico varchar(60) NOT NULL,
  clave varchar(50) NOT NULL
);

INSERT INTO cliente VALUES
(1, '53535353', 'juan', 'Perez', 'Gomez', 'calle 103', 2147483647, 'dairo123@gmail.com', '12345'),
(2, '61373273', 'juliana', 'Perez', 'henao', 'calle 104', 713718381, 'juli@gmail.com', '12345'),
(3, '61373273', 'lorena', 'pineda', 'Gomez', 'calle 103', 2147483647, 'lore@gmail.com', '12345');

CREATE TABLE funcionario (
  id_funcionario int(4) NOT NULL,
  documento varchar(10) NOT NULL,
  nombre varchar(60) NOT NULL,
  apellido1 varchar(60) NOT NULL,
  apellido2 varchar(60) NOT NULL,
  correo_electronico varchar(60) NOT NULL,
  celular int(10) NOT NULL,
  cargo varchar(20) NOT NULL,
  especializacion varchar(30) NOT NULL,
  horario varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE mascota(
  id_mascota int(4) NOT NULL,
  nombre varchar(60) NOT NULL,
  especie varchar(30) NOT NULL,
  raza varchar(30) NOT NULL,
  color varchar(20) DEFAULT NULL,
  sexo varchar(10) NOT NULL,
  edad varchar(2) NOT NULL,
  descripcion varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE productos (
  id_producto int(4) NOT NULL,
  nombre varchar(25) NOT NULL,
  descripcion varchar(20) NOT NULL,
  costo int(4) NOT NULL,
  fecha_de_vencimiento date NOT NULL,
  cantidad int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE registro (
  id_registro int(4) NOT NULL,
  nombre varchar(40) DEFAULT NULL,
  apellido1 varchar(30) DEFAULT NULL,
  apellido2 varchar(30) DEFAULT NULL,
  direccion varchar(20) DEFAULT NULL,
  celular varchar(15) DEFAULT NULL,
  correo varchar(40) DEFAULT NULL,
  clave varchar(16) DEFAULT NULL,
  c_clave varchar(16) DEFAULT NULL,
  identificacion varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE servicios (
  id_servicio int(4) NOT NULL,
  nombre varchar(30) NOT NULL,
  descripcion varchar(30) NOT NULL,
  costo varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE usuarios (
  id_usuario int(4) NOT NULL,
  usuarios varchar(60) NOT NULL,
  clave varchar(60) NOT NULL,
  estado varchar(10) NOT NULL,
  perfil varchar(20) NOT NULL
);

INSERT INTO usuarios VALUES
(1, "sr.admin@gmail.com", "sr.garritastupatron123", "activo", "admin"),
(2, "sr.user@gmail.com", "sr.gatunotujefe321", "activo", "usuario");

