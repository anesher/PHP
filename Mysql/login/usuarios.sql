-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS registro;

-- Usar la base de datos creada
USE registro;

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,          -- Identificador único para cada usuario
    nombre_usuario VARCHAR(50) NOT NULL,        -- Nombre de usuario (máximo 50 caracteres)
    correo VARCHAR(100) NOT NULL UNIQUE,        -- Correo electrónico único (máximo 100 caracteres)
    contraseña VARCHAR(255) NOT NULL,           -- Contraseña encriptada o texto (máximo 255 caracteres)
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Fecha y hora de registro
);

-- Opcional: Insertar datos de prueba
INSERT INTO usuarios (nombre_usuario, correo, contraseña)
VALUES 
('Usuario1', 'usuario1@correo.com', 'contraseña123'),
('Usuario2', 'usuario2@correo.com', 'contraseña456');
