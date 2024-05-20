<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'imagen',
        'precio',
        'descripcion',
        'categoria_id',
        'stock',
        'proveedor_id',
        'fecha',

    ];

    public function proveedores(){
        return $this->belongsTo(Proveedores::class,'proveedor_id');
    }

    public function categorias(){
        return $this->belongsTo(Categorias::class,'categoria_id');
    }
}
