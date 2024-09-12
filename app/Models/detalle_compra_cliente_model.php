<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_compra_cliente_model extends Model
{
    use HasFactory;
    public function producto_vendedor(){
        return $this->BelongsTo(ProductosVendedorModel::class,'producto_id');
    }
}
