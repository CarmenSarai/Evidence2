<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Cambiado a un tono más claro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px; /* Aumentado el espacio interno */
            width: 80%;
            max-width: 600px; /* Ajustado el ancho máximo */
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 30px; /* Aumentado el espacio inferior */
        }

        .form-group {
            margin-bottom: 25px; /* Aumentado el espacio inferior */
        }

        label {
            font-weight: bold;
            margin-bottom: 5px; /* Aumentado el espacio inferior */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary,
        .btn-secondary {
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            margin-right: 10px; /* Agregado margen derecho */
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Cliente</h1>
        <!-- Formulario de creación -->
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="customerName">Nombre:</label>
                <input type="text" name="customerName" id="customerName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deliveryAddress">Dirección de entrega:</label>
                <input type="text" name="deliveryAddress" id="deliveryAddress" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fiscalData">Datos fiscales:</label>
                <input type="text" name="fiscalData" id="fiscalData" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
