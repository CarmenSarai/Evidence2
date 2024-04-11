<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #83C799;
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
            padding: 30px;
            width: 80%;
            max-width: 800px; /* Aumentado el ancho máximo */
            margin-top: 30px; /* Añadido espacio superior */
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da;
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
            margin-right: 10px;
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
        <h1>Editar Cliente</h1>
        <!-- Formulario de edición -->
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customerName">Nombre:</label>
                <input type="text" name="customerName" id="customerName" class="form-control" value="{{ $customer->customerName }}" required>
            </div>
            <div class="form-group">
                <label for="deliveryAddress">Dirección de entrega:</label>
                <input type="text" name="deliveryAddress" id="deliveryAddress" class="form-control" value="{{ $customer->deliveryAddress }}" required>
            </div>
            <div class="form-group">
                <label for="fiscalData">Datos fiscales:</label>
                <input type="text" name="fiscalData" id="fiscalData" class="form-control" value="{{ $customer->fiscalData }}" required>
            </div>
            <!-- Botón de guardar -->
            <button type="submit" class="btn btn-primary">Guardar</button>
            <!-- Botón de cancelar -->
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
