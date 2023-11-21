<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aplicaciones Telematicasn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #f1c40f;
        }
        table {
            width: 100%;
        }
        table tr {
            margin-bottom: 10px;
        }
        table td {
            padding: 10px;
        }
        table th {
            background-color: #f1c40f;
            color: #fff;
        }
        table td,
        table th {
            border: 0px solid #ccc;
            border-radius: 5px;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #f1c40f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #f1c40f;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #f1c40f;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #f1c40f;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Menu</h1>
    <form action="guardar.php" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="Nombre" /></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="Apellido"></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="text" name="Contrasenna"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Guardar"></td>
            </tr>
        </table>
    </form>
    <?php
    include("Conexion.php");
    $link = Conectarse();
    $result = mysqli_query($link, "SELECT * from usuario");
    ?>

    <br>
    <a href="Index.php">Cerrar sesión</a>
</div>
</body>
</html>