<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       //contando el total
        $totalClientes = Cliente::count();
        $totalEmpleados = Empleado::count();
        $totalProductos = Producto::count();

        //ordenando y guardando los ultimos 3 de cada uno de los modelos
        $ultimosClientes = Cliente::orderBy('created_at', 'desc')->take(3)->get();
        $ultimosEmpleados = Empleado::orderBy('created_at', 'desc')->take(3)->get();
        $ultimosProductos = Producto::orderBy('created_at', 'desc')->take(3)->get();

        //rernando las variables para mi vista home
        return view('home', compact(
            'totalClientes', 'totalEmpleados', 'totalProductos',
            'ultimosClientes', 'ultimosEmpleados', 'ultimosProductos'
        ));
    }
}
