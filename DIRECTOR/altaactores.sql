USE f_con_derechos;
CREATE TABLE actores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    servicios VARCHAR(255) NOT NULL,
    tipos_servicios VARCHAR(255) NOT NULL,
    horario VARCHAR(100) NOT NULL,
    contacto VARCHAR(255) NOT NULL,
    capacidad INT NOT NULL,
    fecha_deteccion DATE NOT NULL
);
