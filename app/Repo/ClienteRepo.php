<?php

namespace App\Repo;

use App\Models\User;

class ClienteRepo{
    
    public function listar(){
        return User::all();
    }
}