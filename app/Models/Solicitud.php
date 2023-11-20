<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';
    protected $fillable = ['idPizza', 'cliente'];

    public function pizzas(){
        return $this->hasOne(Pizza::class, 'id', 'idPizza');
    }
}
