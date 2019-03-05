<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;

class pdfvehiculosController extends Controller
{
    public function store(Request $request){
        $registros = DB::table('bita_vehiculos')->where('Fecha', 'like', '%' .$request['buscador']. '%')->get();
        $registross = DB::table('nuevo_vehiculos')->where('id', $registros[0]->id_vehiculo)->get();
        $view = \View::make('Rendimiento-Combustible.rcPDF')->with('registros', $registros)->with('registross', $registross);
        $pdf = new TCPDF();
        $pdf::changeFormat('A4');
        $pdf::SetTitle('Residuos Plaguicidas');
        $pdf::AddPage('L');
        $pdf::writeHTML($view, true, false, true, false, '');
        $pdf::Output('bitacora_Vehiculos.pdf');
    }
}
