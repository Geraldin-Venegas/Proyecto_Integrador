<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "organigrama";

// Parámetros recibidos desde el código QR
$curp = $_GET['curp'];

// Conecta a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Inserta los datos en la base de datos (esto es un ejemplo, puedes adaptarlo según tu estructura de base de datos)
//$sql = "INSERT INTO tu_tabla (nombre, edad) VALUES ('$curp')";//Cambiar por la instruccion update
//$sql = "INSERT INTO tu_tabla (nombre, edad) VALUES ('$curp')";//Cambiar por la instruccion update
$sql = "INSERT INTO `usuarios`(`id_usuario`, `numCuenta`, `nombre`, `apellidoP`, `apellidoM`, `rfc`, `numTelefonico`, 
`tipo`, `costo`, `horaPrestamo`, `horaEntrega`, `total`) VALUES (NULL,'2021330023','Geraldin','Venegas','Margarito','VEMG030811','7121644082','Programador','$125','10-12-2023','11-12-2023','$125')";


if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
