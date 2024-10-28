USE f_con_derechos;
CREATE TABLE solicitudes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lugar_solicitud VARCHAR(255) NOT NULL,
    fecha_solicitud DATE NOT NULL,
    quien_realiza_solicitud ENUM('victima_directa', 'victima_familiar', 'servidor_publico', 'representante_legal') NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    primer_apellido VARCHAR(255) NOT NULL,
    segundo_apellido VARCHAR(255),
    edad INT NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    enfermedades_alergias ENUM('Si', 'No', 'No lo sé') NOT NULL,
    telefono_movil VARCHAR(15),
    telefono_fijo VARCHAR(15),
    calle VARCHAR(255) NOT NULL,
    codigo_postal VARCHAR(10) NOT NULL,
    numero_exterior VARCHAR(10) NOT NULL,
    numero_interior VARCHAR(10),
    colonia VARCHAR(255) NOT NULL,
    localidad VARCHAR(255) NOT NULL,
    delegacion VARCHAR(255) NOT NULL,
    entidad_federativa VARCHAR(255) NOT NULL,
    relato_hechos TEXT NOT NULL
);
