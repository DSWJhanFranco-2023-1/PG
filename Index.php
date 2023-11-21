<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Software de Control y Seguimiento de Solicitudes</title>
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
            border: 1px solid #ccc;
            border-radius: 5px;
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
        <h1>Software de Control y Seguimiento de Solicitudes</h1>
        Los usuarios comunes consultar registros y al administrador gestionar datos a
        través de una página de inicio de sesión. La aplicación se despliega
        localmente y admite la gestión de varios tipos de datos según las preferencias del usuario.
        <br>
        <?php
            include("Conexion.php");
            $link = Conectarse();
            $result = mysqli_query($link, "SELECT * from usuario");
        ?>
        <table border="0">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    printf(
                        "<tr>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                        </tr>",
                        $row["Id"],
                        $row["Nombre"],
                        $row["Apellido"]
                    );
                }
                mysqli_free_result($result);
            ?>
        </table>
        <br>
        <a href="Login.html">Iniciar sesión</a>
    </div>
</body>
</html>
