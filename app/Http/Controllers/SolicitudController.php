<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Repo\SolicitudRepo;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function __construct(public SolicitudRepo $solicitudRepo){
        
    }
    
    public function listar(){
        $solicitudes = $this->solicitudRepo->listar();
        return view('solicitudes.listar', ['solicitudes' => $solicitudes]);
    }

    public function addSolicitudGet(){
        $solicitud = new Solicitud();
        $pizzas = $this->solicitudRepo->getPizzas();
        return view('solicitudes.ingresar', ['solicitud' => $solicitud, 'pizzas' => $pizzas]);
    }

    public function addSolicitudPost(Request $request){
        $solicitud = new Solicitud($request->all());
        $exito = $this->solicitudRepo->insertarSolicitud($solicitud);
        if($exito){
            return redirect()->route('solicitudes.listar');
        }
        $pizzas = $this->solicitudRepo->getPizzas();
        return view('solicitudes.ingresar', ['solicitud' => $solicitud, 'pizzas' => $pizzas]);
    }
}
