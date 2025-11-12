<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'stock', 'descripcion'];

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
