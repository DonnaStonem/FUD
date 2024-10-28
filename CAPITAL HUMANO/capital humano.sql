USE f_con_derechos;
CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    rfc VARCHAR(13),
    curp VARCHAR(18),
    grado_estudios VARCHAR(50),
    sexo VARCHAR(10),
    correo VARCHAR(100),
    usuario VARCHAR(50),
    contrasena VARCHAR(255),
    fecha_nacimiento DATE,
    titulo_obtenido VARCHAR(100),
    foto_perfil VARCHAR(255),
    cedula_profesional VARCHAR(255)
);
