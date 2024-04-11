<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
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
            padding: 20px;
            width: 80%;
            max-width: 800px;
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        .btn-secondary {
            background-color: #28a745; /* Verde */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Cliente</h1>
        <p><strong>ID:</strong> {{ $customer->id }}</p>
        <p><strong>Nombre:</strong> {{ $customer->customerName }}</p>
        <p><strong>Dirección de entrega:</strong> {{ $customer->deliveryAddress }}</p>
        <p><strong>Datos fiscales:</strong> {{ $customer->fiscalData }}</p>
        <!-- Puedes agregar más detalles si lo deseas -->
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
