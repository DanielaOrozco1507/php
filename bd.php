<?php
// Configuración de conexión
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_de_datos = 'PHPFACIL';

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contraseña);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa al servidor MySQL<br>";

// Crear base de datos PHPFACIL si no existe
$sql = "CREATE DATABASE IF NOT EXISTS $base_de_datos";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos $base_de_datos creada correctamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conexion->error . "<br>";
}

// Seleccionar la base de datos PHPFACIL
$conexion->select_db($base_de_datos);

// Crear la tabla cursos
$sql = "CREATE TABLE IF NOT EXISTS cursos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombrecur VARCHAR(40) NOT NULL
)";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla cursos creada correctamente<br>";
} else {
    echo "Error al crear la tabla cursos: " . $conexion->error . "<br>";
}

// Crear la tabla alumnos
$sql = "CREATE TABLE IF NOT EXISTS alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    curso VARCHAR(100)
)";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla alumnos creada correctamente<br>";
} else {
    echo "Error al crear la tabla alumnos: " . $conexion->error . "<br>";
}

// Insertar datos en la tabla cursos
$sql = "INSERT INTO cursos (nombrecur) VALUES ('Curso de PHP')";
if ($conexion->query($sql) === TRUE) {
    echo "Nuevo curso insertado: Curso de PHP<br>";
} else {
    echo "Error al insertar curso: " . $conexion->error . "<br>";
}

// Insertar datos en la tabla alumnos
$sql = "INSERT INTO alumnos (nombre, curso) VALUES ('Juan Pérez', 'Curso de PHP')";
if ($conexion->query($sql) === TRUE) {
    echo "Nuevo alumno insertado: Juan Pérez<br>";
} else {
    echo "Error al insertar alumno: " . $conexion->error . "<br>";
}

// Cerrar la conexión
$conexion->close();
?>
