<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel Orders</title>
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
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 80%;
            max-width: 800px;
            margin-top: 30px;
        }

        h1 {
            color: #fff;
            background-color: #83C799;
            text-align: center;
            padding: 20px 0;
            border-radius: 8px 8px 0 0;
            margin-top: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            background-color: #83C799;
            border-radius: 4px;
            padding: 10px;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color:  #fff;
            margin: 10px;
            padding: 5px 10px;
            border-radius: 4px;
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

        .table {
            width: 100%;
        }

        .table th, .table td {
            border: 1px solid #83C799;
            padding: 12px;
            text-align: center;
        }

        .table th {
            background-color: #83C799;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halcon Service Application</h1>
        <nav>
            <ul class="bg-primary">
                <li><a href="{{ route('customers.index') }}">Orders</a></li>
                <li><a href="{{ route('customers.index') }}">Customers</a></li>
                <li><a href="{{ route('customers.index') }}">Products</a></li>
                <li><a href="{{ route('users.index') }}">User</a></li>
            </ul>
        </nav>

        <nav>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Create Order</a>
        </nav><br><br>

        <div class="form-group">
            <label for="invoiceNumber">Search by Invoice Number:</label>
            <br><input type="text" id="invoiceNumber" name="invoiceNumber" class="form-control" placeholder="Enter Invoice Number">
            <button type="button" class="btn btn-primary mt-2">Search</button>
        </div>
    </div>
</body>
</html>

