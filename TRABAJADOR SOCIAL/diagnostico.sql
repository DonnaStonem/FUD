USE f_con_derechos;
CREATE TABLE diagnostico_inicial (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    ciudad_localidad VARCHAR(100) NOT NULL,
    narracion_sucedido TEXT NOT NULL,
    referencias_ubicacion TEXT,
    nombre_nna VARCHAR(100) NOT NULL,
    edad_nna INT NOT NULL,
    nombre_responsable VARCHAR(100) NOT NULL,
    ocupacion_responsable VARCHAR(100) NOT NULL,
    parentesco_nna VARCHAR(50) NOT NULL,
    tipo_vivienda VARCHAR(50) NOT NULL,
    sosten_economico VARCHAR(100),
    nna_nacionalidad ENUM('si', 'no') NOT NULL
);
