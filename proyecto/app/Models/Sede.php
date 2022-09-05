<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table='sedes';
    use HasFactory;
    public function conferencia(){
        return $this->hasMany(Conferencia::class);
    }
}
