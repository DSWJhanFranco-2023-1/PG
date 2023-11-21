<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Recurso Humano</title>
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

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #f1c40f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #d4ac0d;
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
    <h1>Formulario Recurso Humano</h1>
    <form action="procesar_recurso_humano.php" method="post">
        <label for="solicitud">Solicitud:</label>
        <select id="solicitud" name="solicitud" required>
            <option value="Desarrollador JDE">Desarrollador JDE</option>
            <option value="Desarrollador .NET">Desarrollador .NET</option>
            <option value="Desarrollador Java">Desarrollador Java</option>
            <option value="QA Funcional">QA Funcional</option>
            <option value="QA No Funcional">QA No Funcional</option>
            <option value="Automatizador">Automatizador</option>
            <option value="Líder de Pruebas">Líder de Pruebas</option>
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
