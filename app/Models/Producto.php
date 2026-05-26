<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    protected $fillable = ['nombre', 'precio', 'stock', 'id_categoria'];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }
}