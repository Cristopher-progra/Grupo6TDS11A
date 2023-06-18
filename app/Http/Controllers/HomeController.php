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
                'grupo' => ' TDSV11A',
            ],
            [
                'nombre' => 'CRISTOPHER ALEXANDER 
                ',
                'apellido' => 'MOLINA VALLE',
                'grupo' => ' TDSV11A',
            ],
            [
                'nombre' => 'RENÉ ADONAY ',
                'apellido' => 'CAMPOS MELÉNDEZ',
                'grupo' => ' TDSV11A',
            ],
        ];

        return view('home' , compact('integrantes'));
    }
}


