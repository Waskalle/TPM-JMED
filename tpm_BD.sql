create database tpm;

use tpm;

create table alumno(
alumno_id varchar(30) not null PRIMARY KEY,
alumno_nombre varchar(50) not null,
alumno_apellidos varchar(50) not null,
alumno_edad int(2) not null,
alumno_grupo varchar(50),
alumno_carrera varchar(50),
alumno_tarea varchar(50),
alumno_rol varchar(50),
proyecto_id varchar(30),
empresa_id varchar(30)
);

create table maestro(
maestro_id varchar(30) PRIMARY KEY,
maestro_nombre varchar(50) not null,
maestro_apellidos varchar(50) not null,
maestro_edad int(2) not null,
maestro_correo varchar(50) not null,
maestro_estado varchar(50) not null,
maestro_materia varchar(50) not null
);

CREATE TABLE tarea (
tarea_id varchar (30) not null PRIMARY KEY,
tarea_nombre varchar (100) not null,
tarea_descripcion varchar (300) not null,
tarea_fechainicio date not null,
tarea_fechafin date not null,
tarea_comentarios varchar (300),
tarea_herramientas varchar (500) not null,
tarea_estado varchar (20) not null,
alumno_id varchar (30) not null,
fase_id varchar (30) not null,
maestro_id varchar (30) not null
);

create table proyecto(
proyecto_id varchar(30) PRIMARY KEY,
proyecto_nombre varchar(50),
proyecto_descripcion varchar(50)
);

create table fase(
fase_id varchar(30) PRIMARY KEY,
fase_nombre varchar(50) not null,
fase_cuatrimestre varchar(50),
fase_fecha date,
proyecto_id varchar(30)
);

CREATE TABLE empresa (
empresa_id varchar (30) not null PRIMARY KEY,
empresa_nombre varchar (150) not null,
empresa_descripcion varchar (300) not null,
proyecto_id varchar (30) not null,
empresa_estado varchar (20) not null 
);

CREATE TABLE cliente (
cliente_id varchar (30) not null PRIMARY KEY,
cliente_nombre varchar (150) not null,
cliente_descripcion varchar (300) not null,
cliente_telefono varchar (20) not null,
cliente_correo varchar (20) not null,
cliente_direccion varchar (50) not null,
cliente_giro varchar (50) not null,
cliente_estado varchar (20) not null,
proyecto_id varchar (30) not null
);

ALTER TABLE alumno ADD CONSTRAINT FK_Alumno_Proyecto
FOREIGN KEY (proyecto_id)
REFERENCES proyecto (proyecto_id);

ALTER TABLE alumno ADD CONSTRAINT FK_Alumno_Empresa
FOREIGN KEY (empresa_id)
REFERENCES empresa(empresa_id);

ALTER TABLE fase ADD CONSTRAINT FK_Fase_Proyecto
FOREIGN KEY (proyecto_id)
REFERENCES proyecto (proyecto_id);

/* FOREING KEYS para tarea */

-- ALUMNO
ALTER TABLE tarea ADD CONSTRAINT FK_Tarea_Alumno
FOREIGN KEY (alumno_id)
REFERENCES alumno (alumno_id);

-- FASE
ALTER TABLE tarea ADD CONSTRAINT FK_tarea_Fase
FOREIGN KEY (fase_id)
REFERENCES fase (fase_id);

-- MAESTRO
ALTER TABLE tarea ADD CONSTRAINT FK_Tarea_Maestro
FOREIGN KEY (maestro_id)
REFERENCES maestro (maestro_id);

/* FIN DEL ALTER | tarea */


/* FOREING KEYS para tarea */

-- PROYECTO
ALTER TABLE empresa ADD CONSTRAINT FK_Empresa_Proyecto
FOREIGN KEY (proyecto_id)
REFERENCES proyecto (proyecto_id);

/* FIN DEL ALTER | empresa */



/* FOREING KEYS para cliente */

-- PROYECTO
ALTER TABLE cliente ADD CONSTRAINT FK_Cliente_Proyecto
FOREIGN KEY (proyecto_id)
REFERENCES proyecto (proyecto_id);

/* FIN DEL ALTER | cliente */
Create table usuarios(
id_usuario varchar (30) primary key,
nombre_usuario varchar (50) not null,
contraseña_usuario varchar (50) not null,
tipo_usuario varchar (20) not null
)
