<?php

namespace App\Repo;

use App\Models\Pizza;
use App\Models\Solicitud;

class SolicitudRepo {
    
    public function listar(){
        return Solicitud::all();
    }

    public function getPizzas(){
        return Pizza::all();
    }
    
    public function insertarSolicitud(Solicitud $solicitud):bool {
        return $solicitud->save();
    }
}