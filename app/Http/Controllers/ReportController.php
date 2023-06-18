<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function exportPdfpedido(Request $request)
    {
        $nombreVista = $request->input('index', 'default'); // Obtener el nombre de la vista del parámetro, 'default' si no se proporciona
        $vista = "pedido.{$nombreVista}";

        if (!View::exists($vista)) {
            // Si la vista no existe, puedes manejar el error adecuadamente
            abort(404);
        }

        $pdf = new Dompdf();
        $pdf->loadHtml(View::make($vista)->render());
        $pdf->render();
        return $pdf->stream('report.pdf');
    }


    public function exportPdfcliente(Request $request)
    {
        $nombreVista = $request->input('clientList', 'default'); // Obtener el nombre de la vista del parámetro, 'default' si no se proporciona
        $vista = "client.{$nombreVista}";

        if (!View::exists($vista)) {
            // Si la vista no existe, puedes manejar el error adecuadamente
            abort(404);
        }

        $pdf = new Dompdf();
        $pdf->loadHtml(View::make($vista)->render());
        $pdf->render();
        return $pdf->stream('report.pdf');
    }
}
