<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    // Mostrar la lista de clientes
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', ['customers' => $customers]);
    }

    // Mostrar detalles de un cliente específico
    public function show($customers_id)
    {
        $customer = Customers::find($customers_id);
        return view('customers.show', ['customer' => $customer]);
    }

    // Mostrar el formulario para crear un nuevo cliente
    public function create()
    {
        return view('customers.create');
    }

    // Almacenar un nuevo cliente
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'customerName' => 'required|string|max:255',
            'deliveryAddress' => 'required|string|max:255',
            'fiscalData' => 'required|string|max:255',
        ]);

        // Crear un nuevo cliente
        $customer = new Customers([
            'customerName' => $request->input('customerName'),
            'deliveryAddress' => $request->input('deliveryAddress'),
            'fiscalData' => $request->input('fiscalData'),
        ]);
        $customer->save();

        // Redireccionar a la lista de clientes con un mensaje de éxito
        return redirect('/customers')->with('success', 'Cliente creado exitosamente.');
    }

    // Mostrar el formulario para editar un cliente
    public function edit($customers_id)
    {
        $customer = Customers::find($customers_id);
        return view('customers.edit', ['customer' => $customer]);
    }

    // Actualizar un cliente existente
    public function update(Request $request, $customers_id)
    {
        // Validar los datos del formulario
        $request->validate([
            'customerName' => 'required|string|max:255',
            'deliveryAddress' => 'required|string|max:255',
            'fiscalData' => 'required|string|max:255',
        ]);

        // Buscar el cliente a actualizar
        $customer = Customers::find($customers_id);

        // Actualizar los datos del cliente
        $customer->customerName = $request->input('customerName');
        $customer->deliveryAddress = $request->input('deliveryAddress');
        $customer->fiscalData = $request->input('fiscalData');
        $customer->save();

        // Redireccionar a la lista de clientes con un mensaje de éxito
        return redirect('/customers')->with('success', 'Cliente actualizado exitosamente.');
    }

    // Eliminar un cliente existente
    public function destroy($customers_id)
    {
        // Buscar el cliente a eliminar
        $customer = Customers::find($customers_id);
        $customer->delete();

        // Redireccionar a la lista de clientes con un mensaje de éxito
        return redirect('/customers')->with('success', 'Cliente eliminado exitosamente.');
    }
}
