<?php
// Obtener los datos enviados por el formulario
$user = $_POST['user'];
$pass = $_POST['pass'];

// Realizar una conexión a la base de datos (asumiendo que ya has definido la función Conectarse())
include("Conexion.php");
$link = Conectarse();

// Consultar la base de datos para verificar las credenciales del usuario
$query = "SELECT Contrasenna FROM usuario WHERE id = '$user'";
$result = mysqli_query($link, $query);

if ($result) {
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row["Contrasenna"] == $pass) {
            // Las credenciales son correctas, redirigir al usuario al menú
            header("Location: Menu.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "<script>alert('Credenciales inválidas.');</script>";
        }
    } else {
        // No se encontró el usuario
        echo "<script>alert('El usuario no existe.');</script>";
    }
} else {
    // Error en la consulta
    echo "<script>alert('Error en la consulta.');</script>";
}

// Redirigir de nuevo a la página de inicio de sesión
echo "<script>window.location.href='Login.html';</script>";
?>
