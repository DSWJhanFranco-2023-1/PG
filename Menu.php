<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selección de Módulos</title>
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
            max-width: 400px;
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

        input[type="radio"] {
            display: none; /* Oculta los radio buttons predeterminados */
        }

        label {
            font-size: 18px;
            display: block;
            padding: 15px;
            border: 2px solid #3498db;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        label:hover {
            background-color: #3498db;
            color: #fff;
        }

        input[type="button"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="button"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Seleccione un Módulo</h1>
    <form id="moduloForm">
        <input type="radio" id="recursoHumano" name="modulo" value="recursoHumano" required>
        <label for="recursoHumano">Recurso Humano</label>

        <input type="radio" id="recursoTangible" name="modulo" value="recursoTangible" required>
        <label for="recursoTangible">Recurso Tangible</label>

        <input type="radio" id="recursoIntangible" name="modulo" value="recursoIntangible" required>
        <label for="recursoIntangible">Recurso Intangible</label>

        <input type="button" onclick="redirigir()" value="Seleccionar">
    </form>
</div>

<script>
    function redirigir() {
        var form = document.getElementById("moduloForm");
        var selectedModule = null;

        // Obtener el valor del módulo seleccionado
        for (var i = 0; i < form.elements.length; i++) {
            if (form.elements[i].type === "radio" && form.elements[i].checked) {
                selectedModule = form.elements[i].value;
                break;
            }
        }

        // Redirigir a la página correspondiente
        if (selectedModule !== null) {
            window.location.href = selectedModule + ".php";
        } else {
            alert("Por favor, seleccione un módulo.");
        }
    }
</script>

</body>
</html>
