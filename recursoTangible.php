<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Recurso Tangilbe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .cerrar-sesion {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #e74c3c;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .cerrar-sesion:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Formulario Recurso Tangible</h1>
    <form action="procesar_recurso_humano.php" method="post">
        <label for="solicitud">Solicitud:</label>
        <select id="solicitud" name="solicitud" required>
            <option value="Maquinas de Mesa">Maquinas de Mesa</option>
            <option value="Maquinas PortatilT">Maquinas Portatil</option>
            <option value="Dispositivo Android">Dispositivo Android</option>
            <option value="Dispositivo IOS">Dispositivo IOS</option>
            <option value="Tablet">Tablet</option>
        </select>

        <label for="fechaInicial">Fecha Inicial:</label>
        <input type="date" id="fechaInicial" name="fechaInicial" required>

        <label for="fechaFinal">Fecha Final:</label>
        <input type="date" id="fechaFinal" name="fechaFinal" required>

        <label for="tiempoHoras">Tiempo en Horas:</label>
        <input type="number" id="tiempoHoras" name="tiempoHoras" required>

        <label for="requisitos">Requisitos:</label>
        <textarea id="requisitos" name="requisitos" rows="4" required></textarea>

        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones" rows="4"></textarea>

        <label for="presupuesto">Presupuesto:</label>
        <input type="text" id="presupuesto" name="presupuesto">

        <input type="submit" value="Enviar Solicitud">
    </form>
    <a class="cerrar-sesion" href="Index.php">Cerrar sesión</a>
</div>
</body>
</html>
