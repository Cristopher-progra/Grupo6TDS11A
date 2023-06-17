<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $integrantes = [
            [
                'nombre' => 'Ronal Oswaldo',
                'apellido' => 'Gonzalez Guardado',
                'grupo' => 'Grupo 6',
            ],
            [
                'nombre' => 'Jane',
                'apellido' => 'Smith',
                'grupo' => 'Grupo 2',
            ],
            [
                'nombre' => 'Alice',
                'apellido' => 'Johnson',
                'grupo' => 'Grupo 3',
            ],
        ];

        return view('home' , compact('integrantes'));
    }
}
